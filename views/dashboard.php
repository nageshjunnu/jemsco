﻿
<?php include("header.php"); ?>
  
 <?php include("sidebar.php"); ?>
<?php
require_once '../models/SchoolModel.php';


$studentModel = new SchoolModel();
$totalStudents = $studentModel->getStudentsCount();

$totalschools = $studentModel->getSchoolsCount();

$TotalrecievedTayments = $studentModel->getTotalRecievedAmount();

$TotalPendingTayments = $studentModel->getTotalPendingAmount();

$examsCount = $studentModel->getExamsCount();



// print_r($totalStudents);
?>
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
									<?php foreach ($totalStudents as $totalStudent): ?>
									<h4 class="fw-600"><?php  echo $totalStudent['total'];  ?></h4>
									<!-- <p class="mb-0"><span class="text-success"><?php echo $totalStudent['total']/100; ?>%</span> Increase</p> -->
									<?php endforeach; ?>
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
									<h4 class="text-fade">Total Schools</h4>
									<?php foreach ($totalschools as $schools): ?>
									<h4 class="fw-600"><?php  echo $schools['total'];  ?></h4>
									<!-- <p class="mb-0"><span class="text-success"><?php echo $schools['total']/100; ?>%</span> Increase</p> -->
									<?php endforeach; ?>
								</div>
								<div>
									<img src="assets/images/svg-icon/color-svg/custom-25.svg" class="w-100" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php 
				// print_r($permissions);
					if($permissions["read_permission"] == 1){
				?>
				<div class="col-xl-3 col-md-6 col-12">
					<div class="box">
						<div class="box-body">
							<div class="d-flex justify-content-between">
								<div>
									<h4 class="text-fade">Fees Collection</h4>
									<?php foreach ($TotalrecievedTayments as $payment): ?>
									<h4 class="fw-600"><?php  echo $payment['total'];  ?> ₹</h4>
									<!-- <p class="mb-0"><span class="text-success"><?php echo $payment['total']/100; ?>%</span> Increase</p> -->
									<?php endforeach; ?>
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
									<?php foreach ($TotalPendingTayments as $pending): ?>
									<h4 class="fw-600"><?php  echo $pending['total'];  ?> ₹</h4>
									<!-- <p class="mb-0"><span class="text-success"><?php echo $pending['total']/100; ?>%</span> Increase</p> -->
									<?php endforeach; ?>
								</div>
								<div>
									<img src="assets/images/svg-icon/color-svg/custom-27.svg" class="w-100" alt="" />
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
									<h4 class="text-fade"><b> EXAMS opted </b></h4>
									<?php foreach ($examsCount as $exams): ?>
									<h4 class="fw-600"><?php  echo $exams['total'];  ?> </h4>
									<!-- <?php foreach ($totalStudents as $totalStudent): ?>										
										<p class="mb-0"><span class="text-success"><?php echo $exams['total']/$totalStudent['total']; ?>%</span> Increase</p>
									<?php endforeach; ?> -->
									
									<?php endforeach; ?>
								</div>
								<div>
									<img src="assets/images/svg-icon/color-svg/custom-29.svg" class="w-100" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				<!-- <div class="col-xl-8 col-12">
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
					<!-- <div class="box">
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
					</div> -->
				<!-- </div> -->
				<div class="col-xl-4 col-12">
					<!-- <div class="box">
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
					</div> -->
					<!-- <div class="box">
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
					</div> -->
					<!-- <div class="box">
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
					</div> -->
					<!-- <div class="box">
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
					</div> -->
				</div>
			</div>							
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
<?php include('footer.php'); ?>