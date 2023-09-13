<?php
// error_reporting(E_ALL);
// ini_set('display_errors', '1');
// echo "hello";
// die;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Include the PHPMailer autoloader
require_once '../models/UserModel.php';
require_once '../controllers/StudentController.php';


$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['HTTP_REFERER'];

   function register() {
        // Handle the registration form submission here.
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $role = $_POST['role']; // Assuming this is selected during registration.

            // Validate user input.
            // Implement proper input validation and password hashing.
            $userModel = new UserModel();
            $userAlready ="";
           
            try{
                if(count($userModel->getUser($username)) > 1)
                {
                  $userAlready = count($userModel->getUser($username));
                }
            }
            catch(Exception $e) {
              //echo 'Message: ' .$e->getMessage();
            }
        //     echo $userAlready;
        //    die;
            if($userAlready == "")
            {
                if ($userModel->createUser($username, $password, $role)) {
                    echo json_encode(['success' => true]);
                    exit;
                } else {
                    echo json_encode(['success' => false, 'message' => 'Registration failed']);
                    exit;
                }
            }
            else{
                echo json_encode(['success' => false, 'message' => 'User Already Exists !!!']);
                    exit;
            }
        }
    }

    function student_registration() {
        // Handle the registration form submission here.
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $student_name = $_POST['student_name']?? "";
            $father_name = $_POST['father_name']?? "";
            $mother_name = $father_name;
            $class = $_POST['classes']?? "";
            $address = $_POST['address']?? "";
            $city = $_POST['city']?? "";
            $district = $_POST['district']?? "";
            $state = $_POST['state']?? "";
            $pincode = $_POST['pincode'];
            $school_name = $_POST['school_name']?? "";
            $school_address = $_POST['school_address']?? "";
            $school_city = $_POST['school_city']?? "";
            $school_district = $_POST['school_district']?? "";
            $school_state = $_POST['school_state']?? "";
            $school_pincode = $_POST['school_pincode']?? "";
            $mobile = $_POST['mobile']?? "";
            $alrernate_mobile = $_POST['alternate_mobile']?? "";
            $email = $_POST['email']?? "";
            $board_syllabus = $_POST['board_syllabus']?? "";
            $catalyst_olympiad = $_POST['class']?? "";
            $roll_number = $_POST['student_name']?? "";
            $role = "student"; // Assuming this is selected during registration.
            $password = "jemsco".$_POST['student_name']?? "";
            $username = $email;
            // Validate user input.
            // Implement proper input validation and password hashing.
             $currentDateTime = new DateTime('now');
            $currentDate = $currentDateTime->format('dm');            

            $studentController = new StudentController();
            $lastStudent = $studentController->getLastStudentId();

            $userModel = new UserModel();
            $userAlready ="";
            $userAlready = $userModel->getStudentByEmail($email);

            $lastTwoNumbers = (int) substr($mobile, -2);
            //echo $lastTwoNumbers;
            $roll_number1 =$currentDate.substr($student_name, 0, 2);
            $roll_number2= $lastTwoNumbers.$lastStudent['id']+1;
            
            $roll_number = strtoupper($roll_number1.$roll_number2);
            $password = $roll_number;
            
            if($userAlready == "")
            {
                if ($userModel->createStudent($student_name, $father_name, $mother_name,$class, $address, $city, $district, $state, $pincode, $school_name,  $school_address,  $school_city, $school_district,  $school_state, $school_pincode, $mobile,$alrernate_mobile, $email,$password, $board_syllabus, $catalyst_olympiad, $roll_number, $role)) {
                    session_start();
                    $_SESSION['email'] = $email;
                    
                    if(sendmail($father_name,$student_name,$mobile,$email,$city,$school_name,$currentDateTime->format('d-m-y'),$password)){
                        echo json_encode(['success' => true, 'message'=>'Email Sent Successfully']);
                        exit;
                    }
                    else{
                        echo json_encode(['success' => true, 'message'=>'Email Failed']);
                        exit;
                    }
                   
                } else {
                    echo json_encode(['success' => false, 'message' => 'Registration failed']);
                    exit;
                }
            }
            else{
                echo json_encode(['success' => false, 'message' => 'Student Already Exists !!!']);
                    exit;
            }
        }
    }

  function login() {
        // Handle the login form submission here.
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
           $password = $_POST['password'];

            // Validate user credentials and check the role.
            $userModel = new UserModel();
            $user = $userModel->getUserByUsername($username);
            $auth = $userModel->authenticate($username);
           if($auth == "true")
           {
                $userActive =0;
                $role = "";
                // $userActive = $userModel->getUser($username);
                // echo json_encode(['success' => false, 'message' => $userActive]);
                // die;
                try{
                 $userActive = $userModel->getUser($username)['status'];
                 $role = $userModel->getUser($username)['role'];
                }
                catch(Exception $e) {
              //echo 'Message: ' .$e->getMessage();
            }
                
                if($userActive == 1 &&  $role == "admin")
                {
                
                    if ($user && password_verify($password, $user['password'])) {
                        // Successful login, set a session variable for user role.
                        session_start();
                        $_SESSION['id'] = $user['id'];
                        echo json_encode(['success' => true, 'message' => 'Successfully Logged In']);
                      exit;
                        
                    } else {
                        echo json_encode(['success' => false, 'message' => 'Invalid credentials']);
                        exit;
                    }
                }
                else{
                    echo json_encode(['success' => false, 'message' => 'Your Account Not in Active, Please Contact Administrator.']);
                    exit;
                }
            }
            else{
                echo json_encode(['success' => false, 'message' => 'Account Does not exists. Please Register']);
                    exit;
            }
        }
    }

    function sendmail($father_name,$student_name,$mobile,$email,$city,$school_name,$date,$password)
    {
        

        // Initialize PHPMailer
        $mail = new PHPMailer(true);
        $emailtemp = emailtemplate($father_name,$student_name,$mobile,$email,$city,$school_name,$date, $password);

        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'mail.jemsco.in';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'info@jemsco.in';                        //SMTP username
            $mail->Password   = 'N8MQ[Cgi';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            // $mail->SMTPDebug =2;
            //Recipients
            $mail->setFrom("info@jemsco.in", 'JEMSCO');
            $mail->addAddress($email, $student_name);     //Add a recipient
            // $mail->addAddress('kruthika.k@jemsco.in');               //Name is optional
            $mail->addReplyTo('info@jemsco.in', 'JEMSCO 2023');
            $mail->addBCC('nageshy.php@gmail.com');

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'JEMSCO 2023';
            $mail->Body    = $emailtemp;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            //echo 'Message has been sent';
            return true;
        } catch (Exception $e) {
            //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }


    function emailtemplate($name,$child_name,$phone,$email,$city,$branch,$date, $password)
    {

        $emailtemplate = '<!DOCTYPE html><html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head> <meta charset="utf-8"> <meta name="viewport" content="width=device-width"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="x-apple-disable-message-reformatting"> <title></title> <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700|Lato:300,400,700" rel="stylesheet"> <link href="https://fonts.googleapis.com/css?family=Bree Serif" rel="stylesheet"> <style>ul.footer-socilal-links li{/* float: left; */ display: contents;} ul.footer-socilal-links li a {margin-right: 20px;} ul.footer-socilal-links li a img{width: 20px;}/* What it does: Remove spaces around the email design added by some email clients. */ /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */ html,body{font-family: "Bree Serif"; font-size: 22px; margin: 0 auto !important; padding: 0 !important; height: 100% !important; width: 100% !important; background: #f1f1f1;}/* What it does: Stops email clients resizing small text. */*{-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;}/* What it does: Centers email on Android 4.4 */div[style*="margin: 16px 0"]{margin: 0 !important;}/* What it does: Stops Outlook from adding extra spacing to tables. */table,td{mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;}/* What it does: Fixes webkit padding issue. */table{border-spacing: 0 !important; border-collapse: collapse !important; table-layout: fixed !important; margin: 0 auto !important;}/* What it does: Uses a better rendering method when resizing images in IE. */img{-ms-interpolation-mode:bicubic;}/* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */a{text-decoration: none;}/* What it does: A work-around for email clients meddling in triggered links. */*[x-apple-data-detectors], /* iOS */.unstyle-auto-detected-links *,.aBn{border-bottom: 0 !important; cursor: default !important; color: inherit !important; text-decoration: none !important; font-size: inherit !important; font-family: inherit !important; font-weight: inherit !important; line-height: inherit !important;}/* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */.a6S{display: none !important; opacity: 0.01 !important;}/* What it does: Prevents Gmail from changing the text color in conversation threads. */.im{color: inherit !important;}img.g-img + div{display: none !important;}/* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89 *//* iPhone 4, 4S, 5, 5S, 5C, and 5SE */@media only screen and (min-device-width: 320px) and (max-device-width: 374px){u ~ div .email-container{min-width: 320px !important;}}/* iPhone 6, 6S, 7, 8, and X */@media only screen and (min-device-width: 375px) and (max-device-width: 413px){u ~ div .email-container{min-width: 375px !important;}}/* iPhone 6+, 7+, and 8+ */@media only screen and (min-device-width: 414px){u ~ div .email-container{min-width: 414px !important;}}</style> <style>/* What it does: Hover styles for buttons */ .primary{background: #448ef6;}.bg_white{/* background: #ffffff; */ background-image: url(https://www.orchidsinternationalschool.com/wp-content/uploads/2022/10/sunrays-min.png); background-position: top; background-size: contain; color: #1b3a77;}.bg_light{background: #fafafa;}.bg_black{background: #213286;}.bg_dark{background: rgba(0,0,0,.8);}.email-section{padding:2.5em;}/*BUTTON*/.btn{padding: 5px 15px; display: inline-block;}.btn.btn-primary{border-radius: 30px; background: #448ef6; color: #ffffff;}.btn.btn-white{border-radius: 30px; background: #ffffff; color: #000000;}.btn.btn-white-outline{border-radius: 30px; background: transparent; border: 1px solid #fff; color: #fff;}h1,h2,h3,h4,h5,h6{font-family: "Bree Serif"; /* font-size: 22px; */ color: #1b3a77; margin-top: 0; font-weight: 700;}body{font-family: "Bree Serif"; font-weight: 600; font-size: 15px; line-height: 1.8; color: rgba(0,0,0,.4);}a{color: #448ef6;}table{}/*LOGO*/.logo{margin: 0; display: inline-block; position: absolute; top: 10px; left: 0; right: 0; margin-bottom: 0;}.logo a{color: #fff; font-size: 24px; font-weight: 700; text-transform: uppercase; font-family: "Bree Serif"; display: inline-block; border: 2px solid #fff; line-height: 1.3; padding: 10px 15px 4px 15px; margin: 0;}.logo h1 a span{line-height: 1;}.navigation{padding: 0;}.navigation li{list-style: none; display: inline-block;; margin-left: 5px; font-size: 13px; font-weight: 500;}.navigation li a{color: rgba(0,0,0,.4);}/*HERO*/.hero{position: relative; z-index: 0;}.hero .overlay{position: absolute; top: 0; left: 0; right: 0; bottom: 0;; width: 100%; background: #000000; z-index: -1; opacity: .3;}.hero .text{color: rgba(255,255,255,.9);}.hero .text h2{color: #fff; font-size: 40px; margin-bottom: 0; font-weight: 600; line-height: 1; text-transform: uppercase;}.hero .text h2 span{font-weight: 600; color: #448ef6;}/*HEADING SECTION*/.heading-section{}.heading-section h2{color: #000000; font-size: 28px; margin-top: 0; line-height: 1.4; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;}.heading-section .subheading{margin-bottom: 20px !important; display: inline-block; font-size: 13px; text-transform: uppercase; letter-spacing: 2px; color: rgba(0,0,0,.4); position: relative;}.heading-section .subheading::after{position: absolute; left: 0; right: 0; bottom: -10px; width: 100%; height: 2px; background: #448ef6; margin: 0 auto;}.heading-section-white{color: rgba(255,255,255,.8);}.heading-section-white h2{font-family: "Bree Serif"; line-height: 1; padding-bottom: 0;}.heading-section-white h2{color: #ffffff;}.heading-section-white .subheading{margin-bottom: 0; display: inline-block; font-size: 13px; text-transform: uppercase; letter-spacing: 2px; color: rgba(255,255,255,.4);}/*BLOG*/.blog-entry{border: 1px solid red; padding-bottom: 30px !important !important;}.text-blog .meta{text-transform: uppercase; font-size: 13px; margin-bottom: 0;}/*FOOTER*/.footer{color: rgba(255,255,255,.5);}.footer .heading{color: #ffffff; font-size: 20px;}.footer ul{margin: 0; padding: 0;}.footer ul li{list-style: none; margin-bottom: 10px;}.footer ul li a{color: rgba(255,255,255,1);}@media screen and (max-width: 500px){}</style></head><body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #222222;"> <center style="width: 100%; background-color: #f1f1f1;"> <div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: "Bree Serif"; "> &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp; </div><div style="max-width: 600px; margin: 0 auto;" class="email-container"> <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;"> <tr> <td valign="middle" class="hero bg_white" style="background-image: url(https://www.orchidsinternationalschool.com/wp-content/uploads/2022/11/emailer-topbanner-min.png); background-size: contain; height: 339px;background-repeat: no-repeat;"> <table> <tr> <td> <div class="text" style="padding: 0 4em; text-align: center;"> <h2></h2> <p></p></div></td></tr></table> </td></tr><tr> <td class="bg_white email-section"> <div class="heading-section" style="text-align:center;padding:0 30px;position: relative;color:#213286;top: -39px;"> <h4 style="color:#213286">For Registering With us! <br/> On the eve of childrens Day, visit JEMSCO Exam FAIR with your kids.</h4> <h2 style="border-bottom:1px solid #1b3a77;line-height: 2;width: 314px;text-align: center;display: inline-block;">Registration Successfull, Please check your details here :</h2> </div><table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="style="position: relative; left: 60px;"> <tbody style=" position: relative; left: 59px; color:#213286"> <tr> <td style="padding-bottom: 0px;"> <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%"> <td valign="middle" width="20%" style = "color:#213286"> Name : </td><td valign="middle" width="50%" style = "color:#213286"><strong> '.$name.'</strong> </td></table> </td></tr><tr> <td style="padding-bottom: 0px;color:#213286"> <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%"> <td valign="middle" width="20%"> City : </td><td valign="middle" width="50%"> <strong>'.$city.'</strong> </td></table> </td></tr><tr> <td style="padding-bottom: 0px;"> <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%"> <td valign="middle" width="20%" style = "color:#213286"> School : </td><td valign="middle" width="50%" style = "color:#213286"><strong> '.$branch.'</strong> </td></table> </td></tr><tr> <td style="padding-bottom: 0px;color:#213286"> <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%"> <td valign="middle" width="20%"> Joined : </td><td valign="middle" width="50%"> <strong>'.$time.'<strong> </td></table> </td></tr><tr> <td style="padding-bottom: 0px;"> <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%"> <td valign="middle" width="20%"> Phone Number : </td><td valign="middle" width="50%" style = "color:#213286"><strong> '.$phone.'</strong> </td></table> </td></tr><tr> <td style="padding-bottom: 0px;"> <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%"> <td valign="middle" width="20%" style = "color:#213286"> Email ID : </td><td valign="middle" width="50%" style = "color:#213286"> <strong>'.$email.'</strong> </td>
            <td valign="middle" width="20%" style = "color:#213286"> Password : </td><td valign="middle" width="50%" style = "color:#213286"> <strong>'.$password.'</strong> </td> </table> </td></tr></tbody> </table> <p style="text-align:center ;color:#213286">On the day of the event, ask form your name entry at the registration counter to collect your Free Game Pass. Be there on time, see you soon!<br/> Share with family & friends and, enjoy the day like never before!</p></td></tr></table> <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;"> <tr> <td valign="middle" class="bg_black footer email-section"> <table> <tr> <td valign="top" width="100%"> <table role="presentation" cellspacing="0" style = "background-color:#213286" cellpadding="0" border="0" width="100%"> <tr> <td style="text-align: center; padding-right: 0px;"> <p style="line-height: 0;"><b style="color: #fff;"> Visit <a href="http://jemsco.in/" style="color:#fff ;">jemsco.in for more information.</a></b></p><p>Phone: <a href="tel:9885926836" style="color: #fff;">9885926836</a></p><p> <ul class="footer-socilal-links"> <li><a href=""><img src="https://www.orchidsinternationalschool.com/wp-content/uploads/2022/10/facebook-icon.png" data-src="https://www.jemsco.in/wp-content/uploads/2022/10/facebook-icon.png"></a></li><li><a href=""><img src="https://www.orchidsinternationalschool.com/wp-content/uploads/2022/10/instagram-icon.png" data-src="https://www.orchidsinternationalschool.com/wp-content/uploads/2022/10/instagram-icon.png"></a></li><li><a href=""><img src="https://www.orchidsinternationalschool.com/wp-content/uploads/2022/10/linkedin-icon.png" data-src="https://www.orchidsinternationalschool.com/wp-content/uploads/2022/10/linkedin-icon.png"></a></li><li><a href=""><img src="https://www.orchidsinternationalschool.com/wp-content/uploads/2022/10/twitter-icon.png" data-src="https://www.orchidsinternationalschool.com/wp-content/uploads/2022/10/twitter-icon.png"></a></li><li><a href=""><img src="https://www.orchidsinternationalschool.com/wp-content/uploads/2022/10/youtube-icon.png" data-src="https://www.orchidsinternationalschool.com/wp-content/uploads/2022/10/youtube-icon.png"></a></li></ul> </p></td></tr></table> </td></tr></table> </td></tr></table> </div></center></body></html>';
        return $emailtemplate;
    }


if (strpos($url,'auth_login') !== false) {
  
    login();
}else if (strpos($url,'register') !== false) {
  
    register();
}else if (strpos($url,'student') !== false) {
  
    student_registration();
} else {
    echo 'No .';
}
?>
