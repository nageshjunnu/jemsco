<?php
require_once '../models/SchoolModel.php';

class SchoolContoller {
   
    public function showAllSchool() {
        $userModel = new SchoolModel();
        $schools = $userModel->getAllSchool();
        return $schools;
    }

    // public function getLastStudentId() {
    //     $userModel = new UserModel();
    //     $students = $userModel->getLastStudent();
    //     return $students;
    // }

    // public function getStudentDetailsById($id) {
    //     $userModel = new UserModel();
    //     $students = $userModel->getStudentById($id);
    //     return $students;
    // }
}


?>
