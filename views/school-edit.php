<?php include("header.php"); ?>
  
  <?php include("sidebar.php"); 
//   error_reporting(E_ALL);
// ini_set('display_errors', '1');
  // session_start();
// require_once '../models/UserModel.php';
require_once '../controllers/schoolsControllers.php';

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
    $id = $_GET['id'];
}
else{
    header('Location: schools.php'); // Redirect to the login page if not logged in
    exit();
}

$schoolController = new SchoolContoller();
$schoolDetails = $schoolController->getSchoolDetailsById($_GET['id']);
// echo "<pre>";
// print_r($schoolDetails);
// echo "</pre>";
// die;
// echo substr("srikanth", 0, 2);

// die;

  ?>
  <?php
   if($permissions["update_permission"] == 1 ){ 


  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title"> Update The School </h4>
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
	    <form class="form" id="updateSchoolForm">
	        <div class="row">
	            <div class="col-lg-6 col-12">
	                <div class="box">
	                    <div class="box-header with-border">
	                        <h4 class="box-title"><?php echo $schoolDetails['name'];?></h4>
	                    </div>
	                    <div class="box-body">
	                        <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> School Info</h4>
	                        <hr class="my-15">
	                        <div class="row">
	                            <div class="col-md-6">
	                                <div class="form-group"> <label class="form-label">School Name</label> <input type="text" class="form-control" name="student_name" value="<?php echo $schoolDetails['name'];?>"> <input type="hidden" value="<?php echo $schoolDetails['id'];?>" name="id"> </div>
	                            </div>
	                            <div class="col-md-6">
	                                <div class="form-group"> <label class="form-label">Contact Number</label> <input type="number" class="form-control" name="phone" value="<?php echo $schoolDetails['phone'];?>" > </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col-md-6">
	                                <div class="form-group"> <label class="form-label">Alternate Number</label> <input type="number" class="form-control" name="alternate_phone" value="<?php echo $schoolDetails['alternate_phone'];?>"> </div>
	                            </div>
	                            <div class="col-md-6">
	                                <div class="form-group"> <label class="form-label">Email</label> <input type="email" class="form-control" name="email" value="<?php echo $schoolDetails['email'];?>" > </div>
	                            </div>
	                            <div class="col-md-6">
	                                <div class="form-group"> <label class="form-label">Alternate Email</label> <input type="email" class="form-control" name="alternate_email" value="<?php echo $schoolDetails['alternate_email'];?>" > </div>
	                            </div>
	                        </div>
	                    </div>
	                  
	                        <div class="box-body">
	                            <h4 class="box-title text-info mb-0 mt-20"><i class="ti-save me-15"></i> Address info</h4>
	                            <hr class="my-15">
	                            <div class="row">
	                                <div class="col-md-6">
	                                    <div class="form-group"> <label class="form-label">Address</label> <input type="text" class="form-control" name="address" value="<?php echo $schoolDetails['address'];?>" > </div>
	                                </div>
	                                <div class="col-md-6">
	                                    <div class="form-group"> <label class="form-label">City</label> <input type="text" class="form-control" name="city" value="<?php echo $schoolDetails['city'];?>" > </div>
	                                </div>
	                            </div>
	                            <div class="row">
	                                <div class="col-md-6">
	                                    <div class="form-group"> <label class="form-label">District</label> <input type="text" class="form-control" name="district" value="<?php echo $schoolDetails['district'];?>" > </div>
	                                </div>
	                                <div class="col-md-6">
	                                    <div class="form-group"> <label class="form-label">State</label> <input type="text" class="form-control" name="state" value="<?php echo $schoolDetails['state'];?>"> </div>
	                                </div>
	                                <div class="row">
	                                    <div class="col-md-6">
	                                        <div class="form-group"> <label class="form-label">Pincode</label> <input type="text" class="form-control" name="pincode" value="<?php echo $schoolDetails['pincode'];?>" > </div>
	                                    </div>
	                                    <div class="col-md-6">
	                                        <div class="form-group"> <label class="form-label">Trust/City</label> <input type="text" class="form-control" name="is_trust_society" value="<?php echo $schoolDetails['is_trust_society'];?>" > </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                  
	               		 </div>
   					</div>
					<!-- /.box -->
	                <div class="col-lg-6 col-12">
	                    <div class="box">
	                        <div class="box-header with-border"> </div>
	                        <div class="box-body">
	                            <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> More Info</h4>
	                            <hr class="my-15">
	                            <div class="row">
	                                <div class="col-md-6">
	                                    <div class="form-group"> <label class="form-label">GST</label> <input type="text" class="form-control" name="gst" value="<?php echo $schoolDetails['gst'];?>"> </div>
	                                </div>
	                                <div class="col-md-6">
	                                    <div class="form-group"> <label class="form-label"> Principal</label> <input type="text" class="form-control" name="principal" value="<?php echo $schoolDetails['principal'];?>"> </div>
	                                </div>
	                            </div>
	                            <div class="row">
	                                <div class="col-md-6">
	                                    <div class="form-group"> <label class="form-label">Principal Phone</label> <input type="text" class="form-control" name="principal_phone" value="<?php echo $schoolDetails['principal_phone'];?>" > </div>
	                                </div>
	                                <div class="col-md-6">
	                                    <div class="form-group"> <label class="form-label">Principal Email</label> <input type="text" class="form-control" name="principal_email" value="<?php echo $schoolDetails['principal_email'];?>" > </div>
	                                </div>
	                            </div>
	                            <div class="row">
	                                <div class="col-md-6">
	                                    <div class="form-group"> <label class="form-label">Co Ordinator Name</label> <input type="text" class="form-control" name="co_ordinator_name" value="<?php echo $schoolDetails['co_ordinator_name'];?>" > </div>
	                                </div>
	                                <div class="col-md-6">
	                                    <div class="form-group"> <label class="form-label">Co Ordinator Phone</label> <input type="number" class="form-control" name="co_ordinator_phone" value="<?php echo $schoolDetails['co_ordinator_phone'];?>" > </div>
	                                </div>
	                            </div>
	                            <div class="row">
	                                <div class="col-md-6">
	                                    <div class="form-group"> <label class="form-label">Co Ordinator Email</label> <input type="text" class="form-control" name="co_ordinator_email" value="<?php echo $schoolDetails['co_ordinator_email'];?>" > </div>
	                                </div>
	                                <div class="col-md-6">
	                                    <div class="form-group"> <label class="form-label">Board</label> <input type="text" class="form-control" name="board" value="<?php echo $schoolDetails['board'];?>" > </div>
	                                </div>
	                            </div>
	                            <div class="row">
	                                <div class="col-md-6">
	                                    <div class="form-group"> <label class="form-label">Catalyst Olympiad</label> <input type="text" class="form-control" readonly value="<?php echo $schoolDetails['catalyst_olympiad'];?>"> <select class="form-select" name="catalyst_olympiad">
	                                            <option value="ceo">CEO</option>
	                                            <option value="cso">CSO</option>
	                                        </select> </div>
	                                    <div class="col-md-6">
	                                        <div class="form-group"> <label class="form-label">Status</label>
	                                            <p> Status : <?php
                                                if($schoolDetails['status']){
                                                    echo '<span class="badge badge-success">Active</span>';
                                                }
                                                else{
                                                    echo '<span class="badge badge-warning">Active</span>';
                                                }
                                            ?> </p> <select class="form-select" name="status">
	                                                <option value="1">Active</option>
	                                                <option value="0">In Active</option>
	                                            </select>
	                                        </div>
	                                    </div>
	                                </div> <!-- /.box-body -->
	                                <div class="box-footer"> <input type="hidden" value="school-update" name="action"> <a href="student-details.php?id=<?php echo $studentId; ?>" type="button" class="btn btn-warning me-1"> <i class="ti-trash"></i> Cancel </a> <button type="submit" class="btn btn-primary"> <i class="ti-save-alt"></i> Save </button> </div>
	                            </div>
	                        </div> <!-- /.box -->
	                    </div>
	                </div>
	            </div>
	    </form>
	    <!--/.col (left) -->
	    <!-- right column -->
	    <!--/.col (right) -->
	    </div> <!-- /.row -->
	</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
	$(document).ready(function() {
		$("#updateSchoolForm").submit(function(event) {
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
							title: 'Update successful'
							})
							window.location ="schools.php";
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
   <?php } include("footer.php");?>