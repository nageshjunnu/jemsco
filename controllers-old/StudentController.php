<?php
require_once '../models/UserModel.php';

class StudentController {
   
    public function showAllStudents() {
        $userModel = new UserModel();
        $students = $userModel->getAllStudents();
        return $students;
    }

    public function getLastStudentId() {
        $userModel = new UserModel();
        $students = $userModel->getLastStudent();
        return $students;
    }

    public function getStudentDetailsById($id) {
        $userModel = new UserModel();
        $students = $userModel->getStudentById($id);
        return $students;
    }
}


?>
