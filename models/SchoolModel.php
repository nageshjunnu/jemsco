<?php
require_once '../config/config.php';


class SchoolModel {
   

    public function schoolReg($name, $address, $city,$district, $state, $pincode, $is_trust_society, $gst, $phone, $alternate_phone,  $email,  $alternate_email, $principal,  $principal_phone, $principal_email, $co_ordinator_name,$co_ordinator_phone, $co_ordinator_email,$board, $catalyst_olympiad) {
        $con = new dbModel();
        $connection = $con->conn();
        
        $query = "INSERT INTO schools (name, address, city,district, state, pincode, is_trust_society, gst, phone, alternate_phone, email, alternate_email, principal, principal_phone, principal_email, co_ordinator_name,co_ordinator_phone, co_ordinator_email, board, catalyst_olympiad, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
           
        $stmt = $connection->prepare($query);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt->execute([$name, $address, $city,$district, $state, $pincode, $is_trust_society, $gst, $phone, $alternate_phone,  $email,  $alternate_email, $principal,  $principal_phone, $principal_email, $co_ordinator_name,$co_ordinator_phone, $co_ordinator_email,$board, $catalyst_olympiad, 1 ]);        
        
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}


?>