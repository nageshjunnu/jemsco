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
        $students = $userModel->getRollNumberById($id);
        return $students;
    }

    public function getAllPayments() {
        $userModel = new UserModel();
        $students = $userModel->getAllPaymentsModel();
        return $students;
    }
}


?>
