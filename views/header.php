<?php
session_start();
require_once '../models/UserModel.php';
require_once '../controllers/AdminController.php';

// Check if the user is logged in (session variable exists)
if (!isset($_SESSION['id'])) {
   // header('Location: auth_login.html'); // Redirect to the login page if not logged in
    exit();
}
if (isset($_SESSION['id'])) {
    $username = $_SESSION['id'];
   // echo json_encode(['id' => $username]);
} else {
   // echo json_encode(['id' => null]);
}
$userModel = new UserModel();
$user = $userModel->getUserById($_SESSION['id']);
// print_r($user);

$permissionsController = new AdminController();

$permissions =  $permissionsController->getPermissions($_SESSION['id']);

?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">

    <title>JEMSCO - Dashboard</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="assets/src/css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="assets/src/css/style.css">
	<link rel="stylesheet" href="assets/src/css/skin_color.css">
	<style>
		.border-end {
    border-right: 1px solid #dee2e6 !important;
    word-wrap: break-word !important;
}
	</style>
     
  </head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">
	<div id="loader"></div>
	
  <header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start d-md-none d-block">	
		<!-- Logo -->
		<a href="dashboard.php" class="logo">
		  <!-- logo-->
		  <div class="logo-mini w-30">
			  <span class="light-logo"><img src="https://jemsco.in/demo/images/header-logo.2x.png" alt="logo"></span>
			  <span class="dark-logo"><img src="https://jemsco.in/demo/images/header-logo.2x.png" alt="logo"></span>
		  </div>
		  <div class="logo-lg">
			  <span class="light-logo"><img src="https://jemsco.in/demo/images/header-logo.2x.png" alt="logo"></span>
			  <span class="dark-logo"><img src="https://jemsco.in/demo/images/header-logo.2x.png" alt="logo"></span>
		  </div>
		</a>	
	</div>   
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
					<i class="icon-Menu"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>
			<!-- <li class="btn-group d-lg-inline-flex d-none">
				<div class="app-menu">
					<div class="search-bx mx-5">
						<form>
							<div class="input-group">
							  <input type="search" class="form-control" placeholder="Search">
							  <div class="input-group-append">
								<button class="btn" type="submit" id="button-addon3"><i class="icon-Search"><span class="path1"></span><span class="path2"></span></i></button>
							  </div>
							</div>
						</form>
					</div>
				</div>
			</li> -->
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
			
			
			<li class="btn-group nav-item d-xl-inline-flex d-none">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="Full Screen">
					<i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>
			
			<li class="btn-group nav-item">
				<a href="reports.html" class="waves-effect waves-light nav-link bg-primary btn-primary w-auto fs-14" title="Full Screen">
					Reports
			    </a>
			</li>
			
        </ul>
      </div>
    </nav>
  </header>