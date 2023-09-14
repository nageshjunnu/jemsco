<?php
// session_start();
// require_once '../models/UserModel.php';
require_once '../controllers/StudentController.php';
// error_reporting(E_ALL);
// ini_set('display_errors', '1');

// Check if the user is logged in (session variable exists)
// if (!isset($_SESSION['id'])) {
//     header('Location: auth_login.html'); // Redirect to the login page if not logged in
//     exit();
// }
// if (isset($_SESSION['id'])) {
//     $username = $_SESSION['id'];
//    // echo json_encode(['id' => $username]);
// } else {
//    // echo json_encode(['id' => null]);
// }
// $userModel = new UserModel();
// $user = $userModel->getUserById($_SESSION['id']);

if(isset($_GET['id']))
{
    $studentId = $_GET['id'];
}
else{
    header('Location: students_list.php'); // Redirect to the login page if not logged in
    exit();
}

$studenstModel = new StudentController();
$students = $studenstModel->getStudentDetailsById($studentId);
// echo "<pre>";
// print_r($students);
// echo "</pre>";
// die;
// echo substr("srikanth", 0, 2);

// die;
?>
<?php include("header.php"); ?>
  
  <?php include("sidebar.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Student Details</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page"> <?php echo $students['roll_number'];?> 
								<?php if($students['status'] == 1){ ?><span class="badge badge-success">Active</span><?php }else{ ?><span class="badge badge-warning">In Active</span><?php } ?></li>
							</ol>
						</nav>
					</div>
					<div style="float:right;"><a href = "student-edit.php?id=<?php echo $student['id']; ?>" ><span class="badge badge-lg badge-info">Edit</span></a></div>
				</div>				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-lg-4 col-xlg-3 col-md-5">
					<div class="box">
						<div class="user-bg"> <img width="100%" alt="user" src="../images/img1.jpg"> </div>
						<div class="box-body">
							<div class="row text-center mt-10">
								<div class="col-md-6 border-end">
									<strong>Name</strong>
									<p><?php echo $students['student_name'];?></p>
								</div>
								<div class="col-md-6"><strong>Occupation</strong>
									<p><?php echo $students['role'];?></p>
								</div>
							</div>
							<hr>
							<div class="row text-center mt-10">
								<div class="col-md-6 border-end"><strong>Email ID</strong>
									<p><?php echo $students['email'];?></p>
								</div>
								<div class="col-md-6"><strong>Phone</strong>
									<p><?php echo $students['mobile'];?></p>
                                    <p><?php echo $students['alrernate_mobile'];?></p>
								</div>
							</div>
							<hr>
							<div class="row text-center mt-10">
								<div class="col-md-12"><strong>Address</strong>
									<p><?php echo $students['address'];?></p>
								</div>
							</div>
							<hr>
							<br>
							<!-- <div class="row mt-15">
								<div class="col-md-4 col-sm-4 text-center">
									<p class="text-primary fs-24"><i class="ti-facebook"></i></p>
									<h1>258</h1> 
								</div>
								<div class="col-md-4 col-sm-4 text-center">
									<p class="text-info fs-24"><i class="ti-twitter"></i></p>
									<h1>125</h1> 
								</div>
								<div class="col-md-4 col-sm-4 text-center">
									<p class="text-danger fs-24"><i class="ti-google"></i></p>
									<h1>140</h1> 
								</div>
							</div> -->
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-xlg-9 col-md-7">
					<div class="box">
						<div class="box-body">
							<div class="row">
								<div class="col-md-3 col-xs-6 border-end"> <strong>Father Name</strong>
									<br>
									<p class="text-muted"><?php echo $students['father_name'];?></p>
								</div>
								<div class="col-md-3 col-xs-6 border-end"> <strong>Mobile</strong>
									<br>
									<p class="text-muted"><?php echo $students['mobile'];?></p>
								</div>
								<div class="col-md-3 col-xs-6 border-end"> <strong>Email</strong>
									<br>
									<p class="text-muted"><?php echo $students['email'];?></p>
								</div>
								<div class="col-md-3 col-xs-6"> <strong>Location</strong>
									<br>
									<p class="text-muted"><?php echo $students['city'];?> | <?php echo $students['state'];?></p>
								</div>
							</div>
							<hr>
							<!-- <p class="mt-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
							
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
							
							<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							
							<h4 class="box-title fw-500 py-20 border-bottom d-block">Skill Set</h4>
							<h5 class="mt-30">Wordpress <span class="pull-right">80%</span></h5>
							<div class="progress">
								<div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">50% Complete</span> </div>
							</div>
							<h5 class="mt-30">HTML 5 <span class="pull-right">90%</span></h5>
							<div class="progress">
								<div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%;"> <span class="sr-only">50% Complete</span> </div>
							</div>
							<h5 class="mt-30">jQuery <span class="pull-right">50%</span></h5>
							<div class="progress">
								<div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">50% Complete</span> </div>
							</div>
							<h5 class="mt-30">Photoshop <span class="pull-right">70%</span></h5>
							<div class="progress">
								<div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;"> <span class="sr-only">50% Complete</span> </div>
							</div> -->
							<h4 class="box-title my-20 fw-500 py-20 border-bottom d-block">Selected Exams</h4>
							<div class="d-flex no-block fa fa-check-circle text-success">
								<h6 class="ms-10 text-dark"><?php echo $students['class'];?></h6>
							</div>
							
							
							<h4 class="box-title my-20 fw-500 py-20 border-bottom d-block">School Details</h4>
							<div class="d-flex no-block fa fa-check-circle text-success">
								<h6 class="ms-10 text-dark">School Name : <?php echo $students['school_name'];?></h6>
							</div>
							<div class="d-flex no-block fa fa-check-circle text-success">
								<h6 class="ms-10 text-dark">School Address : <?php echo $students['school_address'];?></h6>
							</div>
							<div class="d-flex no-block fa fa-check-circle text-success">
								<h6 class="ms-10 text-dark">School City : <?php echo $students['school_city'];?></h6>
							</div>
							<div class="d-flex no-block fa fa-check-circle text-success">
								<h6 class="ms-10 text-dark">School District : <?php echo $students['school_district'];?></h6>
							</div>
							<div class="d-flex no-block fa fa-check-circle text-success">
								<h6 class="ms-10 text-dark">School State : <?php echo $students['school_state'];?></h6>
							</div>
							<div class="d-flex no-block fa fa-check-circle text-success">
								<h6 class="ms-10 text-dark">Pincode : <?php echo $students['school_pincode'];?></h6>
							</div>
							
							<h4 class="box-title my-20 fw-500 py-20 border-bottom d-block">Board</h4>
							
							<div class="d-flex no-block fa fa-check-circle text-success">
								<h6 class="ms-10 text-dark"> <?php echo $students['board_syllabus'];?></h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php'); ?>