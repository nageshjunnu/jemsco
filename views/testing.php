<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from crm-admin-dashboard-template.multipurposethemes.com/university/vertical/main/tables_data.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Sep 2023 14:46:21 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">

    <title>CRMi - Dashboard  Data Tables</title>
  
	<!-- Vendors Style-->
    <link rel="stylesheet" href="assets/src/css/vendors_css.css">
	  
      <!-- Style-->  
      <link rel="stylesheet" href="assets/src/css/style.css">
      <link rel="stylesheet" href="assets/src/css/skin_color.css">

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">
	<div id="loader"></div>

  <header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start d-md-none d-block">	
		<!-- Logo -->
		<a href="index.html" class="logo">
		  <!-- logo-->
		  <div class="logo-mini w-30">
			  <span class="light-logo"><img src="assets/images/logo-letter.png" alt="logo"></span>
			  <span class="dark-logo"><img src="assets/images/logo-letter-white.png" alt="logo"></span>
		  </div>
		  <div class="logo-lg">
			  <span class="light-logo"><img src="assets/images/logo-dark-text.png" alt="logo"></span>
			  <span class="dark-logo"><img src="assets/images/logo-light-text.png" alt="logo"></span>
		  </div>
		</a>	
	</div>   
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
					<i class="icon-Menu"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>
			<li class="btn-group d-lg-inline-flex d-none">
				<div class="app-menu">
					<div class="search-bx mx-5">
						<form>
							<div class="input-group">
							  <input type="search" class="form-control" placeholder="Search">
							  <div class="input-group-append">
								<button class="btn" type="submit" id="button-addon3"><i class="icon-Search"><span class="path1"></span><span class="path2"></span></i></button>
							  </div>
							</div>
						</form>
					</div>
				</div>
			</li>
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
			<li class="dropdown notifications-menu btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" data-bs-toggle="dropdown" title="Notifications">
					<i class="icon-Notifications"><span class="path1"></span><span class="path2"></span></i>
					<div class="pulse-wave"></div>
			    </a>
				<ul class="dropdown-menu animated bounceIn">
				  <li class="header">
					<div class="p-20">
						<div class="flexbox">
							<div>
								<h4 class="mb-0 mt-0">Notifications</h4>
							</div>
							<div>
								<a href="#" class="text-danger">Clear All</a>
							</div>
						</div>
					</div>
				  </li>
				  <li>
					<!-- inner menu: contains the actual data -->
					<ul class="menu sm-scrol">
					  <li>
						<a href="#">
						  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
						</a>
					  </li>
					</ul>
				  </li>
				  <li class="footer">
					  <a href="#">View all</a>
				  </li>
				</ul>
			</li>
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" data-bs-toggle="modal" data-bs-target="#quick_actions_toggle">
					<i class="icon-Layout-arrange"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>
			<li class="btn-group nav-item d-xl-inline-flex d-none">
				<a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" data-bs-toggle="modal" data-bs-target="#quick_panel_toggle">
					<i class="icon-Notification"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>
			<li class="btn-group nav-item d-xl-inline-flex d-none">
				<a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" data-bs-toggle="modal" data-bs-target="#quick_shop_toggle">
					<i class="icon-Cart1"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>
			<li class="btn-group nav-item d-xl-inline-flex d-none">
				<a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" id="live-chat">
					<i class="icon-Chat"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>
			
			<li class="btn-group d-xl-inline-flex d-none">
			    <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon dropdown-toggle" data-bs-toggle="dropdown">
					<img class="rounded" src="assets/images/svg-icon/usa.svg" alt="">
				</a>
			    <div class="dropdown-menu">
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="assets/images/svg-icon/usa.svg" alt=""> English</a>
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="assets/images/svg-icon/spain.svg" alt=""> Spanish</a>
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="assets/images/svg-icon/ger.svg" alt=""> German</a>
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="assets/images/svg-icon/jap.svg" alt=""> Japanese</a>
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="assets/images/svg-icon/fra.svg" alt=""> French</a>
			    </div>
			</li>
			
			<li class="btn-group nav-item d-xl-inline-flex d-none">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="Full Screen">
					<i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>
			
			<li class="btn-group nav-item">
				<a href="reports.html" class="waves-effect waves-light nav-link bg-primary btn-primary w-auto fs-14" title="Full Screen">
					Reports
			    </a>
			</li>
			
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
		<div class="d-flex align-items-center logo-box justify-content-start d-md-block d-none">	
			<!-- Logo -->
			<a href="index.html" class="logo">
			  <!-- logo-->
			  <div class="logo-mini">
				  <span class="light-logo"><img src="assets/images/logo-letter.png" alt="logo"></span>
			  </div>
			  <div class="logo-lg">
				  <span class="light-logo fs-36 fw-700">CRM<span class="text-primary">i</span></span>
			  </div>
			</a>	
		</div> 
		<div class="user-profile my-15 px-20 py-10 b-1 rounded10 mx-15">
			<div class="d-flex align-items-center justify-content-between">			
				<div class="image d-flex align-items-center">
				    <img src="assets/images/avatar/avatar-13.png" class="rounded-0 me-10" alt="User Image">
					<div>
						<h4 class="mb-0 fw-600">Nil Yeager</h4>
						<p class="mb-0">Super Admin</p>
					</div>
				</div>
				<div class="info">
					<a class="dropdown-toggle p-15 d-grid" data-bs-toggle="dropdown" href="#"></a>
					<div class="dropdown-menu dropdown-menu-end">
					  <a class="dropdown-item" href="extra_profile.html"><i class="ti-user"></i> Profile</a>
					  <a class="dropdown-item" href="mailbox.html"><i class="ti-email"></i> Inbox</a>
					  <a class="dropdown-item" href="contact_app_chat.html"><i class="ti-link"></i> Conversation</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="auth_login.html"><i class="ti-lock"></i> Logout</a>
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
				  <a href="index.html">
					<i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
					<span>Dashboard</span>
				  </a>
				</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Address-card"></i>
					<span>Professors</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="professors_list.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Professors List</a></li>
					<li><a href="professors.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Professors Details</a></li>
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
					<span>Students</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="students_list.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Students List</a></li>
					<li><a href="students.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Students Details</a></li>
				  </ul>
				</li>
				<li>
				  <a href="departments.html">
					<i class="icon-Ticket"></i>
					<span>Departments</span>
				  </a>
				</li>
				<li>
				  <a href="contact_app_chat.html">
					<i class="icon-Chat2"></i>
					<span>Chat</span>
				  </a>
				</li>				  
				<li class="header">Components</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Library"><span class="path1"></span><span class="path2"></span></i>
					<span>Features</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">											
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="box_cards.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>User Card</a></li>
							<li><a href="box_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advanced Card</a></li>
							<li><a href="box_basic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Card</a></li>
							<li><a href="box_color.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Color</a></li>
							<li><a href="box_group.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Group</a></li>
						</ul>
					</li>												
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>BS UI
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="ui_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Grid System</a></li>
							<li><a href="ui_badges.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Badges</a></li>
							<li><a href="ui_border_utilities.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Border</a></li>
							<li><a href="ui_buttons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Buttons</a></li>	
							<li><a href="ui_color_utilities.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Color</a></li>
							<li><a href="ui_dropdown.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropdown</a></li>
							<li><a href="ui_dropdown_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropdown Grid</a></li>
							<li><a href="ui_progress_bars.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Progress Bars</a></li>
						</ul>
					</li>										
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Icons
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="icons_fontawesome.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Font Awesome</a></li>
							<li><a href="icons_glyphicons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Glyphicons</a></li>
							<li><a href="icons_material.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Material Icons</a></li>	
							<li><a href="icons_themify.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Themify Icons</a></li>
							<li><a href="icons_simpleline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple Line Icons</a></li>
							<li><a href="icons_cryptocoins.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Cryptocoins Icons</a></li>
							<li><a href="icons_flag.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flag Icons</a></li>
							<li><a href="icons_weather.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weather Icons</a></li>
						</ul>
					</li>									
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Custom UI
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="ui_ribbons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ribbons</a></li>
							<li><a href="ui_sliders.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sliders</a></li>
							<li><a href="ui_typography.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Typography</a></li>
							<li><a href="ui_tab.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tabs</a></li>
							<li><a href="ui_timeline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Timeline</a></li>
							<li><a href="ui_timeline_horizontal.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Horizontal Timeline</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Components
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="component_bootstrap_switch.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bootstrap Switch</a></li>
							<li><a href="component_date_paginator.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Date Paginator</a></li>
							<li><a href="component_media_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advanced Medias</a></li>
							<li><a href="component_rangeslider.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Range Slider</a></li>
							<li><a href="component_rating.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ratings</a></li>
							<li><a href="component_animations.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Animations</a></li>
							<li><a href="extension_fullscreen.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Fullscreen</a></li>
							<li><a href="extension_pace.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pace</a></li>
							<li><a href="component_nestable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Nestable</a></li>
							<li><a href="component_portlet_draggable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Draggable Portlets</a></li>	
						</ul>
					</li>  
				  </ul>
				</li>			
				<li class="treeview">
				  <a href="#">
					<i class="icon-Box2"><span class="path1"></span><span class="path2"></span></i>
					<span>Forms, Tables & Charts</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>					
				  <ul class="treeview-menu">					
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Forms
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="forms_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Elements</a></li>
							<li><a href="forms_general.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Layout</a></li>
							<li><a href="forms_wizard.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Wizard</a></li>	
							<li><a href="forms_validation.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Validation</a></li>
							<li><a href="forms_mask.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Formatter</a></li>
							<li><a href="forms_xeditable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Xeditable Editor</a></li>
							<li><a href="forms_dropzone.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropzone</a></li>
							<li><a href="forms_code_editor.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Code Editor</a></li>
							<li><a href="forms_editors.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editor</a></li>
							<li><a href="forms_editor_markdown.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Markdown</a></li>
						</ul>
					</li> 		
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tables
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="tables_simple.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple tables</a></li>
							<li><a href="tables_data.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data tables</a></li>
							<li><a href="tables_editable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editable Tables</a></li>
							<li><a href="tables_color.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Table Color</a></li>
						</ul>
					</li> 
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Charts
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="charts_chartjs.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ChartJS</a></li>
							<li><a href="charts_flot.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flot</a></li>
							<li><a href="charts_inline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Inline charts</a></li>
							<li><a href="charts_morris.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Morris</a></li>
							<li><a href="charts_peity.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Peity</a></li>
							<li><a href="charts_chartist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chartist</a></li>
							<li><a href="charts_c3_axis.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Axis Chart</a></li>
							<li><a href="charts_c3_bar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar Chart</a></li>
							<li><a href="charts_c3_data.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data Chart</a></li>
							<li><a href="charts_c3_line.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Line Chart</a></li>
							<li><a href="charts_echarts_basic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Charts</a></li>
							<li><a href="charts_echarts_bar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar Chart</a></li>
							<li><a href="charts_echarts_pie_doughnut.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pie & Doughnut Chart</a></li>
						</ul>
					</li>
				  </ul>
				</li>				 
				<li class="treeview">
				  <a href="#">
					<i class="icon-Globe"><span class="path1"></span><span class="path2"></span></i>
					<span>Apps & Widgets</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">					
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Apps
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="extra_calendar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Calendar</a></li>
							<li><a href="contact_app.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Contact List</a></li>
							<li><a href="extra_taskboard.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Todo</a></li>
							<li><a href="mailbox.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Mailbox</a></li>
							<li><a href="extra_app_ticket.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Support Ticket</a></li>
						</ul>
					</li>										
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Widgets
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li class="treeview">
								<a href="#">
									<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Custom
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="widgets_blog.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Blog</a></li>
									<li><a href="widgets_chart.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chart</a></li>
									<li><a href="widgets_list.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>List</a></li>
									<li><a href="widgets_social.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Social</a></li>
									<li><a href="widgets_statistic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Statistic</a></li>
									<li><a href="widgets_weather.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weather</a></li>
									<li><a href="widgets.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Widgets</a></li>
									<li><a href="email_index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Emails</a></li>	
								</ul>
							</li>											  	
							<li class="treeview">
								<a href="#">
									<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maps
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="map_google.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Google Map</a></li>
									<li><a href="map_vector.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Vector Map</a></li>
								</ul>
							</li>					  	
							<li class="treeview">
								<a href="#">
									<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Modals
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="component_modals.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Modals</a></li>
									<li><a href="component_sweatalert.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sweet Alert</a></li>
									<li><a href="component_notification.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Toastr</a></li>
								</ul>
							</li>
						</ul>
					</li>					
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ecommerce
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="ecommerce_products.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products</a></li>
							<li><a href="ecommerce_cart.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Cart</a></li>
							<li><a href="ecommerce_products_edit.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Edit</a></li>
							<li><a href="ecommerce_details.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Details</a></li>
							<li><a href="ecommerce_orders.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Orders</a></li>
							<li><a href="ecommerce_checkout.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Checkout</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sample Pages
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="invoice.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice</a></li>
							<li><a href="invoicelist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice List</a></li>	
							<li><a href="extra_profile.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>User Profile</a></li>
							<li><a href="contact_userlist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Userlist</a></li>	
							<li><a href="sample_faq.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>FAQs</a></li>
							<li><a href="sample_blank.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Blank</a></li>
							<li><a href="sample_coming_soon.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Coming Soon</a></li>
							<li><a href="sample_custom_scroll.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Custom Scrolls</a></li>
							<li><a href="sample_gallery.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Gallery</a></li>
							<li><a href="sample_lightbox.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lightbox Popup</a></li>
							<li><a href="sample_pricing.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pricing</a></li>
						</ul>
					</li>
				  </ul>
				</li>	 
				<li class="treeview">
				  <a href="#">
					<i class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></i>
					<span>Authentication</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="auth_login.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Login</a></li>
					<li><a href="auth_register.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Register</a></li>
					<li><a href="auth_lockscreen.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lockscreen</a></li>
					<li><a href="auth_user_pass.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Recover password</a></li>	
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Warning-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
					<span>Miscellaneous</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="error_404.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 404</a></li>
					<li><a href="error_500.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 500</a></li>
					<li><a href="error_maintenance.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maintenance</a></li>	
				  </ul>
				</li>	 	     
			  </ul>
			  
			  <div class="sidebar-widgets">
				  <div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
					<div class="text-center">
						<img src="assets/images/svg-icon/color-svg/custom-17.svg" class="sideimg p-5" alt="">
						<h4 class="title-bx text-primary">View Full Report</h4>
						<a href="#" class="py-10 fs-14 mb-0 text-primary">
							Best CRM App here <i class="mdi mdi-arrow-right"></i>
						</a>
					</div>
				  </div>
				<div class="copyright text-center m-25">
					<p><strong class="d-block">CRMi Dashboard</strong> © <script>document.write(new Date().getFullYear())</script> All Rights Reserved</p>
				</div>
			  </div>
		  </div>
		</div>
    </section>
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Data Tables</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Tables</li>
								<li class="breadcrumb-item active" aria-current="page">Data Tables</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
			<div class="col-12">
				<div class="box">
					<div class="box-header">						
						<h4 class="box-title">Complex headers (rowspan and colspan)</h4>
					</div>
					<div class="box-body">
						<div class="table-responsive">
							<table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
								<thead>
									<tr>
										<th rowspan="2">Name</th>
										<th colspan="2">HR Information</th>
										<th colspan="3">Contact</th>
									</tr>
									<tr>
										<th>Position</th>
										<th>Salary</th>
										<th>Office</th>
										<th>Extn.</th>
										<th>E-mail</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Tiger Nixon</td>
										<td>System Architect</td>
										<td>Edinburgh</td>
										<td>61</td>
										<td>2011/04/25</td>
										<td>$320,800</td>
									</tr>
									<tr>
										<td>Garrett Winters</td>
										<td>Accountant</td>
										<td>Tokyo</td>
										<td>63</td>
										<td>2011/07/25</td>
										<td>$170,750</td>
									</tr>
									<tr>
										<td>Ashton Cox</td>
										<td>Junior Technical Author</td>
										<td>San Francisco</td>
										<td>66</td>
										<td>2009/01/12</td>
										<td>$86,000</td>
									</tr>
									<tr>
										<td>Cedric Kelly</td>
										<td>Senior Javascript Developer</td>
										<td>Edinburgh</td>
										<td>22</td>
										<td>2012/03/29</td>
										<td>$433,060</td>
									</tr>
									<tr>
										<td>Airi Satou</td>
										<td>Accountant</td>
										<td>Tokyo</td>
										<td>33</td>
										<td>2008/11/28</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td>Brielle Williamson</td>
										<td>Integration Specialist</td>
										<td>New York</td>
										<td>61</td>
										<td>2012/12/02</td>
										<td>$372,000</td>
									</tr>
									<tr>
										<td>Herrod Chandler</td>
										<td>Sales Assistant</td>
										<td>San Francisco</td>
										<td>59</td>
										<td>2012/08/06</td>
										<td>$137,500</td>
									</tr>
									<tr>
										<td>Rhona Davidson</td>
										<td>Integration Specialist</td>
										<td>Tokyo</td>
										<td>55</td>
										<td>2010/10/14</td>
										<td>$327,900</td>
									</tr>
									<tr>
										<td>Colleen Hurst</td>
										<td>Javascript Developer</td>
										<td>San Francisco</td>
										<td>39</td>
										<td>2009/09/15</td>
										<td>$205,500</td>
									</tr>
									<tr>
										<td>Sonya Frost</td>
										<td>Software Engineer</td>
										<td>Edinburgh</td>
										<td>23</td>
										<td>2008/12/13</td>
										<td>$103,600</td>
									</tr>
									<tr>
										<td>Jena Gaines</td>
										<td>Office Manager</td>
										<td>London</td>
										<td>30</td>
										<td>2008/12/19</td>
										<td>$90,560</td>
									</tr>
									<tr>
										<td>Quinn Flynn</td>
										<td>Support Lead</td>
										<td>Edinburgh</td>
										<td>22</td>
										<td>2013/03/03</td>
										<td>$342,000</td>
									</tr>
									<tr>
										<td>Charde Marshall</td>
										<td>Regional Director</td>
										<td>San Francisco</td>
										<td>36</td>
										<td>2008/10/16</td>
										<td>$470,600</td>
									</tr>
									<tr>
										<td>Haley Kennedy</td>
										<td>Senior Marketing Designer</td>
										<td>London</td>
										<td>43</td>
										<td>2012/12/18</td>
										<td>$313,500</td>
									</tr>
									<tr>
										<td>Tatyana Fitzpatrick</td>
										<td>Regional Director</td>
										<td>London</td>
										<td>19</td>
										<td>2010/03/17</td>
										<td>$385,750</td>
									</tr>
									<tr>
										<td>Michael Silva</td>
										<td>Marketing Designer</td>
										<td>London</td>
										<td>66</td>
										<td>2012/11/27</td>
										<td>$198,500</td>
									</tr>
									<tr>
										<td>Paul Byrd</td>
										<td>Chief Financial Officer (CFO)</td>
										<td>New York</td>
										<td>64</td>
										<td>2010/06/09</td>
										<td>$725,000</td>
									</tr>
									<tr>
										<td>Gloria Little</td>
										<td>Systems Administrator</td>
										<td>New York</td>
										<td>59</td>
										<td>2009/04/10</td>
										<td>$237,500</td>
									</tr>
									<tr>
										<td>Bradley Greer</td>
										<td>Software Engineer</td>
										<td>London</td>
										<td>41</td>
										<td>2012/10/13</td>
										<td>$132,000</td>
									</tr>
									<tr>
										<td>Dai Rios</td>
										<td>Personnel Lead</td>
										<td>Edinburgh</td>
										<td>35</td>
										<td>2012/09/26</td>
										<td>$217,500</td>
									</tr>
									<tr>
										<td>Jenette Caldwell</td>
										<td>Development Lead</td>
										<td>New York</td>
										<td>30</td>
										<td>2011/09/03</td>
										<td>$345,000</td>
									</tr>
									<tr>
										<td>Yuri Berry</td>
										<td>Chief Marketing Officer (CMO)</td>
										<td>New York</td>
										<td>40</td>
										<td>2009/06/25</td>
										<td>$675,000</td>
									</tr>
									<tr>
										<td>Caesar Vance</td>
										<td>Pre-Sales Support</td>
										<td>New York</td>
										<td>21</td>
										<td>2011/12/12</td>
										<td>$106,450</td>
									</tr>
									<tr>
										<td>Doris Wilder</td>
										<td>Sales Assistant</td>
										<td>Sidney</td>
										<td>23</td>
										<td>2010/09/20</td>
										<td>$85,600</td>
									</tr>
									<tr>
										<td>Angelica Ramos</td>
										<td>Chief Executive Officer (CEO)</td>
										<td>London</td>
										<td>47</td>
										<td>2009/10/09</td>
										<td>$1,200,000</td>
									</tr>
									<tr>
										<td>Gavin Joyce</td>
										<td>Developer</td>
										<td>Edinburgh</td>
										<td>42</td>
										<td>2010/12/22</td>
										<td>$92,575</td>
									</tr>
									<tr>
										<td>Jennifer Chang</td>
										<td>Regional Director</td>
										<td>Singapore</td>
										<td>28</td>
										<td>2010/11/14</td>
										<td>$357,650</td>
									</tr>
									<tr>
										<td>Brenden Wagner</td>
										<td>Software Engineer</td>
										<td>San Francisco</td>
										<td>28</td>
										<td>2011/06/07</td>
										<td>$206,850</td>
									</tr>
									<tr>
										<td>Fiona Green</td>
										<td>Chief Operating Officer (COO)</td>
										<td>San Francisco</td>
										<td>48</td>
										<td>2010/03/11</td>
										<td>$850,000</td>
									</tr>
									<tr>
										<td>Shou Itou</td>
										<td>Regional Marketing</td>
										<td>Tokyo</td>
										<td>20</td>
										<td>2011/08/14</td>
										<td>$163,000</td>
									</tr>
									<tr>
										<td>Michelle House</td>
										<td>Integration Specialist</td>
										<td>Sidney</td>
										<td>37</td>
										<td>2011/06/02</td>
										<td>$95,400</td>
									</tr>
									<tr>
										<td>Suki Burks</td>
										<td>Developer</td>
										<td>London</td>
										<td>53</td>
										<td>2009/10/22</td>
										<td>$114,500</td>
									</tr>
									<tr>
										<td>Prescott Bartlett</td>
										<td>Technical Author</td>
										<td>London</td>
										<td>27</td>
										<td>2011/05/07</td>
										<td>$145,000</td>
									</tr>
									<tr>
										<td>Gavin Cortez</td>
										<td>Team Leader</td>
										<td>San Francisco</td>
										<td>22</td>
										<td>2008/10/26</td>
										<td>$235,500</td>
									</tr>
									<tr>
										<td>Martena Mccray</td>
										<td>Post-Sales support</td>
										<td>Edinburgh</td>
										<td>46</td>
										<td>2011/03/09</td>
										<td>$324,050</td>
									</tr>
									<tr>
										<td>Unity Butler</td>
										<td>Marketing Designer</td>
										<td>San Francisco</td>
										<td>47</td>
										<td>2009/12/09</td>
										<td>$85,675</td>
									</tr>
									<tr>
										<td>Howard Hatfield</td>
										<td>Office Manager</td>
										<td>San Francisco</td>
										<td>51</td>
										<td>2008/12/16</td>
										<td>$164,500</td>
									</tr>
									<tr>
										<td>Hope Fuentes</td>
										<td>Secretary</td>
										<td>San Francisco</td>
										<td>41</td>
										<td>2010/02/12</td>
										<td>$109,850</td>
									</tr>
									<tr>
										<td>Vivian Harrell</td>
										<td>Financial Controller</td>
										<td>San Francisco</td>
										<td>62</td>
										<td>2009/02/14</td>
										<td>$452,500</td>
									</tr>
									<tr>
										<td>Timothy Mooney</td>
										<td>Office Manager</td>
										<td>London</td>
										<td>37</td>
										<td>2008/12/11</td>
										<td>$136,200</td>
									</tr>
									<tr>
										<td>Jackson Bradshaw</td>
										<td>Director</td>
										<td>New York</td>
										<td>65</td>
										<td>2008/09/26</td>
										<td>$645,750</td>
									</tr>
									<tr>
										<td>Olivia Liang</td>
										<td>Support Engineer</td>
										<td>Singapore</td>
										<td>64</td>
										<td>2011/02/03</td>
										<td>$234,500</td>
									</tr>
									<tr>
										<td>Bruno Nash</td>
										<td>Software Engineer</td>
										<td>London</td>
										<td>38</td>
										<td>2011/05/03</td>
										<td>$163,500</td>
									</tr>
									<tr>
										<td>Sakura Yamamoto</td>
										<td>Support Engineer</td>
										<td>Tokyo</td>
										<td>37</td>
										<td>2009/08/19</td>
										<td>$139,575</td>
									</tr>
									<tr>
										<td>Thor Walton</td>
										<td>Developer</td>
										<td>New York</td>
										<td>61</td>
										<td>2013/08/11</td>
										<td>$98,540</td>
									</tr>
									<tr>
										<td>Finn Camacho</td>
										<td>Support Engineer</td>
										<td>San Francisco</td>
										<td>47</td>
										<td>2009/07/07</td>
										<td>$87,500</td>
									</tr>
									<tr>
										<td>Serge Baldwin</td>
										<td>Data Coordinator</td>
										<td>Singapore</td>
										<td>64</td>
										<td>2012/04/09</td>
										<td>$138,575</td>
									</tr>
									<tr>
										<td>Zenaida Frank</td>
										<td>Software Engineer</td>
										<td>New York</td>
										<td>63</td>
										<td>2010/01/04</td>
										<td>$125,250</td>
									</tr>
									<tr>
										<td>Zorita Serrano</td>
										<td>Software Engineer</td>
										<td>San Francisco</td>
										<td>56</td>
										<td>2012/06/01</td>
										<td>$115,000</td>
									</tr>
									<tr>
										<td>Jennifer Acosta</td>
										<td>Junior Javascript Developer</td>
										<td>Edinburgh</td>
										<td>43</td>
										<td>2013/02/01</td>
										<td>$75,650</td>
									</tr>
									<tr>
										<td>Cara Stevens</td>
										<td>Sales Assistant</td>
										<td>New York</td>
										<td>46</td>
										<td>2011/12/06</td>
										<td>$145,600</td>
									</tr>
									<tr>
										<td>Hermione Butler</td>
										<td>Regional Director</td>
										<td>London</td>
										<td>47</td>
										<td>2011/03/21</td>
										<td>$356,250</td>
									</tr>
									<tr>
										<td>Lael Greer</td>
										<td>Systems Administrator</td>
										<td>London</td>
										<td>21</td>
										<td>2009/02/27</td>
										<td>$103,500</td>
									</tr>
									<tr>
										<td>Jonas Alexander</td>
										<td>Developer</td>
										<td>San Francisco</td>
										<td>30</td>
										<td>2010/07/14</td>
										<td>$86,500</td>
									</tr>
									<tr>
										<td>Shad Decker</td>
										<td>Regional Director</td>
										<td>Edinburgh</td>
										<td>51</td>
										<td>2008/11/13</td>
										<td>$183,000</td>
									</tr>
									<tr>
										<td>Michael Bruce</td>
										<td>Javascript Developer</td>
										<td>Singapore</td>
										<td>29</td>
										<td>2011/06/27</td>
										<td>$183,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th>Name</th>
										<th>Position</th>
										<th>Salary</th>
										<th>Office</th>
										<th>Extn.</th>
										<th>E-mail</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Individual column searching</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example5" class="table table-bordered table-striped" style="width:100%">
						<thead>
							<tr>
								<th>Name</th>
								<th>Position</th>
								<th>Office</th>
								<th>Age</th>
								<th>Start date</th>
								<th>Salary</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Tiger Nixon</td>
								<td>System Architect</td>
								<td>Edinburgh</td>
								<td>61</td>
								<td>2011/04/25</td>
								<td>$320,800</td>
							</tr>
							<tr>
								<td>Garrett Winters</td>
								<td>Accountant</td>
								<td>Tokyo</td>
								<td>63</td>
								<td>2011/07/25</td>
								<td>$170,750</td>
							</tr>
							<tr>
								<td>Ashton Cox</td>
								<td>Junior Technical Author</td>
								<td>San Francisco</td>
								<td>66</td>
								<td>2009/01/12</td>
								<td>$86,000</td>
							</tr>
							<tr>
								<td>Cedric Kelly</td>
								<td>Senior Javascript Developer</td>
								<td>Edinburgh</td>
								<td>22</td>
								<td>2012/03/29</td>
								<td>$433,060</td>
							</tr>
							<tr>
								<td>Airi Satou</td>
								<td>Accountant</td>
								<td>Tokyo</td>
								<td>33</td>
								<td>2008/11/28</td>
								<td>$162,700</td>
							</tr>
							<tr>
								<td>Brielle Williamson</td>
								<td>Integration Specialist</td>
								<td>New York</td>
								<td>61</td>
								<td>2012/12/02</td>
								<td>$372,000</td>
							</tr>
							<tr>
								<td>Herrod Chandler</td>
								<td>Sales Assistant</td>
								<td>San Francisco</td>
								<td>59</td>
								<td>2012/08/06</td>
								<td>$137,500</td>
							</tr>
							<tr>
								<td>Rhona Davidson</td>
								<td>Integration Specialist</td>
								<td>Tokyo</td>
								<td>55</td>
								<td>2010/10/14</td>
								<td>$327,900</td>
							</tr>
							<tr>
								<td>Colleen Hurst</td>
								<td>Javascript Developer</td>
								<td>San Francisco</td>
								<td>39</td>
								<td>2009/09/15</td>
								<td>$205,500</td>
							</tr>
							<tr>
								<td>Sonya Frost</td>
								<td>Software Engineer</td>
								<td>Edinburgh</td>
								<td>23</td>
								<td>2008/12/13</td>
								<td>$103,600</td>
							</tr>
							<tr>
								<td>Jena Gaines</td>
								<td>Office Manager</td>
								<td>London</td>
								<td>30</td>
								<td>2008/12/19</td>
								<td>$90,560</td>
							</tr>
							<tr>
								<td>Quinn Flynn</td>
								<td>Support Lead</td>
								<td>Edinburgh</td>
								<td>22</td>
								<td>2013/03/03</td>
								<td>$342,000</td>
							</tr>
							<tr>
								<td>Charde Marshall</td>
								<td>Regional Director</td>
								<td>San Francisco</td>
								<td>36</td>
								<td>2008/10/16</td>
								<td>$470,600</td>
							</tr>
							<tr>
								<td>Haley Kennedy</td>
								<td>Senior Marketing Designer</td>
								<td>London</td>
								<td>43</td>
								<td>2012/12/18</td>
								<td>$313,500</td>
							</tr>
							<tr>
								<td>Tatyana Fitzpatrick</td>
								<td>Regional Director</td>
								<td>London</td>
								<td>19</td>
								<td>2010/03/17</td>
								<td>$385,750</td>
							</tr>
							<tr>
								<td>Michael Silva</td>
								<td>Marketing Designer</td>
								<td>London</td>
								<td>66</td>
								<td>2012/11/27</td>
								<td>$198,500</td>
							</tr>
							<tr>
								<td>Paul Byrd</td>
								<td>Chief Financial Officer (CFO)</td>
								<td>New York</td>
								<td>64</td>
								<td>2010/06/09</td>
								<td>$725,000</td>
							</tr>
							<tr>
								<td>Gloria Little</td>
								<td>Systems Administrator</td>
								<td>New York</td>
								<td>59</td>
								<td>2009/04/10</td>
								<td>$237,500</td>
							</tr>
							<tr>
								<td>Bradley Greer</td>
								<td>Software Engineer</td>
								<td>London</td>
								<td>41</td>
								<td>2012/10/13</td>
								<td>$132,000</td>
							</tr>
							<tr>
								<td>Dai Rios</td>
								<td>Personnel Lead</td>
								<td>Edinburgh</td>
								<td>35</td>
								<td>2012/09/26</td>
								<td>$217,500</td>
							</tr>
							<tr>
								<td>Jenette Caldwell</td>
								<td>Development Lead</td>
								<td>New York</td>
								<td>30</td>
								<td>2011/09/03</td>
								<td>$345,000</td>
							</tr>
							<tr>
								<td>Yuri Berry</td>
								<td>Chief Marketing Officer (CMO)</td>
								<td>New York</td>
								<td>40</td>
								<td>2009/06/25</td>
								<td>$675,000</td>
							</tr>
							<tr>
								<td>Caesar Vance</td>
								<td>Pre-Sales Support</td>
								<td>New York</td>
								<td>21</td>
								<td>2011/12/12</td>
								<td>$106,450</td>
							</tr>
							<tr>
								<td>Doris Wilder</td>
								<td>Sales Assistant</td>
								<td>Sidney</td>
								<td>23</td>
								<td>2010/09/20</td>
								<td>$85,600</td>
							</tr>
							<tr>
								<td>Angelica Ramos</td>
								<td>Chief Executive Officer (CEO)</td>
								<td>London</td>
								<td>47</td>
								<td>2009/10/09</td>
								<td>$1,200,000</td>
							</tr>
							<tr>
								<td>Gavin Joyce</td>
								<td>Developer</td>
								<td>Edinburgh</td>
								<td>42</td>
								<td>2010/12/22</td>
								<td>$92,575</td>
							</tr>
							<tr>
								<td>Jennifer Chang</td>
								<td>Regional Director</td>
								<td>Singapore</td>
								<td>28</td>
								<td>2010/11/14</td>
								<td>$357,650</td>
							</tr>
							<tr>
								<td>Brenden Wagner</td>
								<td>Software Engineer</td>
								<td>San Francisco</td>
								<td>28</td>
								<td>2011/06/07</td>
								<td>$206,850</td>
							</tr>
							<tr>
								<td>Fiona Green</td>
								<td>Chief Operating Officer (COO)</td>
								<td>San Francisco</td>
								<td>48</td>
								<td>2010/03/11</td>
								<td>$850,000</td>
							</tr>
							<tr>
								<td>Shou Itou</td>
								<td>Regional Marketing</td>
								<td>Tokyo</td>
								<td>20</td>
								<td>2011/08/14</td>
								<td>$163,000</td>
							</tr>
							<tr>
								<td>Michelle House</td>
								<td>Integration Specialist</td>
								<td>Sidney</td>
								<td>37</td>
								<td>2011/06/02</td>
								<td>$95,400</td>
							</tr>
							<tr>
								<td>Suki Burks</td>
								<td>Developer</td>
								<td>London</td>
								<td>53</td>
								<td>2009/10/22</td>
								<td>$114,500</td>
							</tr>
							<tr>
								<td>Prescott Bartlett</td>
								<td>Technical Author</td>
								<td>London</td>
								<td>27</td>
								<td>2011/05/07</td>
								<td>$145,000</td>
							</tr>
							<tr>
								<td>Gavin Cortez</td>
								<td>Team Leader</td>
								<td>San Francisco</td>
								<td>22</td>
								<td>2008/10/26</td>
								<td>$235,500</td>
							</tr>
							<tr>
								<td>Martena Mccray</td>
								<td>Post-Sales support</td>
								<td>Edinburgh</td>
								<td>46</td>
								<td>2011/03/09</td>
								<td>$324,050</td>
							</tr>
							<tr>
								<td>Unity Butler</td>
								<td>Marketing Designer</td>
								<td>San Francisco</td>
								<td>47</td>
								<td>2009/12/09</td>
								<td>$85,675</td>
							</tr>
							<tr>
								<td>Howard Hatfield</td>
								<td>Office Manager</td>
								<td>San Francisco</td>
								<td>51</td>
								<td>2008/12/16</td>
								<td>$164,500</td>
							</tr>
							<tr>
								<td>Hope Fuentes</td>
								<td>Secretary</td>
								<td>San Francisco</td>
								<td>41</td>
								<td>2010/02/12</td>
								<td>$109,850</td>
							</tr>
							<tr>
								<td>Vivian Harrell</td>
								<td>Financial Controller</td>
								<td>San Francisco</td>
								<td>62</td>
								<td>2009/02/14</td>
								<td>$452,500</td>
							</tr>
							<tr>
								<td>Timothy Mooney</td>
								<td>Office Manager</td>
								<td>London</td>
								<td>37</td>
								<td>2008/12/11</td>
								<td>$136,200</td>
							</tr>
							<tr>
								<td>Jackson Bradshaw</td>
								<td>Director</td>
								<td>New York</td>
								<td>65</td>
								<td>2008/09/26</td>
								<td>$645,750</td>
							</tr>
							<tr>
								<td>Olivia Liang</td>
								<td>Support Engineer</td>
								<td>Singapore</td>
								<td>64</td>
								<td>2011/02/03</td>
								<td>$234,500</td>
							</tr>
							<tr>
								<td>Bruno Nash</td>
								<td>Software Engineer</td>
								<td>London</td>
								<td>38</td>
								<td>2011/05/03</td>
								<td>$163,500</td>
							</tr>
							<tr>
								<td>Sakura Yamamoto</td>
								<td>Support Engineer</td>
								<td>Tokyo</td>
								<td>37</td>
								<td>2009/08/19</td>
								<td>$139,575</td>
							</tr>
							<tr>
								<td>Thor Walton</td>
								<td>Developer</td>
								<td>New York</td>
								<td>61</td>
								<td>2013/08/11</td>
								<td>$98,540</td>
							</tr>
							<tr>
								<td>Finn Camacho</td>
								<td>Support Engineer</td>
								<td>San Francisco</td>
								<td>47</td>
								<td>2009/07/07</td>
								<td>$87,500</td>
							</tr>
							<tr>
								<td>Serge Baldwin</td>
								<td>Data Coordinator</td>
								<td>Singapore</td>
								<td>64</td>
								<td>2012/04/09</td>
								<td>$138,575</td>
							</tr>
							<tr>
								<td>Zenaida Frank</td>
								<td>Software Engineer</td>
								<td>New York</td>
								<td>63</td>
								<td>2010/01/04</td>
								<td>$125,250</td>
							</tr>
							<tr>
								<td>Zorita Serrano</td>
								<td>Software Engineer</td>
								<td>San Francisco</td>
								<td>56</td>
								<td>2012/06/01</td>
								<td>$115,000</td>
							</tr>
							<tr>
								<td>Jennifer Acosta</td>
								<td>Junior Javascript Developer</td>
								<td>Edinburgh</td>
								<td>43</td>
								<td>2013/02/01</td>
								<td>$75,650</td>
							</tr>
							<tr>
								<td>Cara Stevens</td>
								<td>Sales Assistant</td>
								<td>New York</td>
								<td>46</td>
								<td>2011/12/06</td>
								<td>$145,600</td>
							</tr>
							<tr>
								<td>Hermione Butler</td>
								<td>Regional Director</td>
								<td>London</td>
								<td>47</td>
								<td>2011/03/21</td>
								<td>$356,250</td>
							</tr>
							<tr>
								<td>Lael Greer</td>
								<td>Systems Administrator</td>
								<td>London</td>
								<td>21</td>
								<td>2009/02/27</td>
								<td>$103,500</td>
							</tr>
							<tr>
								<td>Jonas Alexander</td>
								<td>Developer</td>
								<td>San Francisco</td>
								<td>30</td>
								<td>2010/07/14</td>
								<td>$86,500</td>
							</tr>
							<tr>
								<td>Shad Decker</td>
								<td>Regional Director</td>
								<td>Edinburgh</td>
								<td>51</td>
								<td>2008/11/13</td>
								<td>$183,000</td>
							</tr>
							<tr>
								<td>Michael Bruce</td>
								<td>Javascript Developer</td>
								<td>Singapore</td>
								<td>29</td>
								<td>2011/06/27</td>
								<td>$183,000</td>
							</tr>
							<tr>
								<td>Donna Snider</td>
								<td>Customer Support</td>
								<td>New York</td>
								<td>27</td>
								<td>2011/01/25</td>
								<td>$112,000</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th>Name</th>
								<th>Position</th>
								<th>Office</th>
								<th>Age</th>
								<th>Start date</th>
								<th>Salary</th>
							</tr>
						</tfoot>
					</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->      
			</div> 

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Form inputs</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example6" class="display table table-bordered table-separated" style="width:100%">
						<thead>
							<tr>
								<th>Name</th>
								<th>Age</th>
								<th>Position</th>
								<th>Office</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Tiger Nixon</td>
								<td><input type="text" id="row-1-age" name="row-1-age" value="61"></td>
								<td><input type="text" id="row-1-position" name="row-1-position" value="System Architect"></td>
								<td><select size="1" id="row-1-office" name="row-1-office">
									<option value="Edinburgh" selected="selected">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Garrett Winters</td>
								<td><input type="text" id="row-2-age" name="row-2-age" value="63"></td>
								<td><input type="text" id="row-2-position" name="row-2-position" value="Accountant"></td>
								<td><select size="1" id="row-2-office" name="row-2-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo" selected="selected">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Ashton Cox</td>
								<td><input type="text" id="row-3-age" name="row-3-age" value="66"></td>
								<td><input type="text" id="row-3-position" name="row-3-position" value="Junior Technical Author"></td>
								<td><select size="1" id="row-3-office" name="row-3-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco" selected="selected">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Cedric Kelly</td>
								<td><input type="text" id="row-4-age" name="row-4-age" value="22"></td>
								<td><input type="text" id="row-4-position" name="row-4-position" value="Senior Javascript Developer"></td>
								<td><select size="1" id="row-4-office" name="row-4-office">
									<option value="Edinburgh" selected="selected">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Airi Satou</td>
								<td><input type="text" id="row-5-age" name="row-5-age" value="33"></td>
								<td><input type="text" id="row-5-position" name="row-5-position" value="Accountant"></td>
								<td><select size="1" id="row-5-office" name="row-5-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo" selected="selected">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Brielle Williamson</td>
								<td><input type="text" id="row-6-age" name="row-6-age" value="61"></td>
								<td><input type="text" id="row-6-position" name="row-6-position" value="Integration Specialist"></td>
								<td><select size="1" id="row-6-office" name="row-6-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York" selected="selected">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Herrod Chandler</td>
								<td><input type="text" id="row-7-age" name="row-7-age" value="59"></td>
								<td><input type="text" id="row-7-position" name="row-7-position" value="Sales Assistant"></td>
								<td><select size="1" id="row-7-office" name="row-7-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco" selected="selected">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Rhona Davidson</td>
								<td><input type="text" id="row-8-age" name="row-8-age" value="55"></td>
								<td><input type="text" id="row-8-position" name="row-8-position" value="Integration Specialist"></td>
								<td><select size="1" id="row-8-office" name="row-8-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo" selected="selected">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Colleen Hurst</td>
								<td><input type="text" id="row-9-age" name="row-9-age" value="39"></td>
								<td><input type="text" id="row-9-position" name="row-9-position" value="Javascript Developer"></td>
								<td><select size="1" id="row-9-office" name="row-9-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco" selected="selected">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Sonya Frost</td>
								<td><input type="text" id="row-10-age" name="row-10-age" value="23"></td>
								<td><input type="text" id="row-10-position" name="row-10-position" value="Software Engineer"></td>
								<td><select size="1" id="row-10-office" name="row-10-office">
									<option value="Edinburgh" selected="selected">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Jena Gaines</td>
								<td><input type="text" id="row-11-age" name="row-11-age" value="30"></td>
								<td><input type="text" id="row-11-position" name="row-11-position" value="Office Manager"></td>
								<td><select size="1" id="row-11-office" name="row-11-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London" selected="selected">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Quinn Flynn</td>
								<td><input type="text" id="row-12-age" name="row-12-age" value="22"></td>
								<td><input type="text" id="row-12-position" name="row-12-position" value="Support Lead"></td>
								<td><select size="1" id="row-12-office" name="row-12-office">
									<option value="Edinburgh" selected="selected">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Charde Marshall</td>
								<td><input type="text" id="row-13-age" name="row-13-age" value="36"></td>
								<td><input type="text" id="row-13-position" name="row-13-position" value="Regional Director"></td>
								<td><select size="1" id="row-13-office" name="row-13-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco" selected="selected">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Haley Kennedy</td>
								<td><input type="text" id="row-14-age" name="row-14-age" value="43"></td>
								<td><input type="text" id="row-14-position" name="row-14-position" value="Senior Marketing Designer"></td>
								<td><select size="1" id="row-14-office" name="row-14-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London" selected="selected">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Tatyana Fitzpatrick</td>
								<td><input type="text" id="row-15-age" name="row-15-age" value="19"></td>
								<td><input type="text" id="row-15-position" name="row-15-position" value="Regional Director"></td>
								<td><select size="1" id="row-15-office" name="row-15-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London" selected="selected">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Michael Silva</td>
								<td><input type="text" id="row-16-age" name="row-16-age" value="66"></td>
								<td><input type="text" id="row-16-position" name="row-16-position" value="Marketing Designer"></td>
								<td><select size="1" id="row-16-office" name="row-16-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London" selected="selected">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Paul Byrd</td>
								<td><input type="text" id="row-17-age" name="row-17-age" value="64"></td>
								<td><input type="text" id="row-17-position" name="row-17-position" value="Chief Financial Officer (CFO)"></td>
								<td><select size="1" id="row-17-office" name="row-17-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York" selected="selected">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Gloria Little</td>
								<td><input type="text" id="row-18-age" name="row-18-age" value="59"></td>
								<td><input type="text" id="row-18-position" name="row-18-position" value="Systems Administrator"></td>
								<td><select size="1" id="row-18-office" name="row-18-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York" selected="selected">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Bradley Greer</td>
								<td><input type="text" id="row-19-age" name="row-19-age" value="41"></td>
								<td><input type="text" id="row-19-position" name="row-19-position" value="Software Engineer"></td>
								<td><select size="1" id="row-19-office" name="row-19-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London" selected="selected">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Dai Rios</td>
								<td><input type="text" id="row-20-age" name="row-20-age" value="35"></td>
								<td><input type="text" id="row-20-position" name="row-20-position" value="Personnel Lead"></td>
								<td><select size="1" id="row-20-office" name="row-20-office">
									<option value="Edinburgh" selected="selected">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Jenette Caldwell</td>
								<td><input type="text" id="row-21-age" name="row-21-age" value="30"></td>
								<td><input type="text" id="row-21-position" name="row-21-position" value="Development Lead"></td>
								<td><select size="1" id="row-21-office" name="row-21-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York" selected="selected">
										New York
									</option>

									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Yuri Berry</td>
								<td><input type="text" id="row-22-age" name="row-22-age" value="40"></td>
								<td><input type="text" id="row-22-position" name="row-22-position" value="Chief Marketing Officer (CMO)"></td>
								<td><select size="1" id="row-22-office" name="row-22-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York" selected="selected">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Caesar Vance</td>
								<td><input type="text" id="row-23-age" name="row-23-age" value="21"></td>
								<td><input type="text" id="row-23-position" name="row-23-position" value="Pre-Sales Support"></td>
								<td><select size="1" id="row-23-office" name="row-23-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York" selected="selected">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Doris Wilder</td>
								<td><input type="text" id="row-24-age" name="row-24-age" value="23"></td>
								<td><input type="text" id="row-24-position" name="row-24-position" value="Sales Assistant"></td>
								<td><select size="1" id="row-24-office" name="row-24-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Angelica Ramos</td>
								<td><input type="text" id="row-25-age" name="row-25-age" value="47"></td>
								<td><input type="text" id="row-25-position" name="row-25-position" value="Chief Executive Officer (CEO)"></td>
								<td><select size="1" id="row-25-office" name="row-25-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London" selected="selected">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Gavin Joyce</td>
								<td><input type="text" id="row-26-age" name="row-26-age" value="42"></td>
								<td><input type="text" id="row-26-position" name="row-26-position" value="Developer"></td>
								<td><select size="1" id="row-26-office" name="row-26-office">
									<option value="Edinburgh" selected="selected">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Jennifer Chang</td>
								<td><input type="text" id="row-27-age" name="row-27-age" value="28"></td>
								<td><input type="text" id="row-27-position" name="row-27-position" value="Regional Director"></td>
								<td><select size="1" id="row-27-office" name="row-27-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Brenden Wagner</td>
								<td><input type="text" id="row-28-age" name="row-28-age" value="28"></td>
								<td><input type="text" id="row-28-position" name="row-28-position" value="Software Engineer"></td>
								<td><select size="1" id="row-28-office" name="row-28-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco" selected="selected">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Fiona Green</td>
								<td><input type="text" id="row-29-age" name="row-29-age" value="48"></td>
								<td><input type="text" id="row-29-position" name="row-29-position" value="Chief Operating Officer (COO)"></td>
								<td><select size="1" id="row-29-office" name="row-29-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco" selected="selected">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Shou Itou</td>
								<td><input type="text" id="row-30-age" name="row-30-age" value="20"></td>
								<td><input type="text" id="row-30-position" name="row-30-position" value="Regional Marketing"></td>
								<td><select size="1" id="row-30-office" name="row-30-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo" selected="selected">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Michelle House</td>
								<td><input type="text" id="row-31-age" name="row-31-age" value="37"></td>
								<td><input type="text" id="row-31-position" name="row-31-position" value="Integration Specialist"></td>
								<td><select size="1" id="row-31-office" name="row-31-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Suki Burks</td>
								<td><input type="text" id="row-32-age" name="row-32-age" value="53"></td>
								<td><input type="text" id="row-32-position" name="row-32-position" value="Developer"></td>
								<td><select size="1" id="row-32-office" name="row-32-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London" selected="selected">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Prescott Bartlett</td>
								<td><input type="text" id="row-33-age" name="row-33-age" value="27"></td>
								<td><input type="text" id="row-33-position" name="row-33-position" value="Technical Author"></td>
								<td><select size="1" id="row-33-office" name="row-33-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London" selected="selected">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Gavin Cortez</td>
								<td><input type="text" id="row-34-age" name="row-34-age" value="22"></td>
								<td><input type="text" id="row-34-position" name="row-34-position" value="Team Leader"></td>
								<td><select size="1" id="row-34-office" name="row-34-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco" selected="selected">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Martena Mccray</td>
								<td><input type="text" id="row-35-age" name="row-35-age" value="46"></td>
								<td><input type="text" id="row-35-position" name="row-35-position" value="Post-Sales support"></td>
								<td><select size="1" id="row-35-office" name="row-35-office">
									<option value="Edinburgh" selected="selected">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Unity Butler</td>
								<td><input type="text" id="row-36-age" name="row-36-age" value="47"></td>
								<td><input type="text" id="row-36-position" name="row-36-position" value="Marketing Designer"></td>
								<td><select size="1" id="row-36-office" name="row-36-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco" selected="selected">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Howard Hatfield</td>
								<td><input type="text" id="row-37-age" name="row-37-age" value="51"></td>
								<td><input type="text" id="row-37-position" name="row-37-position" value="Office Manager"></td>
								<td><select size="1" id="row-37-office" name="row-37-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco" selected="selected">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Hope Fuentes</td>
								<td><input type="text" id="row-38-age" name="row-38-age" value="41"></td>
								<td><input type="text" id="row-38-position" name="row-38-position" value="Secretary"></td>
								<td><select size="1" id="row-38-office" name="row-38-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco" selected="selected">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Vivian Harrell</td>
								<td><input type="text" id="row-39-age" name="row-39-age" value="62"></td>
								<td><input type="text" id="row-39-position" name="row-39-position" value="Financial Controller"></td>
								<td><select size="1" id="row-39-office" name="row-39-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco" selected="selected">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Timothy Mooney</td>
								<td><input type="text" id="row-40-age" name="row-40-age" value="37"></td>
								<td><input type="text" id="row-40-position" name="row-40-position" value="Office Manager"></td>
								<td><select size="1" id="row-40-office" name="row-40-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London" selected="selected">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Jackson Bradshaw</td>
								<td><input type="text" id="row-41-age" name="row-41-age" value="65"></td>
								<td><input type="text" id="row-41-position" name="row-41-position" value="Director"></td>
								<td><select size="1" id="row-41-office" name="row-41-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York" selected="selected">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Olivia Liang</td>
								<td><input type="text" id="row-42-age" name="row-42-age" value="64"></td>
								<td><input type="text" id="row-42-position" name="row-42-position" value="Support Engineer"></td>
								<td><select size="1" id="row-42-office" name="row-42-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Bruno Nash</td>
								<td><input type="text" id="row-43-age" name="row-43-age" value="38"></td>
								<td><input type="text" id="row-43-position" name="row-43-position" value="Software Engineer"></td>
								<td><select size="1" id="row-43-office" name="row-43-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London" selected="selected">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Sakura Yamamoto</td>
								<td><input type="text" id="row-44-age" name="row-44-age" value="37"></td>
								<td><input type="text" id="row-44-position" name="row-44-position" value="Support Engineer"></td>
								<td><select size="1" id="row-44-office" name="row-44-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo" selected="selected">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Thor Walton</td>
								<td><input type="text" id="row-45-age" name="row-45-age" value="61"></td>
								<td><input type="text" id="row-45-position" name="row-45-position" value="Developer"></td>
								<td><select size="1" id="row-45-office" name="row-45-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York" selected="selected">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Finn Camacho</td>
								<td><input type="text" id="row-46-age" name="row-46-age" value="47"></td>
								<td><input type="text" id="row-46-position" name="row-46-position" value="Support Engineer"></td>
								<td><select size="1" id="row-46-office" name="row-46-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco" selected="selected">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Serge Baldwin</td>
								<td><input type="text" id="row-47-age" name="row-47-age" value="64"></td>
								<td><input type="text" id="row-47-position" name="row-47-position" value="Data Coordinator"></td>
								<td><select size="1" id="row-47-office" name="row-47-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Zenaida Frank</td>
								<td><input type="text" id="row-48-age" name="row-48-age" value="63"></td>
								<td><input type="text" id="row-48-position" name="row-48-position" value="Software Engineer"></td>
								<td><select size="1" id="row-48-office" name="row-48-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York" selected="selected">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Zorita Serrano</td>
								<td><input type="text" id="row-49-age" name="row-49-age" value="56"></td>
								<td><input type="text" id="row-49-position" name="row-49-position" value="Software Engineer"></td>
								<td><select size="1" id="row-49-office" name="row-49-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco" selected="selected">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Jennifer Acosta</td>
								<td><input type="text" id="row-50-age" name="row-50-age" value="43"></td>
								<td><input type="text" id="row-50-position" name="row-50-position" value="Junior Javascript Developer"></td>
								<td><select size="1" id="row-50-office" name="row-50-office">
									<option value="Edinburgh" selected="selected">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Cara Stevens</td>
								<td><input type="text" id="row-51-age" name="row-51-age" value="46"></td>
								<td><input type="text" id="row-51-position" name="row-51-position" value="Sales Assistant"></td>
								<td><select size="1" id="row-51-office" name="row-51-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York" selected="selected">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Hermione Butler</td>
								<td><input type="text" id="row-52-age" name="row-52-age" value="47"></td>
								<td><input type="text" id="row-52-position" name="row-52-position" value="Regional Director"></td>
								<td><select size="1" id="row-52-office" name="row-52-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London" selected="selected">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Lael Greer</td>
								<td><input type="text" id="row-53-age" name="row-53-age" value="21"></td>
								<td><input type="text" id="row-53-position" name="row-53-position" value="Systems Administrator"></td>
								<td><select size="1" id="row-53-office" name="row-53-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London" selected="selected">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Jonas Alexander</td>
								<td><input type="text" id="row-54-age" name="row-54-age" value="30"></td>
								<td><input type="text" id="row-54-position" name="row-54-position" value="Developer"></td>
								<td><select size="1" id="row-54-office" name="row-54-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco" selected="selected">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Shad Decker</td>
								<td><input type="text" id="row-55-age" name="row-55-age" value="51"></td>
								<td><input type="text" id="row-55-position" name="row-55-position" value="Regional Director"></td>
								<td><select size="1" id="row-55-office" name="row-55-office">
									<option value="Edinburgh" selected="selected">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Michael Bruce</td>
								<td><input type="text" id="row-56-age" name="row-56-age" value="29"></td>
								<td><input type="text" id="row-56-position" name="row-56-position" value="Javascript Developer"></td>
								<td><select size="1" id="row-56-office" name="row-56-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
							<tr>
								<td>Donna Snider</td>
								<td><input type="text" id="row-57-age" name="row-57-age" value="27"></td>
								<td><input type="text" id="row-57-position" name="row-57-position" value="Customer Support"></td>
								<td><select size="1" id="row-57-office" name="row-57-office">
									<option value="Edinburgh">
										Edinburgh
									</option>
									<option value="London">
										London
									</option>
									<option value="New York" selected="selected">
										New York
									</option>
									<option value="San Francisco">
										San Francisco
									</option>
									<option value="Tokyo">
										Tokyo
									</option>
								</select></td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th>Name</th>
								<th>Age</th>
								<th>Position</th>
								<th>Office</th>
							</tr>
						</tfoot>
					</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->      
			</div>  

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Data Table With Full Features</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Name</th>
								<th>Position</th>
								<th>Office</th>
								<th>Age</th>
								<th>Start date</th>
								<th>Salary</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Tiger Nixon</td>
								<td>System Architect</td>
								<td>Edinburgh</td>
								<td>61</td>
								<td>2011/04/25</td>
								<td>$320,800</td>
							</tr>
							<tr>
								<td>Garrett Winters</td>
								<td>Accountant</td>
								<td>Tokyo</td>
								<td>63</td>
								<td>2011/07/25</td>
								<td>$170,750</td>
							</tr>
							<tr>
								<td>Ashton Cox</td>
								<td>Junior Technical Author</td>
								<td>San Francisco</td>
								<td>66</td>
								<td>2009/01/12</td>
								<td>$86,000</td>
							</tr>
							<tr>
								<td>Cedric Kelly</td>
								<td>Senior Javascript Developer</td>
								<td>Edinburgh</td>
								<td>22</td>
								<td>2012/03/29</td>
								<td>$433,060</td>
							</tr>
							<tr>
								<td>Airi Satou</td>
								<td>Accountant</td>
								<td>Tokyo</td>
								<td>33</td>
								<td>2008/11/28</td>
								<td>$162,700</td>
							</tr>
							<tr>
								<td>Brielle Williamson</td>
								<td>Integration Specialist</td>
								<td>New York</td>
								<td>61</td>
								<td>2012/12/02</td>
								<td>$372,000</td>
							</tr>
							<tr>
								<td>Herrod Chandler</td>
								<td>Sales Assistant</td>
								<td>San Francisco</td>
								<td>59</td>
								<td>2012/08/06</td>
								<td>$137,500</td>
							</tr>
							<tr>
								<td>Rhona Davidson</td>
								<td>Integration Specialist</td>
								<td>Tokyo</td>
								<td>55</td>
								<td>2010/10/14</td>
								<td>$327,900</td>
							</tr>
							<tr>
								<td>Colleen Hurst</td>
								<td>Javascript Developer</td>
								<td>San Francisco</td>
								<td>39</td>
								<td>2009/09/15</td>
								<td>$205,500</td>
							</tr>
							<tr>
								<td>Sonya Frost</td>
								<td>Software Engineer</td>
								<td>Edinburgh</td>
								<td>23</td>
								<td>2008/12/13</td>
								<td>$103,600</td>
							</tr>
							<tr>
								<td>Jena Gaines</td>
								<td>Office Manager</td>
								<td>London</td>
								<td>30</td>
								<td>2008/12/19</td>
								<td>$90,560</td>
							</tr>
							<tr>
								<td>Quinn Flynn</td>
								<td>Support Lead</td>
								<td>Edinburgh</td>
								<td>22</td>
								<td>2013/03/03</td>
								<td>$342,000</td>
							</tr>
							<tr>
								<td>Charde Marshall</td>
								<td>Regional Director</td>
								<td>San Francisco</td>
								<td>36</td>
								<td>2008/10/16</td>
								<td>$470,600</td>
							</tr>
							<tr>
								<td>Haley Kennedy</td>
								<td>Senior Marketing Designer</td>
								<td>London</td>
								<td>43</td>
								<td>2012/12/18</td>
								<td>$313,500</td>
							</tr>
							<tr>
								<td>Tatyana Fitzpatrick</td>
								<td>Regional Director</td>
								<td>London</td>
								<td>19</td>
								<td>2010/03/17</td>
								<td>$385,750</td>
							</tr>
							<tr>
								<td>Michael Silva</td>
								<td>Marketing Designer</td>
								<td>London</td>
								<td>66</td>
								<td>2012/11/27</td>
								<td>$198,500</td>
							</tr>
							<tr>
								<td>Paul Byrd</td>
								<td>Chief Financial Officer (CFO)</td>
								<td>New York</td>
								<td>64</td>
								<td>2010/06/09</td>
								<td>$725,000</td>
							</tr>
							<tr>
								<td>Gloria Little</td>
								<td>Systems Administrator</td>
								<td>New York</td>
								<td>59</td>
								<td>2009/04/10</td>
								<td>$237,500</td>
							</tr>
							<tr>
								<td>Bradley Greer</td>
								<td>Software Engineer</td>
								<td>London</td>
								<td>41</td>
								<td>2012/10/13</td>
								<td>$132,000</td>
							</tr>
							<tr>
								<td>Dai Rios</td>
								<td>Personnel Lead</td>
								<td>Edinburgh</td>
								<td>35</td>
								<td>2012/09/26</td>
								<td>$217,500</td>
							</tr>
							<tr>
								<td>Jenette Caldwell</td>
								<td>Development Lead</td>
								<td>New York</td>
								<td>30</td>
								<td>2011/09/03</td>
								<td>$345,000</td>
							</tr>
							<tr>
								<td>Yuri Berry</td>
								<td>Chief Marketing Officer (CMO)</td>
								<td>New York</td>
								<td>40</td>
								<td>2009/06/25</td>
								<td>$675,000</td>
							</tr>
							<tr>
								<td>Caesar Vance</td>
								<td>Pre-Sales Support</td>
								<td>New York</td>
								<td>21</td>
								<td>2011/12/12</td>
								<td>$106,450</td>
							</tr>
							<tr>
								<td>Doris Wilder</td>
								<td>Sales Assistant</td>
								<td>Sidney</td>
								<td>23</td>
								<td>2010/09/20</td>
								<td>$85,600</td>
							</tr>
							<tr>
								<td>Angelica Ramos</td>
								<td>Chief Executive Officer (CEO)</td>
								<td>London</td>
								<td>47</td>
								<td>2009/10/09</td>
								<td>$1,200,000</td>
							</tr>
							<tr>
								<td>Gavin Joyce</td>
								<td>Developer</td>
								<td>Edinburgh</td>
								<td>42</td>
								<td>2010/12/22</td>
								<td>$92,575</td>
							</tr>
							<tr>
								<td>Jennifer Chang</td>
								<td>Regional Director</td>
								<td>Singapore</td>
								<td>28</td>
								<td>2010/11/14</td>
								<td>$357,650</td>
							</tr>
							<tr>
								<td>Brenden Wagner</td>
								<td>Software Engineer</td>
								<td>San Francisco</td>
								<td>28</td>
								<td>2011/06/07</td>
								<td>$206,850</td>
							</tr>
							<tr>
								<td>Fiona Green</td>
								<td>Chief Operating Officer (COO)</td>
								<td>San Francisco</td>
								<td>48</td>
								<td>2010/03/11</td>
								<td>$850,000</td>
							</tr>
							<tr>
								<td>Shou Itou</td>
								<td>Regional Marketing</td>
								<td>Tokyo</td>
								<td>20</td>
								<td>2011/08/14</td>
								<td>$163,000</td>
							</tr>
							<tr>
								<td>Michelle House</td>
								<td>Integration Specialist</td>
								<td>Sidney</td>
								<td>37</td>
								<td>2011/06/02</td>
								<td>$95,400</td>
							</tr>
							<tr>
								<td>Suki Burks</td>
								<td>Developer</td>
								<td>London</td>
								<td>53</td>
								<td>2009/10/22</td>
								<td>$114,500</td>
							</tr>
							<tr>
								<td>Prescott Bartlett</td>
								<td>Technical Author</td>
								<td>London</td>
								<td>27</td>
								<td>2011/05/07</td>
								<td>$145,000</td>
							</tr>
							<tr>
								<td>Gavin Cortez</td>
								<td>Team Leader</td>
								<td>San Francisco</td>
								<td>22</td>
								<td>2008/10/26</td>
								<td>$235,500</td>
							</tr>
							<tr>
								<td>Martena Mccray</td>
								<td>Post-Sales support</td>
								<td>Edinburgh</td>
								<td>46</td>
								<td>2011/03/09</td>
								<td>$324,050</td>
							</tr>
							<tr>
								<td>Unity Butler</td>
								<td>Marketing Designer</td>
								<td>San Francisco</td>
								<td>47</td>
								<td>2009/12/09</td>
								<td>$85,675</td>
							</tr>
							<tr>
								<td>Howard Hatfield</td>
								<td>Office Manager</td>
								<td>San Francisco</td>
								<td>51</td>
								<td>2008/12/16</td>
								<td>$164,500</td>
							</tr>
							<tr>
								<td>Hope Fuentes</td>
								<td>Secretary</td>
								<td>San Francisco</td>

								<td>41</td>
								<td>2010/02/12</td>
								<td>$109,850</td>
							</tr>
							<tr>
								<td>Vivian Harrell</td>
								<td>Financial Controller</td>
								<td>San Francisco</td>
								<td>62</td>
								<td>2009/02/14</td>
								<td>$452,500</td>
							</tr>
							<tr>
								<td>Timothy Mooney</td>
								<td>Office Manager</td>
								<td>London</td>
								<td>37</td>
								<td>2008/12/11</td>
								<td>$136,200</td>
							</tr>
							<tr>
								<td>Jackson Bradshaw</td>
								<td>Director</td>
								<td>New York</td>
								<td>65</td>
								<td>2008/09/26</td>
								<td>$645,750</td>
							</tr>
							<tr>
								<td>Olivia Liang</td>
								<td>Support Engineer</td>
								<td>Singapore</td>
								<td>64</td>
								<td>2011/02/03</td>
								<td>$234,500</td>
							</tr>
							<tr>
								<td>Bruno Nash</td>
								<td>Software Engineer</td>
								<td>London</td>
								<td>38</td>
								<td>2011/05/03</td>
								<td>$163,500</td>
							</tr>
							<tr>
								<td>Sakura Yamamoto</td>
								<td>Support Engineer</td>
								<td>Tokyo</td>
								<td>37</td>
								<td>2009/08/19</td>
								<td>$139,575</td>
							</tr>
							<tr>
								<td>Thor Walton</td>
								<td>Developer</td>
								<td>New York</td>
								<td>61</td>
								<td>2013/08/11</td>
								<td>$98,540</td>
							</tr>
							<tr>
								<td>Finn Camacho</td>
								<td>Support Engineer</td>
								<td>San Francisco</td>
								<td>47</td>
								<td>2009/07/07</td>
								<td>$87,500</td>
							</tr>
							<tr>
								<td>Serge Baldwin</td>
								<td>Data Coordinator</td>
								<td>Singapore</td>
								<td>64</td>
								<td>2012/04/09</td>
								<td>$138,575</td>
							</tr>
							<tr>
								<td>Zenaida Frank</td>
								<td>Software Engineer</td>
								<td>New York</td>
								<td>63</td>
								<td>2010/01/04</td>
								<td>$125,250</td>
							</tr>
							<tr>
								<td>Zorita Serrano</td>
								<td>Software Engineer</td>
								<td>San Francisco</td>
								<td>56</td>
								<td>2012/06/01</td>
								<td>$115,000</td>
							</tr>
							<tr>
								<td>Jennifer Acosta</td>
								<td>Junior Javascript Developer</td>
								<td>Edinburgh</td>
								<td>43</td>
								<td>2013/02/01</td>
								<td>$75,650</td>
							</tr>
							<tr>
								<td>Cara Stevens</td>
								<td>Sales Assistant</td>
								<td>New York</td>
								<td>46</td>
								<td>2011/12/06</td>
								<td>$145,600</td>
							</tr>
							<tr>
								<td>Hermione Butler</td>
								<td>Regional Director</td>
								<td>London</td>
								<td>47</td>
								<td>2011/03/21</td>
								<td>$356,250</td>
							</tr>
							<tr>
								<td>Lael Greer</td>
								<td>Systems Administrator</td>
								<td>London</td>
								<td>21</td>
								<td>2009/02/27</td>
								<td>$103,500</td>
							</tr>
							<tr>
								<td>Jonas Alexander</td>
								<td>Developer</td>
								<td>San Francisco</td>
								<td>30</td>
								<td>2010/07/14</td>
								<td>$86,500</td>
							</tr>
							<tr>
								<td>Shad Decker</td>
								<td>Regional Director</td>
								<td>Edinburgh</td>
								<td>51</td>
								<td>2008/11/13</td>
								<td>$183,000</td>
							</tr>
							<tr>
								<td>Michael Bruce</td>
								<td>Javascript Developer</td>
								<td>Singapore</td>
								<td>29</td>
								<td>2011/06/27</td>
								<td>$183,000</td>
							</tr>
							<tr>
								<td>Donna Snider</td>
								<td>Customer Support</td>
								<td>New York</td>
								<td>27</td>
								<td>2011/01/25</td>
								<td>$112,000</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th>Name</th>
								<th>Position</th>
								<th>Office</th>
								<th>Age</th>
								<th>Start date</th>
								<th>Salary</th>
							</tr>
						</tfoot>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			  <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Hover Export Data Table</h3>
				  <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
						<thead>
							<tr>
								<th>Name</th>
								<th>Position</th>
								<th>Office</th>
								<th>Age</th>
								<th>Start date</th>
								<th>Salary</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Tiger Nixon</td>
								<td>System Architect</td>
								<td>Edinburgh</td>
								<td>61</td>
								<td>2011/04/25</td>
								<td>$320,800</td>
							</tr>
							<tr>
								<td>Garrett Winters</td>
								<td>Accountant</td>
								<td>Tokyo</td>
								<td>63</td>
								<td>2011/07/25</td>
								<td>$170,750</td>
							</tr>
							<tr>
								<td>Ashton Cox</td>
								<td>Junior Technical Author</td>
								<td>San Francisco</td>
								<td>66</td>
								<td>2009/01/12</td>
								<td>$86,000</td>
							</tr>
							<tr>
								<td>Cedric Kelly</td>
								<td>Senior Javascript Developer</td>
								<td>Edinburgh</td>
								<td>22</td>
								<td>2012/03/29</td>
								<td>$433,060</td>
							</tr>
							<tr>
								<td>Airi Satou</td>
								<td>Accountant</td>
								<td>Tokyo</td>
								<td>33</td>
								<td>2008/11/28</td>
								<td>$162,700</td>
							</tr>
							<tr>
								<td>Brielle Williamson</td>
								<td>Integration Specialist</td>
								<td>New York</td>
								<td>61</td>
								<td>2012/12/02</td>
								<td>$372,000</td>
							</tr>
							<tr>
								<td>Herrod Chandler</td>
								<td>Sales Assistant</td>
								<td>San Francisco</td>
								<td>59</td>
								<td>2012/08/06</td>
								<td>$137,500</td>
							</tr>
							<tr>
								<td>Rhona Davidson</td>
								<td>Integration Specialist</td>
								<td>Tokyo</td>
								<td>55</td>
								<td>2010/10/14</td>
								<td>$327,900</td>
							</tr>
							<tr>
								<td>Colleen Hurst</td>
								<td>Javascript Developer</td>
								<td>San Francisco</td>
								<td>39</td>
								<td>2009/09/15</td>
								<td>$205,500</td>
							</tr>
							<tr>
								<td>Sonya Frost</td>
								<td>Software Engineer</td>
								<td>Edinburgh</td>
								<td>23</td>
								<td>2008/12/13</td>
								<td>$103,600</td>
							</tr>
							<tr>
								<td>Jena Gaines</td>
								<td>Office Manager</td>
								<td>London</td>
								<td>30</td>
								<td>2008/12/19</td>
								<td>$90,560</td>
							</tr>
							<tr>
								<td>Quinn Flynn</td>
								<td>Support Lead</td>
								<td>Edinburgh</td>
								<td>22</td>
								<td>2013/03/03</td>
								<td>$342,000</td>
							</tr>
							<tr>
								<td>Charde Marshall</td>
								<td>Regional Director</td>
								<td>San Francisco</td>
								<td>36</td>
								<td>2008/10/16</td>
								<td>$470,600</td>
							</tr>
							<tr>
								<td>Haley Kennedy</td>
								<td>Senior Marketing Designer</td>
								<td>London</td>
								<td>43</td>
								<td>2012/12/18</td>
								<td>$313,500</td>
							</tr>
							<tr>
								<td>Tatyana Fitzpatrick</td>
								<td>Regional Director</td>
								<td>London</td>
								<td>19</td>
								<td>2010/03/17</td>
								<td>$385,750</td>
							</tr>
							<tr>
								<td>Michael Silva</td>
								<td>Marketing Designer</td>
								<td>London</td>
								<td>66</td>
								<td>2012/11/27</td>
								<td>$198,500</td>
							</tr>
							<tr>
								<td>Paul Byrd</td>
								<td>Chief Financial Officer (CFO)</td>
								<td>New York</td>
								<td>64</td>
								<td>2010/06/09</td>
								<td>$725,000</td>
							</tr>
							<tr>
								<td>Gloria Little</td>
								<td>Systems Administrator</td>
								<td>New York</td>
								<td>59</td>
								<td>2009/04/10</td>
								<td>$237,500</td>
							</tr>
							<tr>
								<td>Bradley Greer</td>
								<td>Software Engineer</td>
								<td>London</td>
								<td>41</td>
								<td>2012/10/13</td>
								<td>$132,000</td>
							</tr>
							<tr>
								<td>Dai Rios</td>
								<td>Personnel Lead</td>
								<td>Edinburgh</td>
								<td>35</td>
								<td>2012/09/26</td>
								<td>$217,500</td>
							</tr>
							<tr>
								<td>Jenette Caldwell</td>
								<td>Development Lead</td>
								<td>New York</td>
								<td>30</td>
								<td>2011/09/03</td>
								<td>$345,000</td>
							</tr>
							<tr>
								<td>Yuri Berry</td>
								<td>Chief Marketing Officer (CMO)</td>
								<td>New York</td>
								<td>40</td>
								<td>2009/06/25</td>
								<td>$675,000</td>
							</tr>
							<tr>
								<td>Caesar Vance</td>
								<td>Pre-Sales Support</td>
								<td>New York</td>
								<td>21</td>
								<td>2011/12/12</td>
								<td>$106,450</td>
							</tr>
							<tr>
								<td>Doris Wilder</td>
								<td>Sales Assistant</td>
								<td>Sidney</td>
								<td>23</td>
								<td>2010/09/20</td>
								<td>$85,600</td>
							</tr>
							<tr>
								<td>Angelica Ramos</td>
								<td>Chief Executive Officer (CEO)</td>
								<td>London</td>
								<td>47</td>
								<td>2009/10/09</td>
								<td>$1,200,000</td>
							</tr>
							<tr>
								<td>Gavin Joyce</td>
								<td>Developer</td>
								<td>Edinburgh</td>
								<td>42</td>
								<td>2010/12/22</td>
								<td>$92,575</td>
							</tr>
							<tr>
								<td>Jennifer Chang</td>
								<td>Regional Director</td>
								<td>Singapore</td>
								<td>28</td>
								<td>2010/11/14</td>
								<td>$357,650</td>
							</tr>
							<tr>
								<td>Brenden Wagner</td>
								<td>Software Engineer</td>
								<td>San Francisco</td>
								<td>28</td>
								<td>2011/06/07</td>
								<td>$206,850</td>
							</tr>
							<tr>
								<td>Fiona Green</td>
								<td>Chief Operating Officer (COO)</td>
								<td>San Francisco</td>
								<td>48</td>
								<td>2010/03/11</td>
								<td>$850,000</td>
							</tr>
							<tr>
								<td>Shou Itou</td>
								<td>Regional Marketing</td>
								<td>Tokyo</td>
								<td>20</td>
								<td>2011/08/14</td>
								<td>$163,000</td>
							</tr>
							<tr>
								<td>Michelle House</td>
								<td>Integration Specialist</td>
								<td>Sidney</td>
								<td>37</td>
								<td>2011/06/02</td>
								<td>$95,400</td>
							</tr>
							<tr>
								<td>Suki Burks</td>
								<td>Developer</td>
								<td>London</td>
								<td>53</td>
								<td>2009/10/22</td>
								<td>$114,500</td>
							</tr>
							<tr>
								<td>Prescott Bartlett</td>
								<td>Technical Author</td>
								<td>London</td>
								<td>27</td>
								<td>2011/05/07</td>
								<td>$145,000</td>
							</tr>
							<tr>
								<td>Gavin Cortez</td>
								<td>Team Leader</td>
								<td>San Francisco</td>
								<td>22</td>
								<td>2008/10/26</td>
								<td>$235,500</td>
							</tr>
							<tr>
								<td>Martena Mccray</td>
								<td>Post-Sales support</td>
								<td>Edinburgh</td>
								<td>46</td>
								<td>2011/03/09</td>
								<td>$324,050</td>
							</tr>
							<tr>
								<td>Unity Butler</td>
								<td>Marketing Designer</td>
								<td>San Francisco</td>
								<td>47</td>
								<td>2009/12/09</td>
								<td>$85,675</td>
							</tr>
							<tr>
								<td>Howard Hatfield</td>
								<td>Office Manager</td>
								<td>San Francisco</td>
								<td>51</td>
								<td>2008/12/16</td>
								<td>$164,500</td>
							</tr>
							<tr>
								<td>Hope Fuentes</td>
								<td>Secretary</td>
								<td>San Francisco</td>
								<td>41</td>
								<td>2010/02/12</td>
								<td>$109,850</td>
							</tr>
							<tr>
								<td>Vivian Harrell</td>
								<td>Financial Controller</td>
								<td>San Francisco</td>
								<td>62</td>
								<td>2009/02/14</td>
								<td>$452,500</td>
							</tr>
							<tr>
								<td>Timothy Mooney</td>
								<td>Office Manager</td>
								<td>London</td>
								<td>37</td>
								<td>2008/12/11</td>
								<td>$136,200</td>
							</tr>
							<tr>
								<td>Jackson Bradshaw</td>
								<td>Director</td>
								<td>New York</td>
								<td>65</td>
								<td>2008/09/26</td>
								<td>$645,750</td>
							</tr>
							<tr>
								<td>Olivia Liang</td>
								<td>Support Engineer</td>
								<td>Singapore</td>
								<td>64</td>
								<td>2011/02/03</td>
								<td>$234,500</td>
							</tr>
							<tr>
								<td>Bruno Nash</td>
								<td>Software Engineer</td>
								<td>London</td>
								<td>38</td>
								<td>2011/05/03</td>
								<td>$163,500</td>
							</tr>
							<tr>
								<td>Sakura Yamamoto</td>
								<td>Support Engineer</td>
								<td>Tokyo</td>
								<td>37</td>
								<td>2009/08/19</td>
								<td>$139,575</td>
							</tr>
							<tr>
								<td>Thor Walton</td>
								<td>Developer</td>
								<td>New York</td>
								<td>61</td>
								<td>2013/08/11</td>
								<td>$98,540</td>
							</tr>
							<tr>
								<td>Finn Camacho</td>
								<td>Support Engineer</td>
								<td>San Francisco</td>
								<td>47</td>
								<td>2009/07/07</td>
								<td>$87,500</td>
							</tr>
							<tr>
								<td>Serge Baldwin</td>
								<td>Data Coordinator</td>
								<td>Singapore</td>
								<td>64</td>
								<td>2012/04/09</td>
								<td>$138,575</td>
							</tr>
							<tr>
								<td>Zenaida Frank</td>
								<td>Software Engineer</td>
								<td>New York</td>
								<td>63</td>
								<td>2010/01/04</td>
								<td>$125,250</td>
							</tr>
							<tr>
								<td>Zorita Serrano</td>
								<td>Software Engineer</td>
								<td>San Francisco</td>
								<td>56</td>
								<td>2012/06/01</td>
								<td>$115,000</td>
							</tr>
							<tr>
								<td>Jennifer Acosta</td>
								<td>Junior Javascript Developer</td>
								<td>Edinburgh</td>
								<td>43</td>
								<td>2013/02/01</td>
								<td>$75,650</td>
							</tr>
							<tr>
								<td>Cara Stevens</td>
								<td>Sales Assistant</td>
								<td>New York</td>
								<td>46</td>
								<td>2011/12/06</td>
								<td>$145,600</td>
							</tr>
							<tr>
								<td>Hermione Butler</td>
								<td>Regional Director</td>
								<td>London</td>
								<td>47</td>
								<td>2011/03/21</td>
								<td>$356,250</td>
							</tr>
							<tr>
								<td>Lael Greer</td>
								<td>Systems Administrator</td>
								<td>London</td>
								<td>21</td>
								<td>2009/02/27</td>
								<td>$103,500</td>
							</tr>
							<tr>
								<td>Jonas Alexander</td>
								<td>Developer</td>
								<td>San Francisco</td>
								<td>30</td>
								<td>2010/07/14</td>
								<td>$86,500</td>
							</tr>
							<tr>
								<td>Shad Decker</td>
								<td>Regional Director</td>
								<td>Edinburgh</td>
								<td>51</td>
								<td>2008/11/13</td>
								<td>$183,000</td>
							</tr>
							<tr>
								<td>Michael Bruce</td>
								<td>Javascript Developer</td>
								<td>Singapore</td>
								<td>29</td>
								<td>2011/06/27</td>
								<td>$183,000</td>
							</tr>
							<tr>
								<td>Donna Snider</td>
								<td>Customer Support</td>
								<td>New York</td>
								<td>27</td>
								<td>2011/01/25</td>
								<td>$112,000</td>
							</tr>
						</tbody>				  
						<tfoot>
							<tr>
								<th>Name</th>
								<th>Position</th>
								<th>Office</th>
								<th>Age</th>
								<th>Start date</th>
								<th>Salary</th>
							</tr>
						</tfoot>
					</table>
					</div>              
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
  <!-- /.content-wrapper -->
  
   <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="#">Purchase Now</a>
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
	
	<!-- ./side demo panel -->
	<div class="sticky-toolbar">	    
	    <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Buy Now" class="waves-effect waves-light btn btn-success btn-flat mb-5 btn-sm" target="_blank">
			<span class="icon-Money"><span class="path1"></span><span class="path2"></span></span>
		</a>
	    <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Portfolio" class="waves-effect waves-light btn btn-danger btn-flat mb-5 btn-sm" target="_blank">
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
	
	
    <script src="assets/src/js/vendors.min.js"></script>
	<script src="assets/src/js/pages/chat-popup.js"></script>
    <script src="assets/assets/icons/feather-icons/feather.min.js"></script>
	
	<script src="assets/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	
	<script src="assets/vendor_components/datatable/datatables.min.js"></script>

	
	<!-- COA App -->
	<script src="assets/src/js/template.js"></script>
	<script src="assets/src/js/pages/dashboard.js"></script>
	

</body>

</html>
