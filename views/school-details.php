<?php
// session_start();
// error_reporting(E_ALL);
// ini_set('display_errors', '1');
require_once '../models/UserModel.php';
require_once '../controllers/schoolsControllers.php';
// error_reporting(E_ALL);
// ini_set('display_errors', '1');


if(isset($_GET['id']))
{
    $userId = $_GET['id'];
}
else{
    header('Location: all-users.php'); // Redirect to the login page if not logged in
    exit();
}

$schoolController = new SchoolContoller();
$schoolDetails = $schoolController->getSchoolDetailsById($_GET['id']);
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
					<h4 class="page-title">School</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page"><?php echo $schoolDetails['name']; ?> 
                                <?php if($schoolDetails['status'] == 1){  ?>
                                     <span class="badge badge-success">Active</span>
                                <?php }else{ ?>
                                    <span class="badge badge-default">Inactive</span>
                                <?php } ?>
                                </li>
							</ol>
						</nav>
					</div>
				</div>				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row clearfix">
				<div class="col-lg-4 col-md-12">
					<div class="box profile-header">
						<div class="box-body text-center">
							<div class="profile-image mb-30"> <img src="assets/images/avatar/1.jpg" class="box-shadowed rounded-circle" alt=""> </div>
							<div>
								<h3 class="mb-0"><strong><?php echo $schoolDetails['name'] ?></strong> <?php echo $schoolDetails['board'];  ?></h3>
								<span class="job_post"><?php echo $schoolDetails['city'];  ?></span>
						
								<p class="mt-15">Mobile : <?php echo $schoolDetails['mobile'].", ";  ?>  <?php echo $schoolDetails['alternate_phone'];  ?></p>
								<p class="mt-15">Email : <?php echo $schoolDetails['email']." ".$schoolDetails['alternate_email'];  ?></p>


							</div>
							<!-- <div>
								<button class="btn btn-primary btn-rounded">Follow</button>
								<button class="btn btn-primary-light btn-rounded">Message</button>
							</div> -->
						</div>                    
					</div>                               
				<div class="box">
						<div class="box-body">
							<div class="workingtime">
								<h5 class="fw-500">Address Info</h5>
								<hr>
							</div>
							<div class="reviews">
                            <p class="mt-15"><?php echo $schoolDetails['address'];  ?></p>
								<p class="mt-15"><?php echo $schoolDetails['city'];  ?></p>
								<p class="mt-15"><?php echo $schoolDetails['district'];  ?></p>
								<p class="mt-15"><?php echo $schoolDetails['state'];  ?></p>
								<p class="mt-15"><?php echo $schoolDetails['state'].", ".$schoolDetails['pincode'];  ?> </p>
								<p class="mt-15">GST : <?php echo $schoolDetails['gst'];  ?></p>
							</div>
						</div>
					</div>       
				</div>
				<div class="col-lg-8 col-md-12">
					<div class="box box-body">
						<ul class="nav nav-tabs">
							<li class="nav-item"><a class="nav-link active show" data-bs-toggle="tab" href="#about">About</a></li>
							<li class="nav-item"><a class="school-edit.php?id<?php echo $schoolDetails['id']; ?>" data-bs-toggle="tab" href="#Account">Edit</a></li>                        
						</ul>
						<div class="tab-content">
							<div class="tab-pane py-30 active show" id="about">
                            <h4 class="box-title"><strong>Principal</strong> Details</h4>
								<ul class="list-unstyled">
									<li><p><i class="fa fa-graduation-cap me-5"></i><strong>Trust/Society:</strong> <?php echo $schoolDetails['is_trust_society'];  ?></p></li>
									<li><p><i class="mdi mdi-star me-5"></i><strong>Pricipal:</strong><?php echo $schoolDetails['principal'];  ?></p></li>
									<li><p><i class="fa fa-heart me-5"></i><strong>Principal Phone:</strong> <?php echo $schoolDetails['principal_phone'];  ?></p></li>
									<li><p><i class="mdi mdi-label me-5"></i><strong>Principal EMail:</strong>  <?php echo $schoolDetails['principal_email'];  ?></p></li>
									<li><p><i class="mdi mdi-label me-5"></i><strong>Projects:</strong> Map Creation</p></li>
								</ul>
								<hr>
                            <h4 class="box-title"><strong>Co-ordinator</strong> Details</h4>
								<ul class="list-unstyled">
									<li><p><i class="fa fa-graduation-cap me-5"></i><strong>Co-ordinator Name:</strong> <?php echo $schoolDetails['co_ordinator_name'];  ?></p></li>
									<li><p><i class="mdi mdi-star me-5"></i><strong>Co-ordinator Phone:</strong><?php echo $schoolDetails['co_ordinator_phone'];  ?></p></li>
									<li><p><i class="fa fa-heart me-5"></i><strong>Co-ordinator Email:</strong> <?php echo $schoolDetails['co_ordinator_email'];  ?></p></li>
								</ul>                                                 
							</div>
						
					</div>
		                <div class="row">					
						<div class="col-lg-6 col-md-12">
							<div class="box">
								<div class="box-header">
									<h4 class="box-title"><strong>Board</strong></h4>
								</div>
								<div class="box-body p-0">
								  <div class="media-list media-list-hover">
									<a class="media media-single" href="#">
									  <span class="avatar avatar-lg bg-primary-light rounded"><i class="fas fa-school	"></i></span>
									  <div class="media-body fw-500">
										<p class="fs-16"><?php echo $schoolDetails['board'];  ?></p>
									
									  </div>
									</a>
                                    <div class="box-header">
                                        <h4 class="box-title"><strong>Catalyst Olympiad</strong></h4>
                                    </div>
									<a class="media media-single" href="#">
									  <span class="avatar avatar-lg bg-success-light rounded"><i class="fas fa-graduation-cap"></i></span>
									  <div class="media-body fw-500">
                                      <p class="fs-16"><?php echo $schoolDetails['catalyst_olympiad'];  ?></p>

									  </div>
									</a>

									

								  </div>
								</div>
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
 

  <?php include('footer.php') ?>