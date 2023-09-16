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
					<h4 class="page-title">Profile</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item active" aria-current="page">Profile</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

		  <div class="row">
		
			<!-- /.col -->		

			  <div class="col-12 col-lg-5 col-xl-4">
				 <div class="box box-widget widget-user">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header bg-img bbsr-0 bber-0" style="background: url('assets/images/gallery/full/10.html') center center;" data-overlay="5">
					  <h3 class="widget-user-username text-white"><?php echo $user['name']; ?></h3>
					  <h6 class="widget-user-desc text-white"><?php echo $user['role']; ?></h6>
					</div>
					<div class="widget-user-image">
					  <img class="rounded-circle" src="assets/images/user3-128x128.jpg" alt="User Avatar">
					</div>
					<div class="box-footer">
					  <div class="row">
						<div class="col-sm-4">
						  <!-- <div class="description-block">
							<h5 class="description-header">12K</h5>
							<span class="description-text">FOLLOWERS</span>
						  </div> -->
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-4 be-1 bs-1">
						  <div class="description-block">
							<h5 class="description-header">Status</h5>
							<span class="description-text">
                                <?php if($user['status'] == 1){ ?><span class="badge badge-success">Active</span><?php }else{ ?>
                                    <span class="badge badge-warning">In Active</span>
                                <?php } ?>
                            </span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-4">
						  <!-- <div class="description-block">
							<h5 class="description-header">158</h5>
							<span class="description-text">TWEETS</span>
						  </div> -->
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
					  </div>
					  <!-- /.row -->
					</div>
				  </div>
				  <div class="box">
					<div class="box-body box-profile">            
					  <div class="row">
						<div class="col-12">
							<div>
								<p>Email :<span class="text-gray ps-10"><?php echo $user['email']; ?></span> </p>
								<p>Phone :<span class="text-gray ps-10"><?php echo $user['mobile']; ?></span></p>
							</div>
						</div>
						
					  </div>
					</div>
					<!-- /.box-body -->
				  </div>
			
				

			  </div>

		  </div>
		  <!-- /.row -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
 <?php include("footer.php"); ?>