<?php
require_once '../models/UserModel.php';

class AdminController {
   

    public function getUserDetailsBy($id) {
        $userModel = new UserModel();
        $students = $userModel->getUserById($id);
        return $students;
    }

    public function getPermissions($id) {
        $userModel = new UserModel();
        $permissions = $userModel->getPermissionsByid($id);
        return $permissions;
    }
    

}


?>
