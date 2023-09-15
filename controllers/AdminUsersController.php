<?php
require_once '../models/UserModel.php';
// header('Content-Type: application/json');
// error_reporting(E_ALL);
// ini_set('display_errors', '1');

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
            echo json_encode(['success' => true, 'message'=>'Successfully Updated', 'stuent_id'=>$studentId]);
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


?>
