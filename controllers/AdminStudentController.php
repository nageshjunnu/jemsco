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
require_once '../models/SchoolModel.php';
require_once '../controllers/StudentController.php';


$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['HTTP_REFERER'];

function updateStudent() {
        if (isset($_POST["studentId"]) && isset($_POST["student_name"])) {
            $studentId = $_POST["studentId"];
            $student_name = $_POST["student_name"];
            $father_name = $_POST["father_name"];
            $mobile = $_POST["mobile"];
            $alrernate_mobile = $_POST["alrernate_mobile"];
            $address = $_POST["address"];
            $city = $_POST["city"];
            $district = $_POST["district"];
            $state = $_POST["state"];
            $pincode = $_POST["pincode"];
            $school_name = $_POST["school_name"];
            $school_address = $_POST["school_address"];
            $school_city = $_POST["school_city"];
            $school_district = $_POST["school_district"];
            $school_state = $_POST["school_state"];

            $school_pincode = $_POST["school_pincode"];
            $board_syllabus = $_POST["board_syllabus"];

            $email = $_POST["email"];
    
            // Perform the update operation in your database
            // Example: $this->model->updateStudent($studentId, $name, $email);
            $userModel = new UserModel();
            // Check if the update was successful
            if ($userModel->updateStudent($studentId,$student_name,$father_name, $mobile ,$email,$alrernate_mobile ,$address ,$city ,$district ,$state ,$pincode ,$school_name ,$school_address ,$school_city ,$school_district ,$school_state )) {
                echo json_encode(['success' => true, 'message'=>'Successfully Updated']);
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

 if (strpos($url,'student') !== false) {
    updateStudent();
} else {
    echo 'No .';
}
?>
