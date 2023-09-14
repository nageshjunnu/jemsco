<?php
require_once '../config/config.php';


class SchoolModel {
   

    public function schoolReg($name, $address, $city,$district, $state, $pincode, $is_trust_society, $gst, $phone, $alternate_phone,  $email,  $alternate_email,$password, $principal,  $principal_phone, $principal_email, $co_ordinator_name,$co_ordinator_phone, $co_ordinator_email,$board, $catalyst_olympiad) {
        $con = new dbModel();
        $connection = $con->conn();
        
        $query = "INSERT INTO schools (name, address, city,district, state, pincode, is_trust_society, gst, phone, alternate_phone, email, alternate_email, principal, principal_phone, principal_email, co_ordinator_name,co_ordinator_phone, co_ordinator_email, board, catalyst_olympiad, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
           
        $stmt = $connection->prepare($query);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt->execute([$name, $address, $city,$district, $state, $pincode, $is_trust_society, $gst, $phone, $alternate_phone,  $email,  $alternate_email, $principal,  $principal_phone, $principal_email, $co_ordinator_name,$co_ordinator_phone, $co_ordinator_email,$board, $catalyst_olympiad, 1 ]);        
        
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllSchool() {
        $query = "SELECT * FROM schools";
        $con = new dbModel();
        $connection = $con->conn();
        $stmt = $connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getStudentsCount() {
        $query = "SELECT count(*) as total from student where status = 1";
        $con = new dbModel();
        $connection = $con->conn();
        $stmt = $connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSchoolsCount() {
        $query = "SELECT count(*) as total from schools where status = 1";
        $con = new dbModel();
        $connection = $con->conn();
        $stmt = $connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTotalRecievedAmount() {
        $query = "SELECT SUM(amount) as total from student_payments where payment_status = 'completed'";
        $con = new dbModel();
        $connection = $con->conn();
        $stmt = $connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTotalPendingAmount() {
        $query = "SELECT SUM(amount) as total from student_payments where payment_status = 'pending'";
        $con = new dbModel();
        $connection = $con->conn();
        $stmt = $connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSchoolByEmail($email) {
        // Implement your database query here to fetch user details by username.
        $query = "SELECT * FROM schools WHERE email = :email";
        $con = new dbModel();
        $connection = $con->conn();
       
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}


?>