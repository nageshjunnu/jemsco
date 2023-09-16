<?php include("header.php"); ?>
  
  <?php include("sidebar.php"); 
//   error_reporting(E_ALL);
// ini_set('display_errors', '1');
  // session_start();
// require_once '../models/UserModel.php';
require_once '../controllers/AdminController.php';


if(isset($_GET['id']) && $permissions["update_permission"] == 1 )
{
    $userId = $_GET['id'];
}
else{
    header('Location: all-users.php'); // Redirect to the login page if not logged in
    exit();
}

$userModel = new AdminController();
$user = $userModel->getUserDetailsBy($userId);
// print_r($user);
// die;
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
					  
				<div class="col-lg-12 col-12">
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
									  <label class="form-label">User Name</label>
									  <input type="text" class="form-control" name="username" value="<?php echo $user['username']; ?>">
									 
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">First Name</label>
									  <input type="text" class="form-control" name="name" value="<?php echo $user['name']; ?>">
									 
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Last Name</label>
									  <input type="text" class="form-control" name="last_name" value="<?php echo $user['last_name']; ?>">
									  
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Role</label>
									  <select class="form-select"  name="role" required>
										<option value="<?php echo $user['role']; ?>" selected> <?php echo $user['role']; ?> </option>
                                        <option value="admin">Admin</option>
                                        <option value="editor">editor</option>
                                        <option value="viewer">viewer</option>
									  </select>
									</div>
								  </div>
								
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">E-mail</label>
									  <input type="email" class="form-control" name ="email" value="<?php echo $user['email']; ?>" placeholder="Email" required>
									</div>
								  </div>
								  
								</div>
								<div class="row">
								    <div class="col-md-6">
                                        <div class="form-group">
                                        <label class="form-label">Contact Number</label>
                                        <input type="number" class="form-control" name="mobile" value="<?php echo $user['mobile']; ?>" placeholder="number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" <?php if($user['role'] == "superadmin"){ echo "readonly"; } ?> value="<?php echo $user['password']; ?>" placeholder="password">
                                        </div>
                                    </div>
									
									</div>
								</div>								
							
							<div class="box-footer">
                                <input type="hidden" name="action" value="update-user">
                                <input type="hidden" name="userid" value="<?php echo $user['id']; ?>">

								<a  href="all-users.php" type="button" class="btn btn-warning me-1">
								  <i class="ti-trash"></i> Cancel </a>
								<button type="submit" class="btn btn-primary">
								  <i class="ti-save-alt"></i> Update
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
							window.location ="all-users.php";
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