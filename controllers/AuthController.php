<?php
// error_reporting(E_ALL);
// ini_set('display_errors', '1');
// echo "hello";
// die;
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
            $student_name = $_POST['student_name'];
            $father_name = $_POST['father_name'];
            $mother_name = $father_name;
            $class = $_POST['classes'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $district = $_POST['district'];
            $state = $_POST['state'];
            $pincode = $_POST['pincode'];
            $school_name = $_POST['school_name'];
            $school_address = $_POST['school_address'];
            $school_city = $_POST['school_city'];
            $school_district = $_POST['school_district'];
            $school_state = $_POST['school_state'];
            $school_pincode = $_POST['school_pincode'];
            $mobile = $_POST['mobile'];
            $alrernate_mobile = $_POST['alternate_mobile'];
            $email = $_POST['email'];
            $board_syllabus = $_POST['board_syllabus'];
            $catalyst_olympiad = $_POST['class'];
            $roll_number = "jemsco".$_POST['student_name'];
            $role = "student"; // Assuming this is selected during registration.
            $password = "jemsco".$_POST['student_name'];
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
            
            if($userAlready == "")
            {
                if ($userModel->createStudent($student_name, $father_name, $mother_name,$class, $address, $city, $district, $state, $pincode, $school_name,  $school_address,  $school_city, $school_district,  $school_state, $school_pincode, $mobile,$alrernate_mobile, $email,$password, $board_syllabus, $catalyst_olympiad, $roll_number, $role)) {
                    session_start();
                    $_SESSION['email'] = $email;
                    echo json_encode(['success' => true]);
                    exit;
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
