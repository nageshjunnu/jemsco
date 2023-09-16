<?php
require_once '../models/UserModel.php';
require_once '../models/SchoolModel.php';

// header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set('display_errors', '1');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Include the PHPMailer autoloader

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $action = $_POST['action'];
    if($action == 'add-new-user'){
        registerUser();
    }

    if($action == 'update-user'){
        updateUser();
    }

    if($action == 'delete-user'){
        deleteUserData();
    }

    if($action == 'delete-student'){
        deleteStudentByid();
    }

    if($action == 'forgot-password'){
        forgotPassword();
    }

    if($action == 'reset_password'){
        resetPassword();
    }

    if($action == 'school-update'){
        schoolUpdate();
    }
}   


function registerUser() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username']; 
        $name = $_POST['name']; // You can pass this value during registration
        $last_name = $_POST['last_name'];
        $role = $_POST['role'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $status = 1;
        // $transactionId = $_POST['transaction_id']; // Retrieve this from Razorpay's response
        $userModel = new UserModel();

        // Validate and process payment
        if ($userModel->newUser($name, $last_name, $role, $email, $mobile, $password, $username, $status)) {
           
            //emailtemplate($studentId, $amount, $payment_id);
            echo json_encode(['success' => true, 'message' => 'New user added successful']);
        } else {
            echo json_encode(['success' => false, 'message' => 'User adding failed']);
        }
    }
}


function updateUser() {
    if (isset($_POST["userid"])) {
        $userid = $_POST["userid"]?? "";
        $username = $_POST["username"]?? "";
        $name = $_POST["name"]?? "";
        $last_name = $_POST["last_name"]?? "";
        $role = $_POST["role"]?? "";
        $email = $_POST["email"]?? "";
        $mobile = $_POST["mobile"]?? "";
        $password = $_POST["password"]?? "";


        // Perform the update operation in your database
        // Example: $this->model->updateStudent($studentId, $name, $email);
        $userModel = new UserModel();
        // Check if the update was successful
        if ($userModel->updateUserModal($userid,$username,$name, $last_name,$role,$email ,$mobile ,$password )) {
            echo json_encode(['success' => true, 'message'=>'Successfully Updated', 'stuent_id'=>$userid]);
             exit;
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed']);
             exit;
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'No Id Available']);
             exit;
    }
}

function schoolUpdate(){
    if (isset($_POST["id"])) {
        $id = $_POST['id'];
        $name = $_POST['student_name'];
        $address = $_POST['address']?? "";
        $city = $_POST['city']?? "";
        $district = $_POST['district']?? "";
        $state = $_POST['state']?? "";
        $pincode = $_POST['pincode'];
        $is_trust_society = $_POST['is_trust_society']?? "";
        $gst = $_POST['gst']?? "";
        $phone = $_POST['phone'];
        $alternate_phone = $_POST['alternate_phone']?? "";
        $email = $_POST['email']?? "";
        $alternate_email = $_POST['alternate_email']?? "";
        $principal = $_POST['principal']?? "";
        $principal_phone = $_POST['principal_phone']?? "";
        $principal_email = $_POST['principal_email']?? "";
        $co_ordinator_name = $_POST['co_ordinator_name']?? "";
        $co_ordinator_phone = $_POST['co_ordinator_phone']?? "";
        $co_ordinator_email = $_POST['co_ordinator_email']?? "";
        $board = $_POST['board']?? "";
        $catalyst_olympiad = $_POST['catalyst_olympiad']?? "";
        $status = $_POST['status']?? "0";
        $bytes = random_bytes(16);
        // Basic form validation
        
        $password = bin2hex($bytes);
        // Save data to the database using the Student model
        $schoolModel = new SchoolModel();
        
        if ($schoolModel->updateSchoolById($id, $name, $address, $city,$district, $state, $pincode, $is_trust_society, $gst, $phone, $alternate_phone,  $email,  $alternate_email, $principal,  $principal_phone, $principal_email, $co_ordinator_name,$co_ordinator_phone, $co_ordinator_email,$board, $catalyst_olympiad)) {
            echo json_encode(['success' => true, 'message' => 'School Update successful!']);
        } else {
            echo json_encode(['success' => false, 'message' => 'School Updation failed.']);
        }
        
    }
}


function deleteUserData() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'])) {
        $userId = $_POST['user_id'];
        $userModel = new UserModel();
        if ($userModel->deleteUser($userId)) {
            echo json_encode(['success' => true, 'message' => 'User deleted successfully']);
        } else {
            echo json_encode(['success' => false, 'message' => 'User deletion failed']);
        }
    }
}

function deleteStudentByid() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['student_id'])) {
        $student_id = $_POST['student_id'];
        $status = 9;

        $userModel = new UserModel();
        if ($userModel->deleteStudent($student_id,$status)) {
            echo json_encode(['success' => true, 'message'=>'Successfully Deleted']);
            exit;
        } else {
            echo json_encode(['success' => false, 'message' => 'Deletion Failed']);
            exit;
        }
    }
}

function forgotPassword() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
        $email = $_POST['email'];
      
        $userModel = new UserModel();
        if (sendmail($email)) {
            echo json_encode(['success' => true, 'message'=>'Successfully Sent Email']);
            exit;
        } else {
            echo json_encode(['success' => false, 'message' => 'Email Send Failed']);
            exit;
        }
    }
}

function resetPassword() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'])) {
        $email = $_POST['user_id'];
        $newPassword = $_POST['new_password']; 

        $userModel = new UserModel();
        if ($userModel->resetPasswordById($email, $newPassword)) {
           if(sendResetmail($email)){
            echo json_encode(['success' => true, 'message'=>'Password Updated Successfully !!!']);
            exit;
           }
           else{
            echo json_encode(['success' => true, 'message' => 'Password Updated, Email Sent Failed']);
            exit;
           }
        } else {
            echo json_encode(['success' => false, 'message' => 'Updation Failed']);
            exit;
        }
    }
}

function passwordResetLink($email)
{
    $emailtemplate = '<!DOCTYPE html><!doctype html>
    <html xmlns=http://www.w3.org/1999/xhtml xmlns:v=urn:schemas-microsoft-com:vml xmlns:o=urn:schemas-microsoft-com:office:office>
    <head>
    <!--[if gte mso 9]>
    <xml>
      <o:OfficeDocumentSettings>
        <o:AllowPNG/>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <meta http-equiv=Content-Type content="text/html; charset=UTF-8">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=x-apple-disable-message-reformatting>
    <!--[if !mso]><!--><meta http-equiv=X-UA-Compatible content="IE=edge"><!--<![endif]-->
    <title></title>
    <style>@media only screen and (min-width:620px){.u-row{width:600px!important}.u-row .u-col{vertical-align:top}.u-row .u-col-50{width:300px!important}.u-row .u-col-100{width:600px!important}}@media (max-width:620px){.u-row-container{max-width:100%!important;padding-left:0!important;padding-right:0!important}.u-row .u-col{min-width:320px!important;max-width:100%!important;display:block!important}.u-row{width:100%!important}.u-col{width:100%!important}.u-col>div{margin:0 auto}}body{margin:0;padding:0}table,td,tr{vertical-align:top;border-collapse:collapse}p{margin:0}.ie-container table,.mso-container table{table-layout:fixed}*{line-height:inherit}a[x-apple-data-detectors=true]{color:inherit!important;text-decoration:none!important}table,td{color:#000}#u_body a{color:#161a39;text-decoration:underline}</style>
    <!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel=stylesheet><link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel=stylesheet><!--<![endif]-->
    </head>
    <body class="clean-body u_body" style=margin:0;padding:0;-webkit-text-size-adjust:100%;background-color:#f9f9f9;color:#000>
    <!--[if IE]><div class="ie-container"><![endif]-->
    <!--[if mso]><div class="mso-container"><![endif]-->
    <table id=u_body style="border-collapse:collapse;table-layout:fixed;border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;vertical-align:top;min-width:320px;Margin:0 auto;background-color:#f9f9f9;width:100%" cellpadding=0 cellspacing=0>
    <tbody>
    <tr style=vertical-align:top>
    <td style=word-break:break-word;border-collapse:collapse!important;vertical-align:top>
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #f9f9f9;"><![endif]-->
    <div class=u-row-container style=padding:0;background-color:#f9f9f9>
    <div class=u-row style="margin:0 auto;min-width:320px;max-width:600px;overflow-wrap:break-word;word-wrap:break-word;word-break:break-word;background-color:#f9f9f9">
    <div style=border-collapse:collapse;display:table;width:100%;height:100%;background-color:transparent>
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #f9f9f9;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #f9f9f9;"><![endif]-->
    <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
    <div class="u-col u-col-100" style=max-width:320px;min-width:600px;display:table-cell;vertical-align:top>
    <div style=height:100%;width:100%!important>
    <!--[if (!mso)&(!IE)]><!--><div style="box-sizing:border-box;height:100%;padding:0;border-top:0 solid transparent;border-left:0 solid transparent;border-right:0px solid transparent;border-bottom:0 solid transparent"><!--<![endif]-->
    <table style=font-family:Lato,sans-serif role=presentation cellpadding=0 cellspacing=0 width=100% border=0>
    <tbody>
    <tr>
    <td style=overflow-wrap:break-word;word-break:break-word;padding:15px;font-family:Lato,sans-serif align=left>
    <table height=0px align=center border=0 cellpadding=0 cellspacing=0 width=100% style="border-collapse:collapse;table-layout:fixed;border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;vertical-align:top;border-top:1px solid #f9f9f9;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%">
    <tbody>
    <tr style=vertical-align:top>
    <td style=word-break:break-word;border-collapse:collapse!important;vertical-align:top;font-size:0px;line-height:0;mso-line-height-rule:exactly;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%>
    <span>&#160;</span>
    </td>
    </tr>
    </tbody>
    </table>
    </td>
    </tr>
    </tbody>
    </table>
    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
    </div>
    </div>
    <!--[if (mso)|(IE)]></td><![endif]-->
    <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
    </div>
    </div>
    <div class=u-row-container style=padding:0;background-color:transparent>
    <div class=u-row style="margin:0 auto;min-width:320px;max-width:600px;overflow-wrap:break-word;word-wrap:break-word;word-break:break-word;background-color:#fff">
    <div style=border-collapse:collapse;display:table;width:100%;height:100%;background-color:transparent>
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->
    <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
    <div class="u-col u-col-100" style=max-width:320px;min-width:600px;display:table-cell;vertical-align:top>
    <div style=height:100%;width:100%!important>
    <!--[if (!mso)&(!IE)]><!--><div style="box-sizing:border-box;height:100%;padding:0;border-top:0 solid transparent;border-left:0 solid transparent;border-right:0px solid transparent;border-bottom:0 solid transparent"><!--<![endif]-->
    <table style=font-family:Lato,sans-serif role=presentation cellpadding=0 cellspacing=0 width=100% border=0>
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:25px 10px;font-family:Lato,sans-serif" align=left>
    <table width=100% cellpadding=0 cellspacing=0 border=0>
    <tr>
    <td style=padding-right:0;padding-left:0 align=center>
    <a href=jemsco.in><h2 style=font-weight:800>JEMSCO</h2></a>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    </tbody>
    </table>
    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
    </div>
    </div>
    <!--[if (mso)|(IE)]></td><![endif]-->
    <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
    </div>
    </div>
    <div class=u-row-container style=padding:0;background-color:transparent>
    <div class=u-row style="margin:0 auto;min-width:320px;max-width:600px;overflow-wrap:break-word;word-wrap:break-word;word-break:break-word;background-color:#161a39">
    <div style=border-collapse:collapse;display:table;width:100%;height:100%;background-color:transparent>
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #161a39;"><![endif]-->
    <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
    <div class="u-col u-col-100" style=max-width:320px;min-width:600px;display:table-cell;vertical-align:top>
    <div style=height:100%;width:100%!important>
    <!--[if (!mso)&(!IE)]><!--><div style="box-sizing:border-box;height:100%;padding:0;border-top:0 solid transparent;border-left:0 solid transparent;border-right:0px solid transparent;border-bottom:0 solid transparent"><!--<![endif]-->
    <table style=font-family:Lato,sans-serif role=presentation cellpadding=0 cellspacing=0 width=100% border=0>
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:35px 10px 10px;font-family:Lato,sans-serif" align=left>
    <table width=100% cellpadding=0 cellspacing=0 border=0>
    </table>
    </td>
    </tr>
    </tbody>
    </table>
    <table style=font-family:Lato,sans-serif role=presentation cellpadding=0 cellspacing=0 width=100% border=0>
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:0 10px 30px;font-family:Lato,sans-serif" align=left>
    <div style=font-size:14px;line-height:140%;text-align:left;word-wrap:break-word>
    <p style=font-size:14px;line-height:140%;text-align:center><span style=font-size:28px;line-height:39.2px;color:#fff;font-family:Lato,sans-serif>Please reset your password </span></p>
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
    </div>
    </div>
    <!--[if (mso)|(IE)]></td><![endif]-->
    <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
    </div>
    </div>
    <div class=u-row-container style=padding:0;background-color:transparent>
    <div class=u-row style="margin:0 auto;min-width:320px;max-width:600px;overflow-wrap:break-word;word-wrap:break-word;word-break:break-word;background-color:#fff">
    <div style=border-collapse:collapse;display:table;width:100%;height:100%;background-color:transparent>
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->
    <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
    <div class="u-col u-col-100" style=max-width:320px;min-width:600px;display:table-cell;vertical-align:top>
    <div style=height:100%;width:100%!important>
    <!--[if (!mso)&(!IE)]><!--><div style="box-sizing:border-box;height:100%;padding:0;border-top:0 solid transparent;border-left:0 solid transparent;border-right:0px solid transparent;border-bottom:0 solid transparent"><!--<![endif]-->
    <table style=font-family:Lato,sans-serif role=presentation cellpadding=0 cellspacing=0 width=100% border=0>
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:40px 40px 30px;font-family:Lato,sans-serif" align=left>
    <div style=font-size:14px;line-height:140%;text-align:left;word-wrap:break-word>
    <p style=font-size:14px;line-height:140%><span style=font-size:18px;line-height:25.2px;color:#666>Hello,</span></p>
    <p style=font-size:14px;line-height:140%>&nbsp;</p>
    <p style=font-size:14px;line-height:140%><span style=font-size:18px;line-height:25.2px;color:#666>We have sent you this email in response to your request to reset your password on JEMSCO.IN</span></p>
    <p style=font-size:14px;line-height:140%>&nbsp;</p>
    <p style=font-size:14px;line-height:140%><span style=font-size:18px;line-height:25.2px;color:#666>To reset your password, please follow the link below: </span></p>
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    <table style=font-family:Lato,sans-serif role=presentation cellpadding=0 cellspacing=0 width=100% border=0>
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:0 40px;font-family:Lato,sans-serif" align=left>
    <!--[if mso]><style>.v-button {background: transparent !important;}</style><![endif]-->
    <div align=left>
    <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="" style="height:51px; v-text-anchor:middle; width:205px;" arcsize="2%"  stroke="f" fillcolor="#18163a"><w:anchorlock/><center style="color:#FFFFFF;"><![endif]-->
    <a href="https://jemsco.in/prod/views/password-reset.php?id='.$email.'" target=_blank class=v-button style=box-sizing:border-box;display:inline-block;text-decoration:none;-webkit-text-size-adjust:none;text-align:center;color:#fff;background-color:#18163a;border-radius:1px;-webkit-border-radius:1px;-moz-border-radius:1px;width:auto;max-width:100%;overflow-wrap:break-word;word-break:break-word;word-wrap:break-word;mso-border-alt:none;font-size:14px>
    <span style="display:block;padding:15px 40px;line-height:120%"><span style=font-size:18px;line-height:21.6px>Reset Password</span></span>
    </a>
    <!--[if mso]></center></v:roundrect><![endif]-->
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    <table style=font-family:Lato,sans-serif role=presentation cellpadding=0 cellspacing=0 width=100% border=0>
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:40px 40px 30px;font-family:Lato,sans-serif" align=left>
    <div style=font-size:14px;line-height:140%;text-align:left;word-wrap:break-word>
    <p style=font-size:14px;line-height:140%><span style=color:#888;font-size:14px;line-height:19.6px><em><span style=font-size:16px;line-height:22.4px>Please ignore this email if you did not request a password change.</span></em></span><br><span style=color:#888;font-size:14px;line-height:19.6px><em><span style=font-size:16px;line-height:22.4px>&nbsp;</span></em></span></p>
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
    </div>
    </div>
    <!--[if (mso)|(IE)]></td><![endif]-->
    <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
    </div>
    </div>
    <div class=u-row-container style=padding:0;background-color:transparent>
    <div class=u-row style="margin:0 auto;min-width:320px;max-width:600px;overflow-wrap:break-word;word-wrap:break-word;word-break:break-word;background-color:#18163a">
    <div style=border-collapse:collapse;display:table;width:100%;height:100%;background-color:transparent>
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #18163a;"><![endif]-->
    <!--[if (mso)|(IE)]><td align="center" width="300" style="width: 300px;padding: 20px 20px 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
    <div class="u-col u-col-50" style=max-width:320px;min-width:300px;display:table-cell;vertical-align:top>
    <div style=height:100%;width:100%!important>
    <!--[if (!mso)&(!IE)]><!--><div style="box-sizing:border-box;height:100%;padding:20px 20px 0;border-top:0 solid transparent;border-left:0 solid transparent;border-right:0px solid transparent;border-bottom:0 solid transparent"><!--<![endif]-->
    <table style=font-family:Lato,sans-serif role=presentation cellpadding=0 cellspacing=0 width=100% border=0>
    <tbody>
    <tr>
    <td style=overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:Lato,sans-serif align=left>
    <div style=font-size:14px;line-height:140%;text-align:left;word-wrap:break-word>
    <p style=font-size:14px;line-height:140%><span style=font-size:16px;line-height:22.4px;color:#ecf0f1>Contact</span></p>

    <p style=font-size:14px;line-height:140%><span style=font-size:14px;line-height:19.6px;color:#ecf0f1>+91 98859 26836 | Info@jemsco.in</span></p>
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
    </div>
    </div>
    <!--[if (mso)|(IE)]></td><![endif]-->
    <!--[if (mso)|(IE)]><td align="center" width="300" style="width: 300px;padding: 0px 0px 0px 20px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
    <div class="u-col u-col-50" style=max-width:320px;min-width:300px;display:table-cell;vertical-align:top>
    <div style=height:100%;width:100%!important>
    <!--[if (!mso)&(!IE)]><!--><div style="box-sizing:border-box;height:100%;padding:0 0 0 20px;border-top:0 solid transparent;border-left:0 solid transparent;border-right:0px solid transparent;border-bottom:0 solid transparent"><!--<![endif]-->
    <table style=font-family:Lato,sans-serif role=presentation cellpadding=0 cellspacing=0 width=100% border=0>
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:25px 10px 10px;font-family:Lato,sans-serif" align=left>
    <div align=left>
    <div style=display:table;max-width:187px>
    <!--[if (mso)|(IE)]><table width="187" cellpadding="0" cellspacing="0" border="0"><tr><td style="border-collapse:collapse;" align="left"><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:187px;"><tr><![endif]-->
    <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 15px;" valign="top"><![endif]-->
  
    <!--[if (mso)|(IE)]></td><![endif]-->
    <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 15px;" valign="top"><![endif]-->
    <table align=left border=0 cellspacing=0 cellpadding=0 width=32 height=32 style=width:32px!important;height:32px!important;display:inline-block;border-collapse:collapse;table-layout:fixed;border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;vertical-align:top;margin-right:15px>
    <tbody><tr style=vertical-align:top><td align=left valign=middle style=word-break:break-word;border-collapse:collapse!important;vertical-align:top>
    <a href="" title=Twitter target=_blank>
    <img src=images/image-4.png alt=Twitter title=Twitter width=32 style=outline:0;text-decoration:none;-ms-interpolation-mode:bicubic;clear:both;display:block!important;border:none;height:auto;float:none;max-width:32px!important>
    </a>
    </td></tr>
    </tbody></table>
    <!--[if (mso)|(IE)]></td><![endif]-->
    <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 15px;" valign="top"><![endif]-->
    <table align=left border=0 cellspacing=0 cellpadding=0 width=32 height=32 style=width:32px!important;height:32px!important;display:inline-block;border-collapse:collapse;table-layout:fixed;border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;vertical-align:top;margin-right:15px>
    <tbody><tr style=vertical-align:top><td align=left valign=middle style=word-break:break-word;border-collapse:collapse!important;vertical-align:top>
    <a href="" title=Instagram target=_blank>
    <img src=images/image-2.png alt=Instagram title=Instagram width=32 style=outline:0;text-decoration:none;-ms-interpolation-mode:bicubic;clear:both;display:block!important;border:none;height:auto;float:none;max-width:32px!important>
    </a>
    </td></tr>
    </tbody></table>
    <!--[if (mso)|(IE)]></td><![endif]-->
    <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 0px;" valign="top"><![endif]-->
    <table align=left border=0 cellspacing=0 cellpadding=0 width=32 height=32 style=width:32px!important;height:32px!important;display:inline-block;border-collapse:collapse;table-layout:fixed;border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;vertical-align:top;margin-right:0>
    <tbody><tr style=vertical-align:top><td align=left valign=middle style=word-break:break-word;border-collapse:collapse!important;vertical-align:top>
    <a href="" title=LinkedIn target=_blank>
    <img src=images/image-3.png alt=LinkedIn title=LinkedIn width=32 style=outline:0;text-decoration:none;-ms-interpolation-mode:bicubic;clear:both;display:block!important;border:none;height:auto;float:none;max-width:32px!important>
    </a>
    </td></tr>
    </tbody></table>
    <!--[if (mso)|(IE)]></td><![endif]-->
    <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    <table style=font-family:Lato,sans-serif role=presentation cellpadding=0 cellspacing=0 width=100% border=0>
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:5px 10px 10px;font-family:Lato,sans-serif" align=left>
    <div style=font-size:14px;line-height:140%;text-align:left;word-wrap:break-word>
    <p style=line-height:140%;font-size:14px><span style=font-size:14px;line-height:19.6px><span style=color:#ecf0f1;font-size:14px;line-height:19.6px><span style=line-height:19.6px;font-size:14px>Jemsco.in &copy;&nbsp; All Rights Reserved</span></span></span></p>
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
    </div>
    </div>
    <!--[if (mso)|(IE)]></td><![endif]-->
    <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
    </div>
    </div>
    <div class=u-row-container style=padding:0;background-color:#f9f9f9>
    <div class=u-row style="margin:0 auto;min-width:320px;max-width:600px;overflow-wrap:break-word;word-wrap:break-word;word-break:break-word;background-color:#1c103b">
    <div style=border-collapse:collapse;display:table;width:100%;height:100%;background-color:transparent>
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #f9f9f9;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #1c103b;"><![endif]-->
    <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
    <div class="u-col u-col-100" style=max-width:320px;min-width:600px;display:table-cell;vertical-align:top>
    <div style=height:100%;width:100%!important>
    <!--[if (!mso)&(!IE)]><!--><div style="box-sizing:border-box;height:100%;padding:0;border-top:0 solid transparent;border-left:0 solid transparent;border-right:0px solid transparent;border-bottom:0 solid transparent"><!--<![endif]-->
    <table style=font-family:Lato,sans-serif role=presentation cellpadding=0 cellspacing=0 width=100% border=0>
    <tbody>
    <tr>
    <td style=overflow-wrap:break-word;word-break:break-word;padding:15px;font-family:Lato,sans-serif align=left>
    <table height=0px align=center border=0 cellpadding=0 cellspacing=0 width=100% style="border-collapse:collapse;table-layout:fixed;border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;vertical-align:top;border-top:1px solid #1c103b;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%">
    <tbody>
    <tr style=vertical-align:top>
    <td style=word-break:break-word;border-collapse:collapse!important;vertical-align:top;font-size:0px;line-height:0;mso-line-height-rule:exactly;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%>
    <span>&#160;</span>
    </td>
    </tr>
    </tbody>
    </table>
    </td>
    </tr>
    </tbody>
    </table>
    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
    </div>
    </div>
    <!--[if (mso)|(IE)]></td><![endif]-->
    <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
    </div>
    </div>
    <div class=u-row-container style=padding:0;background-color:transparent>
    <div class=u-row style="margin:0 auto;min-width:320px;max-width:600px;overflow-wrap:break-word;word-wrap:break-word;word-break:break-word;background-color:#f9f9f9">
    <div style=border-collapse:collapse;display:table;width:100%;height:100%;background-color:transparent>
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #f9f9f9;"><![endif]-->
    <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
    <div class="u-col u-col-100" style=max-width:320px;min-width:600px;display:table-cell;vertical-align:top>
    <div style=height:100%;width:100%!important>
    <!--[if (!mso)&(!IE)]><!--><div style="box-sizing:border-box;height:100%;padding:0;border-top:0 solid transparent;border-left:0 solid transparent;border-right:0px solid transparent;border-bottom:0 solid transparent"><!--<![endif]-->
    <table style=font-family:Lato,sans-serif role=presentation cellpadding=0 cellspacing=0 width=100% border=0>
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:0 40px 30px 20px;font-family:Lato,sans-serif" align=left>
    <div style=font-size:14px;line-height:140%;text-align:left;word-wrap:break-word>
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
    </div>
    </div>
    <!--[if (mso)|(IE)]></td><![endif]-->
    <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
    </div>
    </div>
    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
    </td>
    </tr>
    </tbody>
    </table>
    <!--[if mso]></div><![endif]-->
    <!--[if IE]></div><![endif]-->
    </body>
    </html>';
    return $emailtemplate;
}

function sendmail($email)
{
    

    // Initialize PHPMailer
    $mail = new PHPMailer(true);
    $emailtemp = passwordResetLink($email);

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
        $mail->addAddress($email, "Forgot Password");     //Add a recipient
        $mail->addReplyTo('info@jemsco.in', 'JEMSCO 2023');
        $mail->addBCC('nageshy.php@gmail.com');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'JEMSCO 2023';
        $mail->Body    = $emailtemp;
        $mail->AltBody = '--------';

        $mail->send();
        //echo 'Message has been sent';
        return true;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

function sendResetmail($email)
{
    

    // Initialize PHPMailer
    $mail = new PHPMailer(true);
    $emailtemp = resetPasswordSuccess($email);

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
        $mail->addAddress($email, "Forgot Password");     //Add a recipient
        $mail->addReplyTo('info@jemsco.in', 'JEMSCO 2023');
        $mail->addBCC('nageshy.php@gmail.com');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'JEMSCO 2023';
        $mail->Body    = $emailtemp;
        $mail->AltBody = '--------';

        $mail->send();
        //echo 'Message has been sent';
        return true;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


function resetPasswordSuccess($email)
{
    $emailtemplate = '<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head>
    <!--[if gte mso 9]>
    <xml>
      <o:OfficeDocumentSettings>
        <o:AllowPNG/>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]-->
    <title></title>
    <style>@media only screen and (min-width:620px){.u-row{width:600px!important}.u-row .u-col{vertical-align:top}.u-row .u-col-50{width:300px!important}.u-row .u-col-100{width:600px!important}}@media (max-width:620px){.u-row-container{max-width:100%!important;padding-left:0!important;padding-right:0!important}.u-row .u-col{min-width:320px!important;max-width:100%!important;display:block!important}.u-row{width:100%!important}.u-col{width:100%!important}.u-col>div{margin:0 auto}}body{margin:0;padding:0}table,td,tr{vertical-align:top;border-collapse:collapse}p{margin:0}.ie-container table,.mso-container table{table-layout:fixed}*{line-height:inherit}a[x-apple-data-detectors=true]{color:inherit!important;text-decoration:none!important}table,td{color:#000}#u_body a{color:#161a39;text-decoration:underline}</style>
    <!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Lato:400,700&amp;display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Lato:400,700&amp;display=swap" rel="stylesheet"><!--<![endif]-->
    </head>
    <body class="clean-body u_body" style="margin:0;padding:0;-webkit-text-size-adjust:100%;background-color:#f9f9f9;color:#000">
    <!--[if IE]><div class="ie-container"><![endif]-->
    <!--[if mso]><div class="mso-container"><![endif]-->
    <table id="u_body" style="border-collapse:collapse;table-layout:fixed;border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;vertical-align:top;min-width:320px;Margin:0 auto;background-color:#f9f9f9;width:100%" cellpadding="0" cellspacing="0">
    <tbody>
    <tr style="vertical-align:top">
    <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #f9f9f9;"><![endif]-->
    <div class="u-row-container" style="padding:0;background-color:#f9f9f9">
    <div class="u-row" style="margin:0 auto;min-width:320px;max-width:600px;overflow-wrap:break-word;word-wrap:break-word;word-break:break-word;background-color:#f9f9f9">
    <div style="border-collapse:collapse;display:table;width:100%;height:100%;background-color:transparent">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #f9f9f9;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #f9f9f9;"><![endif]-->
    <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
    <div class="u-col u-col-100" style="max-width:320px;min-width:600px;display:table-cell;vertical-align:top">
    <div style="height:100%;width:100%!important">
    <!--[if (!mso)&(!IE)]><!--><div style="box-sizing:border-box;height:100%;padding:0;border-top:0 solid transparent;border-left:0 solid transparent;border-right:0px solid transparent;border-bottom:0 solid transparent"><!--<![endif]-->
    <table style="font-family:Lato,sans-serif" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:15px;font-family:Lato,sans-serif" align="left">
    <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;table-layout:fixed;border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;vertical-align:top;border-top:1px solid #f9f9f9;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%">
    <tbody>
    <tr style="vertical-align:top">
    <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;font-size:0px;line-height:0;mso-line-height-rule:exactly;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%">
    <span>&nbsp;</span>
    </td>
    </tr>
    </tbody>
    </table>
    </td>
    </tr>
    </tbody>
    </table>
    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
    </div>
    </div>
    <!--[if (mso)|(IE)]></td><![endif]-->
    <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
    </div>
    </div>
    <div class="u-row-container" style="padding:0;background-color:transparent">
    <div class="u-row" style="margin:0 auto;min-width:320px;max-width:600px;overflow-wrap:break-word;word-wrap:break-word;word-break:break-word;background-color:#fff">
    <div style="border-collapse:collapse;display:table;width:100%;height:100%;background-color:transparent">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->
    <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
    <div class="u-col u-col-100" style="max-width:320px;min-width:600px;display:table-cell;vertical-align:top">
    <div style="height:100%;width:100%!important">
    <!--[if (!mso)&(!IE)]><!--><div style="box-sizing:border-box;height:100%;padding:0;border-top:0 solid transparent;border-left:0 solid transparent;border-right:0px solid transparent;border-bottom:0 solid transparent"><!--<![endif]-->
    <table style="font-family:Lato,sans-serif" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:25px 10px;font-family:Lato,sans-serif" align="left">
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
    <tbody><tr>
    <td style="padding-right:0;padding-left:0" align="center">
    <a href="jemsco.in"><h2 style="font-weight:800">JEMSCO</h2></a>
    </td>
    </tr>
    </tbody></table>
    </td>
    </tr>
    </tbody>
    </table>
    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
    </div>
    </div>
    <!--[if (mso)|(IE)]></td><![endif]-->
    <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
    </div>
    </div>
    <div class="u-row-container" style="padding:0;background-color:transparent">
    <div class="u-row" style="margin:0 auto;min-width:320px;max-width:600px;overflow-wrap:break-word;word-wrap:break-word;word-break:break-word;background-color:#161a39">
    <div style="border-collapse:collapse;display:table;width:100%;height:100%;background-color:transparent">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #161a39;"><![endif]-->
    <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
    <div class="u-col u-col-100" style="max-width:320px;min-width:600px;display:table-cell;vertical-align:top">
    <div style="height:100%;width:100%!important">
    <!--[if (!mso)&(!IE)]><!--><div style="box-sizing:border-box;height:100%;padding:0;border-top:0 solid transparent;border-left:0 solid transparent;border-right:0px solid transparent;border-bottom:0 solid transparent"><!--<![endif]-->
    <table style="font-family:Lato,sans-serif" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:35px 10px 10px;font-family:Lato,sans-serif" align="left">
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
    </table>
    </td>
    </tr>
    </tbody>
    </table>
    <table style="font-family:Lato,sans-serif" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:0 10px 30px;font-family:Lato,sans-serif" align="left">
    <div style="font-size:14px;line-height:140%;text-align:left;word-wrap:break-word">
    <p style="font-size:14px;line-height:140%;text-align:center"><span style="font-size:28px;line-height:39.2px;color:#fff;font-family:Lato,sans-serif">Please reset your password </span></p>
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
    </div>
    </div>
    <!--[if (mso)|(IE)]></td><![endif]-->
    <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
    </div>
    </div>
    <div class="u-row-container" style="padding:0;background-color:transparent">
    <div class="u-row" style="margin:0 auto;min-width:320px;max-width:600px;overflow-wrap:break-word;word-wrap:break-word;word-break:break-word;background-color:#fff">
    <div style="border-collapse:collapse;display:table;width:100%;height:100%;background-color:transparent">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->
    <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
    <div class="u-col u-col-100" style="max-width:320px;min-width:600px;display:table-cell;vertical-align:top">
    <div style="height:100%;width:100%!important">
    <!--[if (!mso)&(!IE)]><!--><div style="box-sizing:border-box;height:100%;padding:0;border-top:0 solid transparent;border-left:0 solid transparent;border-right:0px solid transparent;border-bottom:0 solid transparent"><!--<![endif]-->
    <table style="font-family:Lato,sans-serif" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:40px 40px 30px;font-family:Lato,sans-serif" align="left">
    <div style="font-size:14px;line-height:140%;text-align:left;word-wrap:break-word">
    <p style="font-size:14px;line-height:140%"><span style="font-size:18px;line-height:25.2px;color:#666">Hello,</span></p>
    <p style="font-size:14px;line-height:140%">&nbsp;</p>
    <p style="font-size:14px;line-height:140%"><span style="font-size:18px;line-height:25.2px;color:#666">Your Password Updated Successfully, Please Login with new password</span></p>
    <p style="font-size:14px;line-height:140%">&nbsp;</p>
 <a href="https://jemsco.in" target="_blank" class="v-button" style="box-sizing:border-box;display:inline-block;text-decoration:none;-webkit-text-size-adjust:none;text-align:center;color:#fff;background-color:#18163a;border-radius:1px;-webkit-border-radius:1px;-moz-border-radius:1px;width:auto;max-width:100%;overflow-wrap:break-word;word-break:break-word;word-wrap:break-word;mso-border-alt:none;font-size:14px">
    <span style="display:block;padding:15px 40px;line-height:120%"><span style="font-size:18px;line-height:21.6px">Login</span></span>
    </a>
    
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    <table style="font-family:Lato,sans-serif" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:0 40px;font-family:Lato,sans-serif" align="left">
    <!--[if mso]><style>.v-button {background: transparent !important;}</style><![endif]-->
    <div align="left">
    <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="" style="height:51px; v-text-anchor:middle; width:205px;" arcsize="2%"  stroke="f" fillcolor="#18163a"><w:anchorlock/><center style="color:#FFFFFF;"><![endif]-->
 
    <!--[if mso]></center></v:roundrect><![endif]-->
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    <table style="font-family:Lato,sans-serif" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:40px 40px 30px;font-family:Lato,sans-serif" align="left">
    <div style="font-size:14px;line-height:140%;text-align:left;word-wrap:break-word">
    <p style="font-size:14px;line-height:140%"><span style="color:#888;font-size:14px;line-height:19.6px"><em><span style="font-size:16px;line-height:22.4px">Please ignore this email if you did not request a password change.</span></em></span><br><span style="color:#888;font-size:14px;line-height:19.6px"><em><span style="font-size:16px;line-height:22.4px">&nbsp;</span></em></span></p>
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
    </div>
    </div>
    <!--[if (mso)|(IE)]></td><![endif]-->
    <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
    </div>
    </div>
    <div class="u-row-container" style="padding:0;background-color:transparent">
    <div class="u-row" style="margin:0 auto;min-width:320px;max-width:600px;overflow-wrap:break-word;word-wrap:break-word;word-break:break-word;background-color:#18163a">
    <div style="border-collapse:collapse;display:table;width:100%;height:100%;background-color:transparent">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #18163a;"><![endif]-->
    <!--[if (mso)|(IE)]><td align="center" width="300" style="width: 300px;padding: 20px 20px 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
    <div class="u-col u-col-50" style="max-width:320px;min-width:300px;display:table-cell;vertical-align:top">
    <div style="height:100%;width:100%!important">
    <!--[if (!mso)&(!IE)]><!--><div style="box-sizing:border-box;height:100%;padding:20px 20px 0;border-top:0 solid transparent;border-left:0 solid transparent;border-right:0px solid transparent;border-bottom:0 solid transparent"><!--<![endif]-->
    <table style="font-family:Lato,sans-serif" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:Lato,sans-serif" align="left">
    <div style="font-size:14px;line-height:140%;text-align:left;word-wrap:break-word">
    <p style="font-size:14px;line-height:140%"><span style="font-size:16px;line-height:22.4px;color:#ecf0f1">Contact</span></p>

    <p style="font-size:14px;line-height:140%"><span style="font-size:14px;line-height:19.6px;color:#ecf0f1">+91 98859 26836 | Info@jemsco.in</span></p>
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
    </div>
    </div>
    <!--[if (mso)|(IE)]></td><![endif]-->
    <!--[if (mso)|(IE)]><td align="center" width="300" style="width: 300px;padding: 0px 0px 0px 20px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
    <div class="u-col u-col-50" style="max-width:320px;min-width:300px;display:table-cell;vertical-align:top">
    <div style="height:100%;width:100%!important">
    <!--[if (!mso)&(!IE)]><!--><div style="box-sizing:border-box;height:100%;padding:0 0 0 20px;border-top:0 solid transparent;border-left:0 solid transparent;border-right:0px solid transparent;border-bottom:0 solid transparent"><!--<![endif]-->
    <table style="font-family:Lato,sans-serif" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:25px 10px 10px;font-family:Lato,sans-serif" align="left">
    <div align="left">
    <div style="display:table;max-width:187px">
    <!--[if (mso)|(IE)]><table width="187" cellpadding="0" cellspacing="0" border="0"><tr><td style="border-collapse:collapse;" align="left"><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:187px;"><tr><![endif]-->
    <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 15px;" valign="top"><![endif]-->
  
    <!--[if (mso)|(IE)]></td><![endif]-->
    <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 15px;" valign="top"><![endif]-->
    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width:32px!important;height:32px!important;display:inline-block;border-collapse:collapse;table-layout:fixed;border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;vertical-align:top;margin-right:15px">
    <tbody><tr style="vertical-align:top"><td align="left" valign="middle" style="word-break:break-word;border-collapse:collapse!important;vertical-align:top">
    <a href="" title="Twitter" target="_blank">
    <img src="images/image-4.png" alt="Twitter" title="Twitter" width="32" style="outline:0;text-decoration:none;-ms-interpolation-mode:bicubic;clear:both;display:block!important;border:none;height:auto;float:none;max-width:32px!important">
    </a>
    </td></tr>
    </tbody></table>
    <!--[if (mso)|(IE)]></td><![endif]-->
    <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 15px;" valign="top"><![endif]-->
    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width:32px!important;height:32px!important;display:inline-block;border-collapse:collapse;table-layout:fixed;border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;vertical-align:top;margin-right:15px">
    <tbody><tr style="vertical-align:top"><td align="left" valign="middle" style="word-break:break-word;border-collapse:collapse!important;vertical-align:top">
    <a href="" title="Instagram" target="_blank">
    <img src="images/image-2.png" alt="Instagram" title="Instagram" width="32" style="outline:0;text-decoration:none;-ms-interpolation-mode:bicubic;clear:both;display:block!important;border:none;height:auto;float:none;max-width:32px!important">
    </a>
    </td></tr>
    </tbody></table>
    <!--[if (mso)|(IE)]></td><![endif]-->
    <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 0px;" valign="top"><![endif]-->
    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width:32px!important;height:32px!important;display:inline-block;border-collapse:collapse;table-layout:fixed;border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;vertical-align:top;margin-right:0">
    <tbody><tr style="vertical-align:top"><td align="left" valign="middle" style="word-break:break-word;border-collapse:collapse!important;vertical-align:top">
    <a href="" title="LinkedIn" target="_blank">
    <img src="images/image-3.png" alt="LinkedIn" title="LinkedIn" width="32" style="outline:0;text-decoration:none;-ms-interpolation-mode:bicubic;clear:both;display:block!important;border:none;height:auto;float:none;max-width:32px!important">
    </a>
    </td></tr>
    </tbody></table>
    <!--[if (mso)|(IE)]></td><![endif]-->
    <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    <table style="font-family:Lato,sans-serif" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:5px 10px 10px;font-family:Lato,sans-serif" align="left">
    <div style="font-size:14px;line-height:140%;text-align:left;word-wrap:break-word">
    <p style="line-height:140%;font-size:14px"><span style="font-size:14px;line-height:19.6px"><span style="color:#ecf0f1;font-size:14px;line-height:19.6px"><span style="line-height:19.6px;font-size:14px">Jemsco.in ©&nbsp; All Rights Reserved</span></span></span></p>
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
    </div>
    </div>
    <!--[if (mso)|(IE)]></td><![endif]-->
    <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
    </div>
    </div>
    <div class="u-row-container" style="padding:0;background-color:#f9f9f9">
    <div class="u-row" style="margin:0 auto;min-width:320px;max-width:600px;overflow-wrap:break-word;word-wrap:break-word;word-break:break-word;background-color:#1c103b">
    <div style="border-collapse:collapse;display:table;width:100%;height:100%;background-color:transparent">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #f9f9f9;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #1c103b;"><![endif]-->
    <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
    <div class="u-col u-col-100" style="max-width:320px;min-width:600px;display:table-cell;vertical-align:top">
    <div style="height:100%;width:100%!important">
    <!--[if (!mso)&(!IE)]><!--><div style="box-sizing:border-box;height:100%;padding:0;border-top:0 solid transparent;border-left:0 solid transparent;border-right:0px solid transparent;border-bottom:0 solid transparent"><!--<![endif]-->
    <table style="font-family:Lato,sans-serif" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:15px;font-family:Lato,sans-serif" align="left">
    <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;table-layout:fixed;border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;vertical-align:top;border-top:1px solid #1c103b;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%">
    <tbody>
    <tr style="vertical-align:top">
    <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;font-size:0px;line-height:0;mso-line-height-rule:exactly;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%">
    <span>&nbsp;</span>
    </td>
    </tr>
    </tbody>
    </table>
    </td>
    </tr>
    </tbody>
    </table>
    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
    </div>
    </div>
    <!--[if (mso)|(IE)]></td><![endif]-->
    <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
    </div>
    </div>
    <div class="u-row-container" style="padding:0;background-color:transparent">
    <div class="u-row" style="margin:0 auto;min-width:320px;max-width:600px;overflow-wrap:break-word;word-wrap:break-word;word-break:break-word;background-color:#f9f9f9">
    <div style="border-collapse:collapse;display:table;width:100%;height:100%;background-color:transparent">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #f9f9f9;"><![endif]-->
    <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
    <div class="u-col u-col-100" style="max-width:320px;min-width:600px;display:table-cell;vertical-align:top">
    <div style="height:100%;width:100%!important">
    <!--[if (!mso)&(!IE)]><!--><div style="box-sizing:border-box;height:100%;padding:0;border-top:0 solid transparent;border-left:0 solid transparent;border-right:0px solid transparent;border-bottom:0 solid transparent"><!--<![endif]-->
    <table style="font-family:Lato,sans-serif" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:0 40px 30px 20px;font-family:Lato,sans-serif" align="left">
    <div style="font-size:14px;line-height:140%;text-align:left;word-wrap:break-word">
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
    </div>
    </div>
    <!--[if (mso)|(IE)]></td><![endif]-->
    <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
    </div>
    </div>
    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
    </td>
    </tr>
    </tbody>
    </table>
    <!--[if mso]></div><![endif]-->
    <!--[if IE]></div><![endif]-->
    
    </body></html>';
    return $emailtemplate;
}


?>
