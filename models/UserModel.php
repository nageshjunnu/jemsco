<?php
require_once '../config/config.php';
// error_reporting(E_ALL);
// ini_set('display_errors', '1');

class UserModel {
  

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

    public function newUser($username, $password, $name, $last_name, $email, $mobile,$role, $status) {
        // Implement your database query here to create a new user.
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (username,name,last_name,email,mobile, password, role, status) VALUES (:username, :name, :last_name, :email, :mobile, :password, :role, :status)";
        $con = new dbModel();
        $connection = $con->conn();
        
        $stmt = $connection->prepare($query);

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mobile', $mobile);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':status', $status);

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

    public function getAllUsers() {
        // Implement your database query here to fetch user details by username.
        $query = "SELECT * FROM users";
        $con = new dbModel();
        $connection = $con->conn();
        $stmt = $connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
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

    public function getPermissionsByid($id) {
        // Implement your database query here to fetch user details by username.
        $query = "SELECT * FROM role_access WHERE role_name = :role_name";
        $con = new dbModel();
        $connection = $con->conn();
       
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':role_name', $id);
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

    public function createStudent($student_name, $father_name,$dob,$gender , $mother_name,$class, $address, $city, $district, $state, $pincode, $school_name,  $school_address,  $school_city, $school_district,  $school_state, $school_pincode, $mobile,$alrernate_mobile, $email,$school_mobile, $school_alternate_mobile,$school_email, $password, $board_syllabus, $catalyst_olympiad, $roll_number, $role){
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // $query = "INSERT INTO student (student_name, father_name,dob, mother_name,class, address, city, district, state, pincode, school_name, school_address, school_city, school_district, school_state, school_pincode, mobile, email, password, board_syllabus, catalyst_olympiad, roll_number,role) VALUES (:student_name, :father_name,:dob, :mother_name, :address, :city, :district, :state, :pincode, :school_name, :school_address, :school_city, :school_district, :school_state, :school_pincode, :mobile, :email, :password, :board_syllabus, :catalyst_olympiad, :roll_number,:role )";
       // echo $query;
        $con = new dbModel();
        $connection = $con->conn();
        try {

            // $stmt = $connection->prepare($query);
            date_default_timezone_set('Asia/Kolkata');      
            $date=date("Y/m/d h:i:sa");
            

            $query = "INSERT INTO student (student_name, father_name,dob,gender, mother_name,class, address, city, district, state, pincode, school_name, school_address, school_city, school_district, school_state, school_pincode, mobile,alrernate_mobile, email,school_mobile,school_alternate_mobile, school_email, password, board_syllabus, catalyst_olympiad, roll_number,role, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?)";
           
            $stmt = $connection->prepare($query);
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $stmt->execute([$student_name, $father_name,$dob,$gender , $mother_name,$class, $address, $city, $district, $state, $pincode, $school_name,  $school_address,  $school_city, $school_district,  $school_state, $school_pincode, $mobile,$alrernate_mobile, $email,$school_mobile, $school_alternate_mobile,$school_email,$hashedPassword, $board_syllabus, $catalyst_olympiad, $roll_number, $role, 1]);        
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
        $query = "SELECT * FROM student where status =1";
        $con = new dbModel();
        $connection = $con->conn();
        $stmt = $connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllPaymentsModel() {
        $query = "SELECT * FROM student_payments";
        $con = new dbModel();
        $connection = $con->conn();
        $stmt = $connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRollNumberById($id) {
       // Implement your database query here to fetch user details by username.
       $query = "SELECT roll_number FROM student WHERE id = :id";
       $con = new dbModel();
       $connection = $con->conn();
      
       $stmt = $connection->prepare($query);
       $stmt->bindParam(':id', $id);
       $stmt->execute();

       return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getLastStudent() {
        $query = "SELECT * FROM student ORDER BY id DESC LIMIT 1";
        $con = new dbModel();
        $connection = $con->conn();
        $stmt = $connection->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateStudent($studentId,$student_name,$father_name, $mobile ,$email,$alrernate_mobile ,$address ,$city ,$district ,$state ,$pincode ,$school_name ,$school_address ,$school_city ,$school_district ,$school_state,$school_pincode,$board_syllabus ) {
        try {
            $query = "UPDATE student SET student_name = :student_name, father_name = :father_name  , mobile = :mobile , email = :email , alrernate_mobile = :alrernate_mobile , address = :address , city = :city  , district = :district , state = :state , pincode = :pincode , school_name = :school_name , school_address = :school_address , school_city = :school_city ,  school_district = :school_district , school_state = :school_state, school_pincode = :school_pincode,board_syllabus =:board_syllabus   WHERE id = :id";

            // echo $stmt;

            $con = new dbModel();
            $connection = $con->conn();

            $stmt = $connection->prepare($query);
            $stmt->bindParam(':student_name', $student_name);
            $stmt->bindParam(':father_name', $father_name);
            $stmt->bindParam(':mobile', $mobile);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':alrernate_mobile', $alrernate_mobile);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':city', $city);
            $stmt->bindParam(':district', $district);
            $stmt->bindParam(':state', $state);
            $stmt->bindParam(':pincode', $pincode);
            $stmt->bindParam(':school_name', $school_name);
            $stmt->bindParam(':school_address', $school_address);
            $stmt->bindParam(':school_city', $school_city);
            $stmt->bindParam(':school_district', $school_district);
            $stmt->bindParam(':school_state', $school_state);
            $stmt->bindParam(':school_pincode', $school_pincode);
            $stmt->bindParam(':board_syllabus', $board_syllabus);

            $stmt->bindParam(':id', $studentId);
            
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

    public function deleteStudent($student_id,$status) {
        try {
            $query = "UPDATE student SET status = :status WHERE id = :id";

            // echo $query;

            $con = new dbModel();
            $connection = $con->conn();

            $stmt = $connection->prepare($query);
            $stmt->bindParam(':status', $status);

            $stmt->bindParam(':id', $student_id);
            
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

    public function updateUserModal($userid,$username,$name, $last_name,$role,$email ,$mobile ,$password ){
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        try {
            $query = "UPDATE users SET username = :username, name = :name  , last_name = :last_name , role = :role , email = :email , mobile = :mobile , password = :password  WHERE id = :id";

            // echo $stmt;

            $con = new dbModel();
            $connection = $con->conn();

            $stmt = $connection->prepare($query);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':last_name', $last_name);
            $stmt->bindParam(':role', $role);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':mobile', $mobile);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->bindParam(':id', $userid);
            
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

    public function deleteUser($userId) {
        $query = "DELETE FROM users WHERE id = ?";
        $con = new dbModel();
            $connection = $con->conn();
        $stmt =$connection->prepare($query);
        $stmt->execute([$userId]);
        return $stmt->rowCount() == 1;
    }

    public function resetPasswordById($email, $newPassword){
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        try {
            $query = "UPDATE users SET password = :password WHERE email = :email";

            $con = new dbModel();
            $connection = $con->conn();

            $stmt = $connection->prepare($query);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->bindParam(':email', $email);
            
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
    

}
?>
