<?php
require_once '../models/UserModel.php';
// header('Content-Type: application/json');
// error_reporting(E_ALL);
// ini_set('display_errors', '1');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $action = $_POST['action'];
    if($action == 'new'){
        registerUser();
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

        // $transactionId = $_POST['transaction_id']; // Retrieve this from Razorpay's response
        $userModel = new UserModel();

        // Validate and process payment
        if ($userModel->newUser($name, $last_name, $role, $email, $mobile, $password, $username)) {
           
            //emailtemplate($studentId, $amount, $payment_id);
            echo json_encode(['success' => true, 'message' => 'New user added successful']);
        } else {
            echo json_encode(['success' => false, 'message' => 'User adding failed']);
        }
    }
}



?>
