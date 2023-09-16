
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
		<div class="d-flex align-items-center logo-box justify-content-start d-md-block d-none">	
			<!-- Logo -->
			<a href="dashboard.php" class="logo">
			  <!-- logo-->
			  <div class="logo-mini">
				  <span class="light-logo"><img src="https://jemsco.in/demo/images/header-logo.2x.png" style="width: 55px !important;" alt="logo"></span>
			  </div>
			  <div class="logo-lg">
				  <span class="light-logo fs-36 fw-700">JEM<span class="text-primary">SCO</span></span>
			  </div>
			</a>	
		</div> 
		<div class="user-profile my-15 px-20 py-10 b-1 rounded10 mx-15">
			<div class="d-flex align-items-center justify-content-between">			
				<div class="image d-flex align-items-center">
				    <img src="assets/images/avatar/avatar-13.png" class="rounded-0 me-10" alt="User Image">
					<div>
						<h4 class="mb-0 fw-600">Hi <?php echo $user['name']; ?></h4>
						<p class="mb-0"><?php echo $user['role']; ?></p>
					</div>
				</div>
				<div class="info">
					<a class="dropdown-toggle p-15 d-grid" data-bs-toggle="dropdown" href="#"></a>
					<div class="dropdown-menu dropdown-menu-end">
					  <a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>
					  <!-- <a class="dropdown-item" href="mailbox.html"><i class="ti-email"></i> Inbox</a>
					  <a class="dropdown-item" href="contact_app_chat.html"><i class="ti-link"></i> Conversation</a> -->
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="logout.php"><i class="ti-lock"></i> Logout</a>
					</div>
				</div>
			</div>
	    </div>
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 97%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">	
				<li class="header">Main Menu</li>
				<li>
				  <a href="dashboard.php">
					<i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
					<span>Dashboard</span>
				  </a>
				</li>
				<!--<li class="treeview">
				  <a href="#">
					<i class="icon-Address-card"></i>
					<span>Users</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="all-users.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Users List</a></li>
					 <li><a href="professors.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Professors Details</a></li>
				  </ul>
				</li>-->
				<!--<li class="treeview">
				  <a href="#">
					<i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
					<span>Students</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="students_list.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Students List</a></li>
					<li><a href="students.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Students Details</a></li>
				  </ul>
				</li>-->
				<li><a href="all-users.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Users List</a></li>
				<li><a href="students_list.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Students List</a></li>
				<li>
				  <a href="schools.php">
					<i class="icon-Ticket"></i>
					<span>Schools</span>
				  </a>
				</li>
				<li>
				  <a href="payment-list.php">
					<i class="icon-Ticket"></i>
					<span>Payment List</span>
				  </a>
				</li>
				<!-- <li>
				  <a href="contact_app_chat.html">
					<i class="icon-Chat2"></i>
					<span>Chat</span>
				  </a>
				</li>				   -->
				 	     
			  </ul>
			  
			  <div class="sidebar-widgets position-absolute bottom-0 end-0">
				  <div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
					<!-- <div class="text-center">
						<img src="assets/images/svg-icon/color-svg/custom-17.svg" class="sideimg p-5" alt="">
						<h4 class="title-bx text-primary">View Full Report</h4>
						<a href="#" class="py-10 fs-14 mb-0 text-primary">
							Best CRM App here <i class="mdi mdi-arrow-right"></i>
						</a>
					</div> -->
				  </div>
				<div class="copyright text-center m-25">
					<p><strong class="d-block">JEMSCO Dashboard</strong> © <script>document.write(new Date().getFullYear())</script> All Rights Reserved</p>
				</div>
			  </div>
		  </div>
		</div>
    </section>
  </aside>