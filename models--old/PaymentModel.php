<?php
require_once '../config/config.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');
class PaymentModel {
    
    public function makePayment($studentId, $amount, $payment_id) {
        try {
            $query = "INSERT INTO student_payments (student_id, amount, payment_id) VALUES (?, ?, ?)";
            $con = new dbModel();
            $connection = $con->conn();
            $stmt = $connection->prepare($query);
            $stmt->execute([$studentId, $amount, $payment_id]);
            //return $stmt->rowCount() == 1; // Return true on successful payment

            if ($stmt->rowCount() == 1) {
                return true;
            } else {
                return false;
            }
        }
        catch (PDOException $e) {
            // return "false";
            die("Database error: " . $e->getMessage());
        }
    }
    
    public function getPaymentByPaymentId($payment_id) {
        // Implement your database query here to fetch user details by username.
        $query = "SELECT * FROM student_payments WHERE payment_id = :payment_id";
        $con = new dbModel();
        $connection = $con->conn();
       
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':payment_id', $payment_id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
