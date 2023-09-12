<?php
require_once '../models/PaymentModel.php';
header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set('display_errors', '1');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $action = $_POST['action'];
    if($action == 'payment'){
        processPayment();
    }
}   


function processPayment() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $studentId = $_POST['student_id']; // You can pass this value during registration
        $payment_id = $_POST['payment_id'];
        $amount = $_POST['amount'];
        // $transactionId = $_POST['transaction_id']; // Retrieve this from Razorpay's response
        $paymentModel = new PaymentModel();

        // Validate and process payment
        if ($paymentModel->makePayment($studentId, $amount, $payment_id)) {
            session_start();
            $_SESSION['payment_id'] = $payment_id;
            echo json_encode(['success' => true, 'message' => 'Payment successful',"payment_id"=>$payment_id]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Payment failed']);
        }
    }
}

?>
