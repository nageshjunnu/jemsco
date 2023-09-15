<?php include("header.php"); ?>
  
  <?php include("sidebar.php"); 
//   error_reporting(E_ALL);
// ini_set('display_errors', '1');
  // session_start();
// require_once '../models/UserModel.php';
require_once '../controllers/StudentController.php';

  ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Add New user</h4>
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
		<form class="form" id="newuser">	
			<div class="row">
					  
				<div class="col-lg-6 col-12">
					  <div class="box">
						<div class="box-header with-border">
						
						  
						</div>
						<!-- /.box-header -->
						
							<div class="box-body">
								<h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Personal Info</h4>
								<hr class="my-15">
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">First Name</label>
									  <input type="text" class="form-control" name="name" value="">
									 
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Last Name</label>
									  <input type="text" class="form-control" name="last_name" value="">
									  
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Role</label>
									  <select class="form-select"  name="role" required>
										<option value=""> Select Role </option>
                                        <option value="admin">Admin</option>
                                        <option value="editor">editor</option>
                                        <option value="viewer">viewer</option>
									  </select>
									</div>
								  </div>
								
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">E-mail</label>
									  <input type="email" class="form-control" name ="email" value="" placeholder="Email" required>
									</div>
								  </div>
								  
								</div>
								<div class="row">
								    <div class="col-md-6">
                                        <div class="form-group">
                                        <label class="form-label">Contact Number</label>
                                        <input type="number" class="form-control" name="mobile" value="" placeholder="number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" value="" placeholder="password">
                                        </div>
                                    </div>
									
									</div>
								</div>								
							
							<div class="box-footer">
                                <input type="hidden" name="add-new-user" value="add-new-user">
								<a  href="all-users.php" type="button" class="btn btn-warning me-1">
								  <i class="ti-trash"></i> Cancel </a>
								<button type="submit" class="btn btn-primary">
								  <i class="ti-save-alt"></i> Save
								</button>
							</div>		
                            </div>				
					  </div>
					</div>					 
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
		$("#newuser").submit(function(event) {
			event.preventDefault();
			
			$.ajax({
				type: "POST",
				url: "../controllers/AdminUsersController.php",
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
							title: 'Added successful'
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
							title: 'failed: ' + response.message
							})
					}
				}
			});
		});
	});
</script>
   <?php include("footer.php");?>