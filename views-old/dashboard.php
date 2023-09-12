﻿<?php
session_start();
require_once '../models/UserModel.php';

// Check if the user is logged in (session variable exists)
if (!isset($_SESSION['id'])) {
    header('Location: auth_login.html'); // Redirect to the login page if not logged in
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
?>
<?php include("header.php"); ?>
  
 <?php include("sidebar.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-3 col-md-6 col-12">
					<div class="box">
						<div class="box-body">
							<div class="d-flex justify-content-between">
								<div>
									<h4 class="text-fade">Total Students</h4>
									<h4 class="fw-600">1,542</h4>
									<p class="mb-0"><span class="text-success">12%</span> Increase</p>
								</div>
								<div>
									<img src="assets/images/svg-icon/color-svg/custom-24.svg" class="w-100" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-12">
					<div class="box">
						<div class="box-body">
							<div class="d-flex justify-content-between">
								<div>
									<h4 class="text-fade">New Students</h4>
									<h4 class="fw-600">742</h4>
									<p class="mb-0"><span class="text-success">09%</span> Increase</p>
								</div>
								<div>
									<img src="assets/images/svg-icon/color-svg/custom-25.svg" class="w-100" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-12">
					<div class="box">
						<div class="box-body">
							<div class="d-flex justify-content-between">
								<div>
									<h4 class="text-fade">Fees Collection</h4>
									<h4 class="fw-600">$542</h4>
									<p class="mb-0"><span class="text-success">49%</span> Total</p>
								</div>
								<div>
									<img src="assets/images/svg-icon/color-svg/custom-26.svg" class="w-100" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-12">
					<div class="box">
						<div class="box-body">
							<div class="d-flex justify-content-between">
								<div>
									<h4 class="text-fade">Fees Pending</h4>
									<h4 class="fw-600">$785</h4>
									<p class="mb-0"><span class="text-danger">-51%</span> Total</p>
								</div>
								<div>
									<img src="assets/images/svg-icon/color-svg/custom-27.svg" class="w-100" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-8 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">
								Revenue Report
							</h4>						
						</div>
						<div class="box-body">
							<div id="chart-report"></div>
						</div>
						<div class="box-footer">
							<div class="row">
								<div class="col-xl-3 col-md-6 col-12">
									<div class="fs-14 flexbox align-items-center">
										<span>Fees</span>
										<span>35%</span>
								    </div>
								    <div class="progress progress-xxs my-5">
										<div class="progress-bar progress-bar-primary" role="progressbar" style="width: 35%; height: 5px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
								    </div>
								    <small class="fs-10 fw-400 mb-5 text-uppercase">Compared to Last year</small>
								</div>
								<div class="col-xl-3 col-md-6 col-12">
									<div class="fs-14 flexbox align-items-center">
										<span>Donation</span>
										<span>61%</span>
								    </div>
								    <div class="progress progress-xxs my-5">
										<div class="progress-bar progress-bar-warning" role="progressbar" style="width: 61%; height: 5px;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
								    </div>
								    <small class="fs-10 fw-400 mb-5 text-uppercase">Compared to Last year</small>
								</div>
								<div class="col-xl-3 col-md-6 col-12">
									<div class="fs-14 flexbox align-items-center">
										<span>Income</span>
										<span>87%</span>
								    </div>
								    <div class="progress progress-xxs my-5">
										<div class="progress-bar progress-bar-success" role="progressbar" style="width: 87%; height: 5px;" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
								    </div>
								    <small class="fs-10 fw-400 mb-5 text-uppercase">Compared to Last year</small>
								</div>
								<div class="col-xl-3 col-md-6 col-12">
									<div class="fs-14 flexbox align-items-center">
										<span>Expense</span>
										<span>42%</span>
								    </div>
								    <div class="progress progress-xxs my-5">
										<div class="progress-bar progress-bar-danger" role="progressbar" style="width: 42%; height: 5px;" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
								    </div>
								    <small class="fs-10 fw-400 mb-5 text-uppercase">Compared to Last year</small>
								</div>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="box-header with-border">
						  	<h4 class="box-title">Professors List</h4>
						  	<div class="box-controls pull-right">
								<div class="lookup lookup-circle lookup-right">
								  <input type="text" name="s">
								</div>
						  	</div>
						</div>
						<div class="box-body px-0 pt-0">
							<div class="table-responsive">
							  	<table class="table table-hover">
									<tbody>
										<tr>
										  <th class="min-w-80">Img</th>
										  <th>Prof. Name</th>
										  <th>Dep.</th>
										  <th>Gender</th>
										  <th>Degree</th>
										  <th>Email</th>
										  <th>Mobile</th>
										  <th>Jon. Date</th>
										  <th class="min-w-100">Actions</th>
										</tr>
										<tr>
										  <td><img src="assets/images/avatar/avatar-1.png" class="avatar avatar-lg rounded10 bg-primary-light" alt=""></td>
										  <td class="text-nowrap">Jens Brincker</td>
										  <td><span class="badge badge-danger-light">Computer</span></td>
										  <td>Male</td>
										  <td class="text-nowrap">M.Sc., PHD.</td>
										  <td>demo@example.com</td>
										  <td>1234567890</td>
										  <td>02/25/2001</td>
										  <td>
											  <a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
										  </td>
										</tr>
										<tr>
										  <td><img src="assets/images/avatar/avatar-2.png" class="avatar avatar-lg rounded10 bg-primary-light" alt=""></td>
										  <td class="text-nowrap">Mark Hay</td>
										  <td><span class="badge badge-primary-light">Mechanical</span></td>
										  <td>Female</td>
										  <td class="text-nowrap">M.Sc.</td>
										  <td>demo@example.com</td>
										  <td>1234567890</td>
										  <td>02/25/2001</td>
										  <td>
											  <a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
										  </td>
										</tr>
										<tr>
										  <td><img src="assets/images/avatar/avatar-3.png" class="avatar avatar-lg rounded10 bg-primary-light" alt=""></td>
										  <td class="text-nowrap">Airi Satou</td>
										  <td><span class="badge badge-warning-light">Mathematics</span></td>
										  <td>Female</td>
										  <td class="text-nowrap">M.Sc., PHD.</td>
										  <td>demo@example.com</td>
										  <td>1234567890</td>
										  <td>02/25/2001</td>
										  <td>
											  <a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
										  </td>
										</tr>
										<tr>
										  <td><img src="assets/images/avatar/avatar-4.png" class="avatar avatar-lg rounded10 bg-primary-light" alt=""></td>
										  <td class="text-nowrap">Ashton Cox</td>
										  <td><span class="badge badge-info-light">Music</span></td>
										  <td>Male</td>
										  <td class="text-nowrap">B.A.</td>
										  <td>demo@example.com</td>
										  <td>1234567890</td>
										  <td>02/25/2001</td>
										  <td>
											  <a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
										  </td>
										</tr>
										<tr>
										  <td><img src="assets/images/avatar/avatar-5.png" class="avatar avatar-lg rounded10 bg-primary-light" alt=""></td>
										  <td class="text-nowrap">Cara Stevens</td>
										  <td><span class="badge badge-success-light">Civil</span></td>
										  <td>Female</td>
										  <td class="text-nowrap">B.E., M.E.</td>
										  <td>demo@example.com</td>
										  <td>1234567890</td>
										  <td>02/25/2001</td>
										  <td>
											  <a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
										  </td>
										</tr>
										<tr>
										  <td><img src="assets/images/avatar/avatar-6.png" class="avatar avatar-lg rounded10 bg-primary-light" alt=""></td>
										  <td class="text-nowrap">Angelica Ramos</td>
										  <td><span class="badge badge-danger-light">Sport</span></td>
										  <td>Male</td>
										  <td class="text-nowrap">CP.Ed.</td>
										  <td>demo@example.com</td>
										  <td>1234567890</td>
										  <td>02/25/2001</td>
										  <td>
											  <a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
										  </td>
										</tr>
										<tr>
										  <td><img src="assets/images/avatar/avatar-7.png" class="avatar avatar-lg rounded10 bg-primary-light" alt=""></td>
										  <td class="text-nowrap">Sarah Smith</td>
										  <td><span class="badge badge-primary-light">Agriculture</span></td>
										  <td>Female</td>
										  <td class="text-nowrap">B.E. Agree</td>
										  <td>demo@example.com</td>
										  <td>1234567890</td>
										  <td>02/25/2001</td>
										  <td>
											  <a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
										  </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">
								Upcoming Events
							</h4>
						</div>
						<div class="box-body p-0">
							<div class="event-bx">
								<ul class="media-list event-widget list-unstyled">
									<li class="media">
										<div class="media-left">
											<div class="panel panel-primary text-center date">
												<div class="panel-heading month">
													<span class="strong">
														Mar
													</span>
												</div>
												<div class="panel-body day text-primary">
													23
												</div>
											</div>
										</div>
										<div class="media-body">
											<a href="#" class="media-heading fw-500 fs-16 hover-primary" data-bs-toggle="modal" data-bs-target="#evemt-view">
												Sport Events
											</a>
											<p class="text-mute">
												Vivamus pulvinar mauris eu placerat blandit. In euismod tellus vel ex vestibulum congue.
											</p>
											<address class="text-fade fs-12"><i class="mdi mdi-map-marker"></i> 123 6th St. Melbourne, FL 32904</address>
										</div>
									</li>
									<li class="media">
										<div class="media-left">
											<div class="panel panel-primary text-center date">
												<div class="panel-heading month">
													<span class="strong">
														Jan
													</span>
												</div>
												<div class="panel-body text-primary day">
													16
												</div>
											</div>
										</div>
										<div class="media-body">
											<a href="#" class="media-heading fw-500 fs-16 hover-primary" data-bs-toggle="modal" data-bs-target="#evemt-view">
												Conference
											</a>
											<p class="text-mute">
												Curabitur vel malesuada tortor, sit amet ultricies mauris. Aenean consectetur ultricies luctus.
											</p>
											<address class="text-fade fs-12"><i class="mdi mdi-map-marker"></i> 123 6th St. Melbourne, FL 32904</address>
										</div>
									</li>
									<li class="media">
										<div class="media-left">
											<div class="panel panel-primary text-center date">
												<div class="panel-heading month">
													<span class="strong all-caps">
														Dec
													</span>
												</div>
												<div class="panel-body text-primary day">
													8
												</div>
											</div>
										</div>
										<div class="media-body">
											<a href="#" class="media-heading fw-500 fs-16 hover-primary" data-bs-toggle="modal" data-bs-target="#evemt-view">
												Annual Celebration
											</a>
											<p class="text-mute">
												Sed convallis dignissim magna et dignissim. Praesent tincidunt sapien eu gravida dignissim.
											</p>
											<address class="text-fade fs-12"><i class="mdi mdi-map-marker"></i> 123 6th St. Melbourne, FL 32904</address>
										</div>
									</li>
									<li class="media">
										<div class="media-left">
											<div class="panel panel-primary text-center date">
												<div class="panel-heading month">
													<span class="strong">
														Mar
													</span>
												</div>
												<div class="panel-body day text-primary">
													23
												</div>
											</div>
										</div>
										<div class="media-body">
											<a href="#" class="media-heading fw-500 fs-16 hover-primary" data-bs-toggle="modal" data-bs-target="#evemt-view">
												Sport Events
											</a>
											<p class="text-mute">
												Vivamus pulvinar mauris eu placerat blandit. In euismod tellus vel ex vestibulum congue.
											</p>
											<address class="text-fade fs-12"><i class="mdi mdi-map-marker"></i> 123 6th St. Melbourne, FL 32904</address>
										</div>
									</li>
									<li class="media">
										<div class="media-left">
											<div class="panel panel-primary text-center date">
												<div class="panel-heading month">
													<span class="strong">
														Jan
													</span>
												</div>
												<div class="panel-body text-primary day">
													16
												</div>
											</div>
										</div>
										<div class="media-body">
											<a href="#" class="media-heading fw-500 fs-16 hover-primary" data-bs-toggle="modal" data-bs-target="#evemt-view">
												Conference
											</a>
											<p class="text-mute">
												Curabitur vel malesuada tortor, sit amet ultricies mauris. Aenean consectetur ultricies luctus.
											</p>
											<address class="text-fade fs-12"><i class="mdi mdi-map-marker"></i> 123 6th St. Melbourne, FL 32904</address>
										</div>
									</li>
									<li class="media">
										<div class="media-left">
											<div class="panel panel-primary text-center date">
												<div class="panel-heading month">
													<span class="strong all-caps">
														Dec
													</span>
												</div>
												<div class="panel-body text-primary day">
													8
												</div>
											</div>
										</div>
										<div class="media-body">
											<a href="#" class="media-heading fw-500 fs-16 hover-primary" data-bs-toggle="modal" data-bs-target="#evemt-view">
												Annual Celebration
											</a>
											<p class="text-mute">
												Sed convallis dignissim magna et dignissim. Praesent tincidunt sapien eu gravida dignissim.
											</p>
											<address class="text-fade fs-12"><i class="mdi mdi-map-marker"></i> 123 6th St. Melbourne, FL 32904</address>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="box-footer p-0 no-border">
							<a href="#" class="btn btn-primary-light w-p100">More Events »</a>
						</div>
					</div>
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Complaint Report</h4>
						</div>
						<div class="box-body">
							<div class="complaint-bx">							
								<div class="box no-shadow">
									<div class="box-body">
										<div class="d-flex align-items-center">
											<div class="me-15">
												<img src="assets/images/svg-icon/color-svg/custom-22.svg" alt="" class="w-100" />
											</div>
											<div>
												<h5 class="mb-5">2nd floor Bathroom had a broken door</h5>
												<p class="text-fade">10 minutes ago</p>
											</div>
										</div>
									</div>
								</div>								
								<div class="box no-shadow">
									<div class="box-body">
										<div class="d-flex align-items-center">
											<div class="me-15">
												<img src="assets/images/svg-icon/color-svg/custom-29.svg" alt="" class="w-100" />
											</div>
											<div>
												<h5 class="mb-5">A teacher has been picking on your child.</h5>
												<p class="text-fade">15 minutes ago</p>
											</div>
										</div>
									</div>
								</div>							
								<div class="box no-shadow">
									<div class="box-body">
										<div class="d-flex align-items-center">
											<div class="me-15">
												<img src="assets/images/svg-icon/color-svg/custom-28.svg" alt="" class="w-100" />
											</div>
											<div>
												<h5 class="mb-5">9A Class room Fan Not working</h5>
												<p class="text-fade">20 minutes ago</p>
											</div>
										</div>
									</div>
								</div>						
								<div class="box no-shadow">
									<div class="box-body">
										<div class="d-flex align-items-center">
											<div class="me-15">
												<img src="assets/images/svg-icon/color-svg/custom-22.svg" alt="" class="w-100" />
											</div>
											<div>
												<h5 class="mb-5">2nd floor Bathroom had a broken door</h5>
												<p class="text-fade">10 minutes ago</p>
											</div>
										</div>
									</div>
								</div>								
								<div class="box no-shadow">
									<div class="box-body">
										<div class="d-flex align-items-center">
											<div class="me-15">
												<img src="assets/images/svg-icon/color-svg/custom-23.svg" alt="" class="w-100" />
											</div>
											<div>
												<h5 class="mb-5">Your child’s teacher seems incompetent.</h5>
												<p class="text-fade">15 minutes ago</p>
											</div>
										</div>
									</div>
								</div>							
								<div class="box no-shadow">
									<div class="box-body">
										<div class="d-flex align-items-center">
											<div class="me-15">
												<img src="assets/images/svg-icon/color-svg/custom-22.svg" alt="" class="w-100" />
											</div>
											<div>
												<h5 class="mb-5">1nd floor Bathroom had a broken Tap</h5>
												<p class="text-fade">20 minutes ago</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">New Admission Report</h4>
						</div>
						<div class="box-body">
							<div class="d-flex align-items-center">
								<div class="me-50">
									<p class="mb-5">Today</p>
									<h4 class="fw-500">118 <i class="fa fa-arrow-up text-success"></i></h4>									
								</div>
								<div class="me-50">
									<p class="mb-5">This Week</p>
									<h4 class="fw-500">189 <i class="fa fa-arrow-down text-danger"></i></h4>									
								</div>
								<div>
									<p class="mb-5">This Month</p>
									<h4 class="fw-500">425 <i class="fa fa-arrow-up text-success"></i></h4>									
								</div>
							</div>
							<div class="progress mt-15">
								<div class="progress-bar progress-bar-success" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Fees Collection Report</h4>
						</div>
						<div class="box-body">
							<div class="d-flex align-items-center">
								<div class="me-50">
									<p class="mb-5">Today</p>
									<h4 class="fw-500">$12k <i class="fa fa-arrow-up text-success"></i></h4>									
								</div>
								<div class="me-50">
									<p class="mb-5">This Week</p>
									<h4 class="fw-500">$22k <i class="fa fa-arrow-down text-danger"></i></h4>									
								</div>
								<div>
									<p class="mb-5">This Month</p>
									<h4 class="fw-500">$95k <i class="fa fa-arrow-up text-success"></i></h4>									
								</div>
							</div>
							<div class="progress mt-15">
								<div class="progress-bar progress-bar-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
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
	
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="https://themeforest.net/item/COA-bootstrap-admin-dashboard-template/33405709" target="_blank">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
  </footer>
  <!-- Side panel --> 
  <!-- quick_actions_toggle -->
  <div class="modal modal-right fade" id="quick_actions_toggle" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content slim-scroll">
		  <div class="modal-body bg-white p-30">
			<div class="d-flex align-items-center justify-content-between pb-30">
				<h4 class="m-0">Quick Actions<br>
				<small class="badge fs-12 badge-primary mt-10">23 tasks pending</small></h4>
				<a href="#" class="btn btn-icon btn-danger-light btn-sm no-shadow" data-bs-dismiss="modal">
					<span class="fa fa-close"></span>
				</a>
			</div>
            <div class="row">
                <div class="col-6">
                    <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="accounting.html">
                        <i class="icon-Euro fs-36"><span class="path1"></span><span class="path2"></span></i>
                        <span class="fs-16">Accounting</span>
                    </a>
                </div>
                <div class="col-6">
                    <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="contact_userlist_grid.html">
                        <i class="icon-Mail-attachment fs-36"><span class="path1"></span><span class="path2"></span></i>
                        <span class="fs-16">Members</span>
                    </a>
                </div>
                <div class="col-6">
                    <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="projects.html">
                        <i class="icon-Box2 fs-36"><span class="path1"></span><span class="path2"></span></i>
                        <span class="fs-16">Projects</span>
                    </a>
                </div>
                <div class="col-6">
                    <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="contact_userlist.html">
                        <i class="icon-Group fs-36"><span class="path1"></span><span class="path2"></span></i>
                        <span class="fs-16">Customers</span>
                    </a>
                </div>
                <div class="col-6">
                    <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="mailbox.html">
                        <i class="icon-Chart-bar fs-36"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        <span class="fs-16">Email</span>
                    </a>
                </div>
                <div class="col-6">
                    <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="setting.html">
                        <i class="icon-Color-profile fs-36"><span class="path1"></span><span class="path2"></span></i>
                        <span class="fs-16">Settings</span>
                    </a>
                </div>
                <div class="col-6">
                    <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="ecommerce_orders.html">
                        <i class="icon-Euro fs-36"><span class="path1"></span><span class="path2"></span></i>
                        <span class="fs-18">Orders</span>
                    </a>
                </div>
			</div>
		  </div>
		</div>
	  </div>
  </div>
  <!-- /quick_actions_toggle -->    
    
  <!-- quick_panel_toggle -->
  <div class="modal modal-right fade" id="quick_panel_toggle" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content slim-scroll2">
		  <div class="modal-body bg-white py-20 px-0">
			<div class="d-flex align-items-center justify-content-between pb-30">
				<ul class="nav nav-tabs customtab3 px-30" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#quick_panel_logs">Audit Logs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#quick_panel_notifications">Notifications</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#quick_panel_settings">Settings</a>
					</li>
				</ul>
                <div class="offcanvas-close">
                    <a href="#" class="btn btn-icon btn-danger-light btn-sm no-shadow" data-bs-dismiss="modal">
						<span class="fa fa-close"></span>
					</a>
                </div>
			</div>
              <div class="px-30">
                <div class="tab-content">
                    <div class="tab-pane active" id="quick_panel_logs" role="tabpanel">
                        <div class="mb-30">
                            <h5 class="fw-500 mb-15">System Messages</h5>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                      <img src="assets/images/svg-icon/color-svg/001-glass.svg" class="h-30" alt="">
                                </div>
                                <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                    <a href="#" class="text-dark hover-primary mb-1 fs-16">Duis faucibus lorem</a>
                                    <span class="text-fade">Pharetra, Nulla</span>
                                </div>
                                <span class="badge badge-xl badge-light"><span class="fw-600">+125$</span></span>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                      <img src="assets/images/svg-icon/color-svg/002-google.svg" class="h-30" alt="">
                                </div>
                                <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                    <a href="#" class="text-dark hover-danger mb-1 fs-16">Mauris varius augue</a>
                                    <span class="text-fade">Pharetra, Nulla</span>
                                </div>
                                <span class="badge badge-xl badge-light"><span class="fw-600">+125$</span></span>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                      <img src="assets/images/svg-icon/color-svg/003-settings.svg" class="h-30" alt="">
                                </div>
                                <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                    <a href="#" class="text-dark hover-success mb-1 fs-16">Aliquam in magna</a>
                                    <span class="text-fade">Pharetra, Nulla</span>
                                </div>
                                <span class="badge badge-xl badge-light"><span class="fw-600">+125$</span></span>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                      <img src="assets/images/svg-icon/color-svg/004-dad.svg" class="h-30" alt="">
                                </div>
                                <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                    <a href="#" class="text-dark hover-info mb-1 fs-16">Phasellus venenatis nisi</a>
                                    <span class="text-fade">Pharetra, Nulla</span>
                                </div>
                                <span class="badge badge-xl badge-light"><span class="fw-600">+125$</span></span>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                      <img src="assets/images/svg-icon/color-svg/005-paint-palette.svg" class="h-30" alt="">
                                </div>
                                <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                    <a href="#" class="text-dark hover-warning mb-1 fs-16">Vivamus consectetur</a>
                                    <span class="text-fade">Pharetra, Nulla</span>
                                </div>
                                <span class="badge badge-xl badge-light"><span class="fw-600">+125$</span></span>
                            </div>
                        </div>
                        <div class="mb-30">
                            <h5 class="fw-500 mb-15">Tasks Overview</h5>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
                                      <span class="icon-Library fs-24"><span class="path1"></span><span class="path2"></span></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="text-dark hover-primary mb-1 fs-16">Project Briefing</a>
                                    <span class="text-fade">Project Manager</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-danger-light h-50 w-50 l-h-60 rounded text-center">
                                    <span class="icon-Write fs-24"><span class="path1"></span><span class="path2"></span></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="text-dark hover-danger mb-1 fs-16">Concept Design</a>
                                    <span class="text-fade">Art Director</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-success-light h-50 w-50 l-h-60 rounded text-center">
                                    <span class="icon-Group-chat fs-24"><span class="path1"></span><span class="path2"></span></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="text-dark hover-success mb-1 fs-16">Functional Logics</a>
                                    <span class="text-fade">Lead Developer</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-info-light h-50 w-50 l-h-60 rounded text-center">
                                    <span class="icon-Attachment1 fs-24"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="text-dark hover-info mb-1 fs-16">Development</a>
                                    <span class="text-fade">DevOps</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="me-15 bg-warning-light h-50 w-50 l-h-60 rounded text-center">
                                    <span class="icon-Shield-user fs-24"></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="text-dark hover-warning mb-1 fs-16">Testing</a>
                                    <span class="text-fade">QA Managers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="quick_panel_notifications" role="tabpanel">
                        <div>
                            <div class="media-list">
                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">10:10</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-primary">
                                    <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                    <span class="text-fade">by Johne</span>
                                  </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">08:40</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-success">
                                    <p>Proin iaculis eros non odio ornare efficitur.</p>
                                    <span class="text-fade">by Amla</span>
                                  </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">07:10</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-info">
                                    <p>In mattis mi ut posuere consectetur.</p>
                                    <span class="text-fade">by Josef</span>
                                  </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">01:15</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-danger">
                                    <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                    <span class="text-fade">by Rima</span>
                                  </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">23:12</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-warning">
                                    <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                    <span class="text-fade">by Alaxa</span>
                                  </div>
                                </a>
                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">10:10</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-primary">
                                    <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                    <span class="text-fade">by Johne</span>
                                  </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">08:40</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-success">
                                    <p>Proin iaculis eros non odio ornare efficitur.</p>
                                    <span class="text-fade">by Amla</span>
                                  </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">07:10</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-info">
                                    <p>In mattis mi ut posuere consectetur.</p>
                                    <span class="text-fade">by Josef</span>
                                  </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">01:15</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-danger">
                                    <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                    <span class="text-fade">by Rima</span>
                                  </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">23:12</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-warning">
                                    <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                    <span class="text-fade">by Alaxa</span>
                                  </div>
                                </a>
                              </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="quick_panel_settings" role="tabpanel">
                        <div>
                            <form class="form">
							<!--begin::Section-->
							<div>
								<h5 class="fw-500 mb-15">Customer Care</h5>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Enable Notifications:</label>
									<div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-primary active" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
									</div>
								</div>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Enable Case Tracking:</label>
									<div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-primary" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
									</div>
								</div>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Support Portal:</label>
									<div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-primary active" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
									</div>
								</div>
							</div>
							<!--end::Section-->
							<div class="dropdown-divider"></div>
							<!--begin::Section-->
							<div class="pt-2">
								<h5 class="fw-500 mb-15">Reports</h5>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Generate Reports:</label>
									<div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-danger active" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
									</div>
								</div>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Enable Report Export:</label>
									<div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-danger active" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
									</div>
								</div>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Allow Data Collection:</label>
									<div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-danger active" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
									</div>
								</div>
							</div>
							<!--end::Section-->
							<div class="dropdown-divider"></div>
							<!--begin::Section-->
							<div class="pt-2">
								<h5 class="fw-500 mb-15">Memebers</h5>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Enable Member singup:</label>
									<div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-warning active" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
									</div>
								</div>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Allow User Feedbacks:</label>
									<div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-warning active" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
									</div>
								</div>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Enable Customer Portal:</label>
									<div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-warning active" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
									</div>
								</div>
							</div>
							<!--end::Section-->
						</form>
                        </div>
                    </div>
                </div>
              </div>
		  </div>
		</div>
	  </div>
  </div>
  <!-- /quick_panel_toggle -->  
  
  <!-- quick_shop_toggle -->
  <div class="modal modal-right fade" id="quick_shop_toggle" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			  <div class="px-15 d-flex w-p100 align-items-center justify-content-between">
				<h4 class="m-0">Shopping Cart</h4>
				<a href="#" class="btn btn-icon btn-danger-light btn-sm no-shadow" data-bs-dismiss="modal">
					<span class="fa fa-close"></span>
				</a>
			  </div>
		  </div>
		  <div class="modal-body px-30 pb-30 bg-white slim-scroll4">
				<div class="d-flex align-items-center justify-content-between pb-15">
					<div class="d-flex flex-column me-2">
						<a href="#" class="fw-600 fs-18 text-hover-primary">Product Name</a>
						<span class="text-muted">When an unknown printer</span>
						<div class="d-flex align-items-center mt-2">
							<span class="fw-600 me-5 fs-18">$ 125</span>
							<span class="text-muted me-5">for</span>
							<span class="fw-600 me-2 fs-18">4</span>
							<a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
								<i class="fa fa-minus"></i>
							</a>
							<a href="#" class="btn btn-sm btn-success-light btn-icon">
								<i class="fa fa-plus"></i>
							</a>
						</div>
					</div>
					<a href="#" class="flex-shrink-0">
						<img src="assets/images/product/product-1.png" class="avatar h-100 w-100" alt="" />
					</a>
				</div>
			  <div class="dropdown-divider"></div>
				<div class="d-flex align-items-center justify-content-between py-15">
					<div class="d-flex flex-column me-2">
						<a href="#" class="fw-600 fs-18 text-hover-primary">Product Name</a>
						<span class="text-muted">When an unknown printer</span>
						<div class="d-flex align-items-center mt-2">
							<span class="fw-600 me-5 fs-18">$ 125</span>
							<span class="text-muted me-5">for</span>
							<span class="fw-600 me-2 fs-18">4</span>
							<a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
								<i class="fa fa-minus"></i>
							</a>
							<a href="#" class="btn btn-sm btn-success-light btn-icon">
								<i class="fa fa-plus"></i>
							</a>
						</div>
					</div>
					<a href="#" class="flex-shrink-0">
						<img src="assets/images/product/product-2.png" class="avatar h-100 w-100" alt="" />
					</a>
				</div>
			  <div class="dropdown-divider"></div>
				<div class="d-flex align-items-center justify-content-between py-15">
					<div class="d-flex flex-column me-2">
						<a href="#" class="fw-600 fs-18 text-hover-primary">Product Name</a>
						<span class="text-muted">When an unknown printer</span>
						<div class="d-flex align-items-center mt-2">
							<span class="fw-600 me-5 fs-18">$ 125</span>
							<span class="text-muted me-5">for</span>
							<span class="fw-600 me-2 fs-18">4</span>
							<a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
								<i class="fa fa-minus"></i>
							</a>
							<a href="#" class="btn btn-sm btn-success-light btn-icon">
								<i class="fa fa-plus"></i>
							</a>
						</div>
					</div>
					<a href="#" class="flex-shrink-0">
						<img src="assets/images/product/product-3.png" class="avatar h-100 w-100" alt="" />
					</a>
				</div>
			  <div class="dropdown-divider"></div>
				<div class="d-flex align-items-center justify-content-between py-15">
					<div class="d-flex flex-column me-2">
						<a href="#" class="fw-600 fs-18 text-hover-primary">Product Name</a>
						<span class="text-muted">When an unknown printer</span>
						<div class="d-flex align-items-center mt-2">
							<span class="fw-600 me-5 fs-18">$ 125</span>
							<span class="text-muted me-5">for</span>
							<span class="fw-600 me-2 fs-18">4</span>
							<a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
								<i class="fa fa-minus"></i>
							</a>
							<a href="#" class="btn btn-sm btn-success-light btn-icon">
								<i class="fa fa-plus"></i>
							</a>
						</div>
					</div>
					<a href="#" class="flex-shrink-0">
						<img src="assets/images/product/product-4.png" class="avatar h-100 w-100" alt="" />
					</a>
				</div>
			  <div class="dropdown-divider"></div> 
				<div class="d-flex align-items-center justify-content-between py-15">
					<div class="d-flex flex-column me-2">
						<a href="#" class="fw-600 fs-18 text-hover-primary">Product Name</a>
						<span class="text-muted">When an unknown printer</span>
						<div class="d-flex align-items-center mt-2">
							<span class="fw-600 me-5 fs-18">$ 125</span>
							<span class="text-muted me-5">for</span>
							<span class="fw-600 me-2 fs-18">4</span>
							<a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
								<i class="fa fa-minus"></i>
							</a>
							<a href="#" class="btn btn-sm btn-success-light btn-icon">
								<i class="fa fa-plus"></i>
							</a>
						</div>
					</div>
					<a href="#" class="flex-shrink-0">
						<img src="assets/images/product/product-5.png" class="avatar h-100 w-100" alt="" />
					</a>
				</div>
			  <div class="dropdown-divider"></div> 
				<div class="d-flex align-items-center justify-content-between py-15">
					<div class="d-flex flex-column me-2">
						<a href="#" class="fw-600 fs-18 text-hover-primary">Product Name</a>
						<span class="text-muted">When an unknown printer</span>
						<div class="d-flex align-items-center mt-2">
							<span class="fw-600 me-5 fs-18">$ 125</span>
							<span class="text-muted me-5">for</span>
							<span class="fw-600 me-2 fs-18">4</span>
							<a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
								<i class="fa fa-minus"></i>
							</a>
							<a href="#" class="btn btn-sm btn-success-light btn-icon">
								<i class="fa fa-plus"></i>
							</a>
						</div>
					</div>
					<a href="#" class="flex-shrink-0">
						<img src="assets/images/product/product-6.png" class="avatar h-100 w-100" alt="" />
					</a>
				</div>  
		  </div>
		  <div class="modal-footer modal-footer-uniform">
			  <div class="d-flex align-items-center justify-content-between mb-10">
				<span class="fw-600 text-muted fs-16 me-2">Total</span>
				<span class="fw-600 text-end">$1248.00</span>
			  </div>
			  <div class="d-flex align-items-center justify-content-between mb-15">
				<span class="fw-600 text-muted fs-16 me-2">Sub total</span>
				<span class="fw-600 text-primary text-end">$4125.00</span>
			  </div>
			  <div class="text-end">
				<button type="button" class="btn btn-primary">Place Order</button>
			  </div>
		  </div>
		</div>
	  </div>
  </div>
  <!-- /quick_shop_toggle -->
  
</div>
<!-- ./wrapper -->
	
	<div class="modal fade evemt-view" id="evemt-view">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 1110px; width: 95%;">
            <div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myLargeModalLabel">Event Details</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
                <div class="row">
                    <div class="col-xl-8 pe-xl-0">
                        <div class="card text-white mb-0 b-0" style="margin-bottom: 0 !important;">
                            <img class="card-img" src="assets/images/preview/bg.jpg" alt="Card image">
                            <div class="card-img-overlay">
                                <div class="row justify-content-between">
                                    <div class="col-auto bg-dark rounded">
                                        <h3 class="mt-5">Event Program 2021</h3>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-danger">CREAT</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-4 ps-xl-0">
                        <div class="card no-shadow b-0" style="margin-bottom: 0 !important;">
                            <div class="test">
                                <div class="card-header d-block">
                                    <div class="media p-0">
                                        <img class="img-fluid w-50 ms-0" src="assets/images/avatar/1.jpg" alt="placeholder image">
                                        <div class="media-body">
                                            <h4 class="mt-0">By John Doe</h4>
                                            <p>5 min ago</p>
                                        </div>

                                        <div class="dropdown custom-dropdown">
                                            <div data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Option 1</a>
                                                <a class="dropdown-item" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                            </div>
                                        </div>

                                    </div>
                                    <p class="mt-10 ms-0">Sed egestas mauris sit amet orci dignissim, vel pulvinar nisi faucibus. Duis gravida
                                        sem eu magna ornare, quis elementum lacus accumsan. Vestibulum eu efficitur nisl,
                                        in fringilla sapien.
                                    </p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <h5 class="fw-500">Date</h5>
                                            <p class="mb-0 fs-14">June 16, 2021</p>
                                        </div>
                                        <div class="col-auto">
                                            <h5 class="fw-500">Location</h5>
                                            <p class="mb-0 fs-14">NYC</p>
                                        </div>
                                        <div class="col-auto">
                                            <h5 class="fw-500">Tickets</h5>
                                            <p class="mb-0 fs-14">Avb. 26/ 100</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-lighter bt-1 bb-1 p-15">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <h5 class="mb-0 me-10 fs-14 d-inline-block">Sponsor by</h5>
                                            <div class="d-inline-block">
                                                <a href="#">
                                                    <img class="img-fluid w-30" src="assets/images/avatar/3.jpg" alt="placeholder image">
                                                </a>
                                                <a href="#">
                                                    <img class="img-fluid w-30" src="assets/images/avatar/4.jpg" alt="placeholder image">
                                                </a>
                                                <a href="#">
                                                    <img class="img-fluid w-30" src="assets/images/avatar/5.jpg" alt="placeholder image">
                                                </a>
                                                <a href="#">
                                                    <img class="img-fluid w-30" src="assets/images/avatar/6.jpg" alt="placeholder image">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <p class="mb-0 text-danger fw-500">Free</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
		
	<!-- ./side demo panel -->
	<div class="sticky-toolbar">	    
	    <a href="https://themeforest.net/item/COA-bootstrap-admin-dashboard-template/33405709" data-bs-toggle="tooltip" data-bs-placement="left" title="Buy Now" class="waves-effect waves-light btn btn-success btn-flat mb-5 btn-sm" target="_blank">
			<span class="icon-Money"><span class="path1"></span><span class="path2"></span></span>
		</a>
	    <a href="https://themeforest.net/user/multipurposethemes/portfolio" data-bs-toggle="tooltip" data-bs-placement="left" title="Portfolio" class="waves-effect waves-light btn btn-danger btn-flat mb-5 btn-sm" target="_blank">
			<span class="icon-Image"></span>
		</a>
	    <a id="chat-popup" href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Live Chat" class="waves-effect waves-light btn btn-warning btn-flat btn-sm">
			<span class="icon-Group-chat"><span class="path1"></span><span class="path2"></span></span>
		</a>
	</div>
	<!-- Sidebar -->
		
	<div id="chat-box-body">
		<div id="chat-circle" class="waves-effect waves-circle btn btn-circle btn-sm btn-warning l-h-50">
            <div id="chat-overlay"></div>
            <span class="icon-Group-chat fs-18"><span class="path1"></span><span class="path2"></span></span>
		</div>

		<div class="chat-box">
            <div class="chat-box-header p-15 d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="waves-effect waves-circle btn btn-circle btn-primary-light h-40 w-40 rounded-circle l-h-45" type="button" data-bs-toggle="dropdown">
                      <span class="icon-Add-user fs-22"><span class="path1"></span><span class="path2"></span></span>
                  </button>
                  <div class="dropdown-menu min-w-200">
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Color me-15"></span>
                        New Group</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Clipboard me-15"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                        Contacts</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Group me-15"><span class="path1"></span><span class="path2"></span></span>
                        Groups</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Active-call me-15"><span class="path1"></span><span class="path2"></span></span>
                        Calls</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Settings1 me-15"><span class="path1"></span><span class="path2"></span></span>
                        Settings</a>
                    <div class="dropdown-divider"></div>
					<a class="dropdown-item fs-16" href="#">
                        <span class="icon-Question-circle me-15"><span class="path1"></span><span class="path2"></span></span>
                        Help</a>
					<a class="dropdown-item fs-16" href="#">
                        <span class="icon-Notifications me-15"><span class="path1"></span><span class="path2"></span></span> 
                        Privacy</a>
                  </div>
                </div>
                <div class="text-center flex-grow-1">
                    <div class="text-dark fs-18">Mayra Sibley</div>
                    <div>
                        <span class="badge badge-sm badge-dot badge-primary"></span>
                        <span class="text-muted fs-12">Active</span>
                    </div>
                </div>
                <div class="chat-box-toggle">
                    <button id="chat-box-toggle" class="waves-effect waves-circle btn btn-circle btn-danger-light h-40 w-40 rounded-circle l-h-45" type="button">
                      <span class="icon-Close fs-22"><span class="path1"></span><span class="path2"></span></span>
                    </button>                    
                </div>
            </div>
            <div class="chat-box-body">
                <div class="chat-box-overlay">   
                </div>
                <div class="chat-logs">
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="assets/images/avatar/2.jpg" class="avatar avatar-lg" alt="">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
                                <p class="text-muted fs-12 mb-0">2 Hours</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Hi there, I'm Jesse and you?
                        </div>
                    </div>
                    <div class="chat-msg self">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">You</a>
                                <p class="text-muted fs-12 mb-0">3 minutes</p>
                            </div>
                            <span class="msg-avatar">
                                <img src="assets/images/avatar/3.jpg" class="avatar avatar-lg" alt="">
                            </span>
                        </div>
                        <div class="cm-msg-text">
                           My name is Anne Clarc.         
                        </div>        
                    </div>
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="assets/images/avatar/2.jpg" class="avatar avatar-lg" alt="">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
                                <p class="text-muted fs-12 mb-0">40 seconds</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Nice to meet you Anne.<br>How can i help you?
                        </div>
                    </div>
                </div><!--chat-log -->
            </div>
            <div class="chat-input">      
                <form>
                    <input type="text" id="chat-input" placeholder="Send a message..."/>
                    <button type="submit" class="chat-submit" id="chat-submit">
                        <span class="icon-Send fs-22"></span>
                    </button>
                </form>      
            </div>
		</div>
	</div>
	
	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->
	<script src="assets/src/js/vendors.min.js"></script>
	<script src="assets/src/js/pages/chat-popup.js"></script>
    <script src="assets/assets/icons/feather-icons/feather.min.js"></script>
	
	<script src="assets/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	
	<!-- COA App -->
	<script src="assets/src/js/template.js"></script>
	<script src="assets/src/js/pages/dashboard.js"></script>
	
</body>

</html>
