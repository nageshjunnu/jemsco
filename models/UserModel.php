<?php
require_once '../config/config.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');

class UserModel {
    private $db;

    public function createUser($username, $password, $role) {
        // Implement your database query here to create a new user.
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (username, password, role) VALUES (:username, :password, :role)";
        $con = new dbModel();
        $connection = $con->conn();
        
        $stmt = $connection->prepare($query);

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':role', $role);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getUserByUsername($username) {
        // Implement your database query here to fetch user details by username.
        $query = "SELECT * FROM users WHERE username = :username";
        $con = new dbModel();
        $connection = $con->conn();
       
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getUserById($id) {
        // Implement your database query here to fetch user details by username.
        $query = "SELECT * FROM users WHERE id = :id";
        $con = new dbModel();
        $connection = $con->conn();
       
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getUser($username){
        $query = "SELECT * FROM users WHERE username = :username";
        $con = new dbModel();
        $connection = $con->conn();
       
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function authenticate($username) {
        // Perform the database query to check the credentials
        // You should use prepared statements and password_hash for security
        try {
            $query = "SELECT * FROM users WHERE username = ? ";
            $con = new dbModel();
            $connection = $con->conn();
            $stmt = $connection->prepare($query);
            $stmt->execute([$username]);
            // print_r($stmt->rowCount());
            // Check if the login is successful
            if ($stmt->rowCount() == 1) {
                return "true";
            } else {
                return "false";
            }
        } catch (PDOException $e) {
            return "false";
            // die("Database error: " . $e->getMessage());
        }
    }


    // Student Module

    public function createStudent($student_name, $father_name, $mother_name,$class, $address, $city, $district, $state, $pincode, $school_name,  $school_address,  $school_city, $school_district,  $school_state, $school_pincode, $mobile,$alrernate_mobile, $email,$password, $board_syllabus, $catalyst_olympiad, $roll_number, $role){
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO student (student_name, father_name, mother_name,class, address, city, district, state, pincode, school_name, school_address, school_city, school_district, school_state, school_pincode, mobile, email, password, board_syllabus, catalyst_olympiad, roll_number,role) VALUES (:student_name, :father_name, :mother_name, :address, :city, :district, :state, :pincode, :school_name, :school_address, :school_city, :school_district, :school_state, :school_pincode, :mobile, :email, :password, :board_syllabus, :catalyst_olympiad, :roll_number,:role )";
       // echo $query;
        $con = new dbModel();
        $connection = $con->conn();
        try {

            // $stmt = $connection->prepare($query);
            date_default_timezone_set('Asia/Kolkata');      
            $date=date("Y/m/d h:i:sa");
            

            $query = "INSERT INTO student (student_name, father_name, mother_name,class, address, city, district, state, pincode, school_name, school_address, school_city, school_district, school_state, school_pincode, mobile,alrernate_mobile, email, password, board_syllabus, catalyst_olympiad, roll_number,role) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)";
           
            $stmt = $connection->prepare($query);
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $stmt->execute([$student_name, $father_name, $mother_name,$class, $address, $city, $district, $state, $pincode, $school_name,  $school_address,  $school_city, $school_district,  $school_state, $school_pincode, $mobile,$alrernate_mobile, $email,$hashedPassword, $board_syllabus, $catalyst_olympiad, $roll_number, $role]);        
            // $stmt = $connection->prepare($query);
            // print_r($stmt->rowCount());
            
            if ($stmt->rowCount() == 1) {
                return true;
            } else {
                return false;
            }
        }
         catch (PDOException $e) {
                die("Database error: " . $e->getMessage());
            }
    }

    public function getStudentByEmail($email) {
        // Implement your database query here to fetch user details by username.
        $query = "SELECT * FROM student WHERE email = :email";
        $con = new dbModel();
        $connection = $con->conn();
       
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getStudentById($id) {
        // Implement your database query here to fetch user details by username.
        $query = "SELECT * FROM student WHERE id = :id";
        $con = new dbModel();
        $connection = $con->conn();
       
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function getAllStudents() {
        $query = "SELECT * FROM student";
        $con = new dbModel();
        $connection = $con->conn();
        $stmt = $connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getLastStudent() {
        $query = "SELECT * FROM student ORDER BY id DESC LIMIT 1";
        $con = new dbModel();
        $connection = $con->conn();
        $stmt = $connection->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}
?>
