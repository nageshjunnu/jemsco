<?php
require_once '../models/UserModel.php';

 $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['HTTP_REFERER'];


 function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Validate user credentials and check the role.
            $userModel = new UserModel();
            $user = $userModel->getUserByUsername($username);
            echo json_encode(['success' => false, 'message' => $user]);

            if ($user && password_verify($password, $user['password'])) {
                // Successful login, set a session variable for user role.
                $_SESSION['user_role'] = $user['role'];
                echo json_encode(['success' => true]);
                exit;
            } else {
                echo json_encode(['success' => false, 'message' => 'Invalid credentials']);
                exit;
            }
        }

        include 'views/login.php';
    }


 if (strpos($url,'login') !== false) {
    echo 'Car exists.';
    login();
} else {
    echo 'No cars.';
}


?>
