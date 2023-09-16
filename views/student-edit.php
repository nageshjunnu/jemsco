<?php include("header.php"); ?>
  
  <?php include("sidebar.php"); 
//   error_reporting(E_ALL);
// ini_set('display_errors', '1');
  // session_start();
// require_once '../models/UserModel.php';
require_once '../controllers/StudentController.php';


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
$students = $studenstModel->getStudentById($studentId);
// echo "<pre>";
// print_r($students);
// echo "</pre>";
// die;
// echo substr("srikanth", 0, 2);

// die;

  ?>
  <?php
   if($user['role'] != "superadmin"){ 

		header('Location: students_list.php'); // Redirect to the login page if not logged in
		exit();
  }
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Update The Form</h4>
					<!-- <div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Forms</li>
								<li class="breadcrumb-item active" aria-current="page">General Form Elements</li>
							</ol>
						</nav>
					</div> -->
				</div>
				
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">
		<form class="form" id="updateStudentForm">	
			<div class="row">
					  
				<div class="col-lg-6 col-12">
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title"><?php echo $students['student_name'];?></h4>
						  
						</div>
						<!-- /.box-header -->
						
							<div class="box-body">
								<h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Personal Info</h4>
								<hr class="my-15">
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Student Name</label>
									  <input type="text" class="form-control" name="student_name" value="<?php echo $students['student_name'];?>">
									  <input type="hidden" value="<?php echo $students['id'];?>" name="studentId">
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Parent Name</label>
									  <input type="text" class="form-control" name="father_name" value="<?php echo $students['father_name'];?>">
									  
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Role</label>
									  <select class="form-select"  name="role" readonly>
										<option value="<?php echo $students['role'];?>" <?php if($students['role'] == "student"){ echo "selected"; } ?>>Stuent</option>
									  </select>
									</div>
								  </div>
								
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">E-mail</label>
									  <input type="email" class="form-control" name ="email" value="<?php echo $students['email'];?>" placeholder="<?php echo $students['email'];?>">
									</div>
								  </div>
								  
								</div>
								<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Contact Number</label>
									  <input type="number" class="form-control" name="mobile" value="<?php echo $students['mobile'];?>" placeholder="<?php echo $students['mobile'];?>">
									</div>
								  </div>
									<div class="col-md-6">
										<div class="form-group">
										<label class="form-label">Alternate Number</label>
										<input type="number" class="form-control" name="alrernate_mobile" value="<?php echo $students['alrernate_mobile'];?>" placeholder="<?php echo $students['mobile'];?>">
										</div>
									</div>
									</div>
								</div>
									
									<div class="box-body">
									<h4 class="box-title text-info mb-0 mt-20"><i class="ti-save me-15"></i> Address info</h4>
									<hr class="my-15">
									
									<div class="row">	
									<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Address</label>
										<input type="text" class="form-control" name="address" value="<?php echo $students['address'];?>" placeholder="<?php echo $students['address'];?>">									
									</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
										<label class="form-label">City</label>
										<input type="text" class="form-control" name="city" value="<?php echo $students['city'];?>" placeholder="<?php echo $students['city'];?>">
										</div>
									</div>
									</div>
									<div class="row">	
										<div class="col-md-6">
											<div class="form-group">
											<label class="form-label">District</label>
											<input type="text" class="form-control" name="district" value="<?php echo $students['district'];?>" placeholder="<?php echo $students['district'];?>">
											</div>
										</div>
										<div class="col-md-6">
										<div class="form-group">
											<label class="form-label">State</label>
											<input type="text" class="form-control" name="state" value="<?php echo $students['state'];?>" placeholder="<?php echo $students['state'];?>">
										</div>
									
									</div>
									<div class="row">	
										<div class="col-md-6">
										<div class="form-group">
											<label class="form-label">Pincode</label>
											<input type="text" class="form-control" name="pincode" value="<?php echo $students['pincode'];?>" placeholder="<?php echo $students['pincode'];?>">
										</div>
										</div>
									</div>
								</div>
							</div>
							
						
					  </div>
					</div>
					  <!-- /.box -->			
              		  	<div class="col-lg-6 col-12">
						<div class="box">
							<div class="box-header with-border">
							</div>	
					
							<div class="box-body">
								<h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> School Info</h4>
								<hr class="my-15">
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">School Name</label>
									  <input type="text" class="form-control" name="school_name" value="<?php echo $students['school_name'];?>">
									</div>
								  </div>
								  <div class="col-md-6">
                                     <div class="form-group">
									  <label class="form-label"> Address</label>
									  <input type="text" class="form-control" name="school_address" value="<?php echo $students['school_address'];?>">
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">City</label>
									  <input type="text" class="form-control" name ="school_city" value="<?php echo $students['school_city'];?>" placeholder="<?php echo $students['school_city'];?>">
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">District</label>
									  <input type="text" class="form-control" name="school_district" value="<?php echo $students['school_district'];?>" placeholder="<?php echo $students['school_district'];?>">
									</div>
								  </div>
                                  
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="form-label">State</label>
											<input type="text" class="form-control" name="school_state" value="<?php echo $students['school_state'];?>" placeholder="<?php echo $students['school_state'];?>">
											
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										<label class="form-label">Pincode</label>
										<input type="number" class="form-control" name="school_pincode" value="<?php echo $students['school_pincode'];?>" placeholder="<?php echo $students['school_pincode'];?>">
										</div>
								  	</div>
								</div>
								<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Board</label>
										<input type="text" class="form-control" name="board_syllabus" value="<?php echo $students['board_syllabus'];?>" placeholder="<?php echo $students['board_syllabus'];?>">									
									</div>
								</div>
								</div>
							
							<!-- /.box-body -->
							<div class="box-footer">
								<a  href="student-details.php?id=<?php echo $studentId; ?>" type="button" class="btn btn-warning me-1">
								  <i class="ti-trash"></i> Cancel
</a>
								<button type="submit" class="btn btn-primary">
								  <i class="ti-save-alt"></i> Save
								</button>
							</div>  
							</div>
					  </div>
					  <!-- /.box -->		
					 
				</div>  
				
		    </div>
			</form>	
			<!--/.col (left) -->
			<!-- right column -->
			
			<!--/.col (right) -->
		  </div>
		  <!-- /.row -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
	$(document).ready(function() {
		$("#updateStudentForm").submit(function(event) {
			event.preventDefault();
			
			$.ajax({
				type: "POST",
				url: "../controllers/AdminStudentController.php",
				data: $(this).serialize(),
				dataType: "json",
				success: function(response) {
					if (response.success) {
						console.log(response.message);
						const Toast = Swal.mixin({
							toast: true,
							position: 'top-end',
							showConfirmButton: false,
							timer: 3000,
							timerProgressBar: true,
							didOpen: (toast) => {
								toast.addEventListener('mouseenter', Swal.stopTimer)
								toast.addEventListener('mouseleave', Swal.resumeTimer)
							}
							})
							
							Toast.fire({
							icon: 'success',
							title: 'Update successful'
							})
							window.location ="student-details.php?id="+response.stuent_id;
					} else {
						console.log(response.message);
						const Toast = Swal.mixin({
							toast: true,
							position: 'top-end',
							showConfirmButton: false,
							timer: 3000,
							timerProgressBar: true,
							didOpen: (toast) => {
								toast.addEventListener('mouseenter', Swal.stopTimer)
								toast.addEventListener('mouseleave', Swal.resumeTimer)
							}
							})
							
							Toast.fire({
							icon: 'warning',
							title: 'Updation failed: ' + response.message
							})
					}
				}
			});
		});
	});
</script>
   <?php include("footer.php");?>