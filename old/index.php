<?php
session_start();
// error_reporting(E_ALL);
// ini_set('display_errors', '1');
// Include necessary files and configure the database connection.
// include 'config/config.php'; // Database configuration
// include 'models/UserModel.php';
// include 'controllers/AuthController.php';

// $userModel = new UserModel($db);
// $authController = new AuthController($userModel);

if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin') {
    // Redirect to the admin panel or perform other admin-related tasks.
    header('Location: admin.php');
    exit;
}

include 'views/login.html';
?>
