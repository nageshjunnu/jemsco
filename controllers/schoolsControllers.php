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

    public function getSchoolDetailsById($id) {
        $userModel = new SchoolModel();
        $students = $userModel->getSchoolByid($id);
        return $students;
    }
}


?>
