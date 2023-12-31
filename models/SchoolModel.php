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
        
        
        if ($stmt->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
        $stmt->close();
        $conn->close();
    }

    public function updateSchoolById($id, $name, $address, $city,$district, $state, $pincode, $is_trust_society, $gst, $phone, $alternate_phone,  $email,  $alternate_email, $principal,  $principal_phone, $principal_email, $co_ordinator_name,$co_ordinator_phone, $co_ordinator_email,$board, $catalyst_olympiad) {
        try {
            $query = "UPDATE schools SET name = :name, address = :address  , city = :city , state = :state , pincode = :pincode , is_trust_society = :is_trust_society , gst = :gst  , phone = :phone , email = :email , alternate_email = :alternate_email , principal = :principal , principal_phone = :principal_phone , principal_email = :principal_email ,  co_ordinator_name = :co_ordinator_name , co_ordinator_phone = :co_ordinator_phone, co_ordinator_email = :co_ordinator_email,board =:board,catalyst_olympiad = :catalyst_olympiad  WHERE id = :id";

            // echo $stmt;

            $con = new dbModel();
            $connection = $con->conn();

            $stmt = $connection->prepare($query);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':city', $city);
            $stmt->bindParam(':state', $state);
            $stmt->bindParam(':pincode', $pincode);
            $stmt->bindParam(':is_trust_society', $is_trust_society);
            $stmt->bindParam(':gst', $gst);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':alternate_email', $alternate_email);
            $stmt->bindParam(':principal', $principal);
            $stmt->bindParam(':principal_phone', $principal_phone);
            $stmt->bindParam(':principal_email', $principal_email);
            $stmt->bindParam(':co_ordinator_name', $co_ordinator_name);
            $stmt->bindParam(':co_ordinator_phone', $co_ordinator_phone);
            $stmt->bindParam(':co_ordinator_email', $co_ordinator_email);
            $stmt->bindParam(':board', $board);
            $stmt->bindParam(':catalyst_olympiad', $catalyst_olympiad);

            $stmt->bindParam(':id', $id);
            
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            // Handle any potential exceptions here
            echo $e->getMessage();
            return false;
        }
    }

    public function getAllSchool() {
        $query = "SELECT * FROM schools where status = 1";
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

    public function getExamsCount() {
        $query = "SELECT count(*) as total from student_payments where payment_status = 'completed'";
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

    public function getSchoolByid($id) {
        // Implement your database query here to fetch user details by username.
        $query = "SELECT * FROM schools WHERE id = :id";
        $con = new dbModel();
        $connection = $con->conn();
       
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}


?>