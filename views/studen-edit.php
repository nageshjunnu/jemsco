<?php include("header.php"); ?>
  
  <?php include("sidebar.php"); ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">General Form Elements</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Forms</li>
								<li class="breadcrumb-item active" aria-current="page">General Form Elements</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">
			<div class="row">			  
				<div class="col-lg-6 col-12">
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Sample form 1</h4>
						</div>
						<!-- /.box-header -->
						<form class="form">
							<div class="box-body">
								<h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Personal Info</h4>
								<hr class="my-15">
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">First Name</label>
									  <input type="text" class="form-control" placeholder="First Name">
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Last Name</label>
									  <input type="text" class="form-control" placeholder="Last Name">
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">E-mail</label>
									  <input type="text" class="form-control" placeholder="E-mail">
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Contact Number</label>
									  <input type="text" class="form-control" placeholder="Phone">
									</div>
								  </div>
								</div>
								<h4 class="box-title text-info mb-0 mt-20"><i class="ti-save me-15"></i> Requirements</h4>
								<hr class="my-15">
								<div class="form-group">
								  <label class="form-label">Company</label>
								  <input type="text" class="form-control" placeholder="Company Name">
								</div>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Interested in</label>
									  <select class="form-select">
										<option>Interested in</option>
										<option>design</option>
										<option>development</option>
										<option>illustration</option>
										<option>branding</option>
										<option>video</option>
									  </select>
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Budget</label>
									  <select class="form-select">
										<option>Budget</option>
										<option>less than 5000$</option>
										<option>5000$ - 10000$</option>
										<option>10000$ - 20000$</option>
										<option>more than 20000$</option>
									  </select>
									</div>
								  </div>
								</div>
								<div class="form-group">
								  <label class="form-label">Select File</label>
								  <label class="file">
									<input type="file" id="file">
								  </label>
								</div>
								<div class="form-group">
								  <label class="form-label">About Project</label>
								  <textarea rows="5" class="form-control" placeholder="About Project"></textarea>
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<button type="button" class="btn btn-warning me-1">
								  <i class="ti-trash"></i> Cancel
								</button>
								<button type="submit" class="btn btn-primary">
								  <i class="ti-save-alt"></i> Save
								</button>
							</div>  
						</form>
					  </div>
					  <!-- /.box -->			
				</div>  

				<div class="col-lg-6 col-12">
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Sample form 2</h4>
						</div>
						<!-- /.box-header -->
						<form class="form">
							<div class="box-body">
								<h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> About User</h4>
								<hr class="my-15">
								<div class="row">
								  <div class="col-md-6">

									<div class="form-group">
									  <label class="form-label">First Name</label>
									  <input type="text" class="form-control" placeholder="First Name">
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Last Name</label>
									  <input type="text" class="form-control" placeholder="Last Name">
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">E-mail</label>
									  <input type="text" class="form-control" placeholder="E-mail">
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Contact Number</label>
									  <input type="text" class="form-control" placeholder="Phone">
									</div>
								  </div>
								</div>
								<h4 class="box-title text-info mb-0 mt-20"><i class="ti-envelope me-15"></i> Contact Info & Bio</h4>
								<hr class="my-15">
								<div class="form-group">
								  <label class="form-label">Email</label>
								  <input class="form-control" type="email" placeholder="email">
								</div>
								<div class="form-group">
								  <label class="form-label">Website</label>
								  <input class="form-control" type="url" placeholder="http://">
								</div>
								<div class="form-group">
								  <label class="form-label">Contact Number</label>
								  <input class="form-control" type="tel" placeholder="Contact Number">
								</div>
								<div class="form-group">
								  <label class="form-label">Bio</label>
								  <textarea rows="4" class="form-control" placeholder="Bio"></textarea>
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer text-end">
								<button type="button" class="btn btn-warning me-1">
								  <i class="ti-trash"></i> Cancel
								</button>
								<button type="submit" class="btn btn-primary">
								  <i class="ti-save-alt"></i> Save
								</button>
							</div>  
						</form>
					  </div>
					  <!-- /.box -->			
				</div>

				<div class="col-lg-6 col-12">
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Sample Form 3 with the Icons</h4>
						</div>
						<!-- /.box-header -->
						<form class="form">
							<div class="box-body">
								<div class="form-group">
									<label class="form-label">User Name</label>
									<div class="input-group mb-3">
										<span class="input-group-text"><i class="ti-user"></i></span>
										<input type="text" class="form-control" placeholder="Username">
									</div>
								</div>
								<div class="form-group">
									<label class="form-label">Email address</label>
									<div class="input-group mb-3">
										<span class="input-group-text"><i class="ti-email"></i></span>
										<input type="email" class="form-control" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<label class="form-label">Password</label>
									<div class="input-group mb-3">
										<span class="input-group-text"><i class="ti-lock"></i></span>
										<input type="password" class="form-control" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<label class="form-label">Confirm Password</label>
									<div class="input-group mb-3">
										<span class="input-group-text"><i class="ti-lock"></i></span>
										<input type="password" class="form-control" placeholder="Confirm Password">
									</div>
								</div>
								<div class="form-group">
									<div class="checkbox checkbox-success">
										<input id="checkbox1" type="checkbox">
										<label for="checkbox1"> Remember me </label>
									</div>
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<button type="button" class="btn btn-warning me-1">
								  <i class="ti-trash"></i> Cancel
								</button>
								<button type="submit" class="btn btn-primary">
								  <i class="ti-save-alt"></i> Save
								</button>
							</div>  
						</form>
					  </div>
					  <!-- /.box -->			
				</div>

				<div class="col-lg-6 col-12">
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Sample Form 4 with the right Icons</h4>
						</div>
						<!-- /.box-header -->
						<form class="form">
							<div class="box-body">
								<div class="form-group">
									<label class="form-label">User Name</label>
									<div class="input-group mb-3">
										<input type="text" class="form-control" placeholder="Username">
										<span class="input-group-text"><i class="ti-user"></i></span>
									</div>
								</div>
								<div class="form-group">
									<label class="form-label">Email address</label>
									<div class="input-group mb-3">
										<input type="email" class="form-control" placeholder="Email">
										<span class="input-group-text"><i class="ti-email"></i></span>
									</div>
								</div>
								<div class="form-group">
									<label class="form-label">Password</label>
									<div class="input-group mb-3">
										<input type="password" class="form-control" placeholder="Password">
										<span class="input-group-text"><i class="ti-lock"></i></span>
									</div>
								</div>
								<div class="form-group">
									<label class="form-label">Confirm Password</label>
									<div class="input-group mb-3">
										<input type="password" class="form-control" placeholder="Confirm Password">
										<span class="input-group-text"><i class="ti-lock"></i></span>
									</div>
								</div>
								<div class="form-group">
									<div class="checkbox checkbox-success">
										<input id="checkbox2" type="checkbox">
										<label for="checkbox2"> Remember me </label>
									</div>
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer text-end">
								<button type="button" class="btn btn-warning me-1">
								  <i class="ti-trash"></i> Cancel
								</button>
								<button type="submit" class="btn btn-primary">
								  <i class="ti-save-alt"></i> Save
								</button>
							</div>  
						</form>
					  </div>
					  <!-- /.box -->			
				</div>

				<div class="col-lg-6 col-12">
					<!-- Basic Forms -->
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Default Basic Forms</h4>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
						  <div class="row">
							<div class="col-12">
								<div class="form-group row">
								  <label for="example-text-input" class="col-sm-2 col-form-label">Text</label>
								  <div class="col-sm-10">
									<input class="form-control" type="text" value="Johen Doe" id="example-text-input">
								  </div>
								</div>
								<div class="form-group row">
								  <label for="example-search-input" class="col-sm-2 col-form-label">Search</label>
								  <div class="col-sm-10">
									<input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
								  </div>
								</div>
								<div class="form-group row">
								  <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
								  <div class="col-sm-10">
									<input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
								  </div>
								</div>
								<div class="form-group row">
								  <label for="example-url-input" class="col-sm-2 col-form-label">URL</label>
								  <div class="col-sm-10">
									<input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
								  </div>
								</div>
								<div class="form-group row">
								  <label for="example-tel-input" class="col-sm-2 col-form-label">Telephone</label>
								  <div class="col-sm-10">
									<input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
								  </div>
								</div>
								<div class="form-group row">
								  <label for="example-password-input" class="col-sm-2 col-form-label">Password</label>
								  <div class="col-sm-10">
									<input class="form-control" type="password" value="hunter2" id="example-password-input">
								  </div>
								</div>
								<div class="form-group row">
								  <label for="example-number-input" class="col-sm-2 col-form-label">Number</label>
								  <div class="col-sm-10">
									<input class="form-control" type="number" value="42" id="example-number-input">
								  </div>
								</div>
								<div class="form-group row">
								  <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Date and time</label>
								  <div class="col-sm-10">
									<input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
								  </div>
								</div>
								<div class="form-group row">
								  <label for="example-date-input" class="col-sm-2 col-form-label">Date</label>
								  <div class="col-sm-10">
									<input class="form-control" type="date" value="2011-08-19" id="example-date-input">
								  </div>
								</div>
								<div class="form-group row">
								  <label for="example-month-input" class="col-sm-2 col-form-label">Month</label>
								  <div class="col-sm-10">
									<input class="form-control" type="month" value="2011-08" id="example-month-input">
								  </div>
								</div>
								<div class="form-group row">
								  <label for="example-week-input" class="col-sm-2 col-form-label">Week</label>
								  <div class="col-sm-10">
									<input class="form-control" type="week" value="2011-W33" id="example-week-input">
								  </div>
								</div>
								<div class="form-group row">
								  <label for="example-time-input" class="col-sm-2 col-form-label">Time</label>
								  <div class="col-sm-10">
									<input class="form-control" type="time" value="13:45:00" id="example-time-input">
								  </div>
								</div>
								<div class="form-group row">
								  <label for="example-color-input" class="col-sm-2 col-form-label">Color</label>
								  <div class="col-sm-10">
									<input class="form-control" type="color" value="#563d7c" id="example-color-input">
								  </div>
								</div>
							</div>
							<!-- /.col -->
						  </div>
						  <!-- /.row -->
						</div>
						<!-- /.box-body -->
					  </div>
					  <!-- /.box -->			
				</div>

				<div class="col-lg-6 col-12">
					<!-- Basic Forms -->
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Form Sections</h4>
						</div>
						<!-- /.box-header -->
						<form>
							<div class="box-body">
								<h4 class="mt-0 mb-20">1. Customer Info:</h4>
								<div class="form-group">
									<label class="form-label">Full Name:</label>
									<input type="email" class="form-control" placeholder="Enter full name">
								</div>
								<div class="form-group">
									<label class="form-label">Email address:</label>
									<input type="email" class="form-control" placeholder="Enter email">
								</div>
								<div class="form-group">
									<label class="form-label">Contact:</label>							
									<input type="tel" class="form-control" placeholder="Phone number">
								</div>
								<div class="form-group">
									<label class="form-label">Communications :</label>
									<div class="c-inputs-stacked">
										<input type="checkbox" id="checkbox_123">
										<label for="checkbox_123" class="me-30">Email</label>
										<input type="checkbox" id="checkbox_234">
										<label for="checkbox_234" class="me-30">SMS</label>
										<input type="checkbox" id="checkbox_345">
										<label for="checkbox_345" class="me-30">Phone</label>
									</div>
								</div>
								<hr>

								<h4 class="mt-0 mb-20">2. Payment Info:</h4>

								<div class="form-group">
									<label class="form-label">Payment Method :</label>
									<div class="c-inputs-stacked">
										<input name="group123" type="radio" id="radio_123" value="1">
										<label for="radio_123" class="me-30">Credit Card</label>
										<input name="group456" type="radio" id="radio_456" value="1">
										<label for="radio_456" class="me-30">Cash</label>
										<input name="group789" type="radio" id="radio_789" value="1">
										<label for="radio_789" class="me-30">Wallet</label>
									</div>
								</div>
								<div class="form-group">
									<label class="form-label">Amount:</label>
									<input type="email" class="form-control" placeholder="Enter full name">
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<button type="submit" class="btn btn-danger">Cancel</button>
								<button type="submit" class="btn btn-success pull-right">Submit</button>
							</div>
						</form>
					  </div>
					  <!-- /.box -->			
				</div>
		    </div>
			<div class="row">
				<div class="col-12">
				  <div class="box">
					  
					<div class="box-header with-border">
					  <h4 class="box-title">Text inputs</h4>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label class="form-label">Text input</label>
							<input type="text" class="form-control" placeholder="Text input">
						</div>

						<div class="form-group">
							<label class="form-label">Password input</label>
							<input type="password" class="form-control" placeholder="Password input">
						</div>

						<div class="form-group">
							<label class="form-label">Input with helper</label>
							<input type="text" class="form-control" placeholder="Input with helper">
						</div>

						<div class="form-group">
							<label class="text-success form-label">Contextual input helper</label>
							<div class="form-group-feedback form-group-feedback-right">
								<input type="text" class="form-control border-success" placeholder="Success with icon">
								<div class="form-control-feedback text-success">
									<i class="fa fa-check"></i>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="form-label">Readonly input field</label>
							<input type="text" class="form-control" readonly placeholder="Readonly input field">
						</div>

						<div class="form-group">
							<label class="form-label">Disabled input field</label>
							<input type="text" class="form-control" disabled placeholder="Disabled input field">
						</div>

						<div class="form-group">
							<label class="form-label">Textarea</label>
							<textarea rows="5" cols="5" class="form-control" placeholder="Textarea"></textarea>
						</div>
					  
					</div>	
					  
					<div class="box-header with-border">
					  <h4 class="box-title">Input groups</h4>
					</div>
					<div class="box-body">						
						<div class="form-group">
							<label class="form-label">Left group addon</label>
							<div class="input-group">
								<span class="input-group-text"><i class="fa fa-paper-plane"></i></span>
								<input type="text" class="form-control" placeholder="Left group addon">
							</div>
						</div>

						<div class="form-group">
							<label class="form-label">Right group addon</label>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Right group addon">
								<span class="input-group-text"><i class="fa fa-paper-plane"></i></span>
							</div>
						</div>

						<div class="form-group">
							<label class="form-label">Left group button</label>
							<div class="input-group">
								<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-bs-toggle="dropdown">Action</button>
								<div class="dropdown-menu">
									<a href="#" class="dropdown-item">Action</a>
									<a href="#" class="dropdown-item">Another action</a>
									<a href="#" class="dropdown-item">Something else here</a>
									<a href="#" class="dropdown-item">One more line</a>
								</div>
								<input type="text" class="form-control" placeholder="Left group button">
							</div>
						</div>

						<div class="form-group">
							<label class="form-label">Right group button</label>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Right group button">
								<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-bs-toggle="dropdown">Action</button>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="#" class="dropdown-item">Action</a>
									<a href="#" class="dropdown-item">Another action</a>
									<a href="#" class="dropdown-item">Something else here</a>
									<a href="#" class="dropdown-item">One more line</a>
								</div>
							</div>
						</div>

						<div class="form-group form-group-feedback form-group-feedback-right">
							<label class="form-label text-danger">Contextual input group</label>
							<div class="position-relative">
								<div class="input-group">
									<span class="input-group-text text-danger border-danger">
										<i class="fa fa-times-circle-o"></i>
									</span>
									<input type="text" class="form-control border-danger" placeholder="Contextual input group">
								</div>
								<div class="form-control-feedback text-danger">
									<i class="fa fa-times-circle-o"></i>
								</div>
							</div>
						</div>
					</div>	
					  
					<div class="box-header with-border">
					  <h4 class="box-title">Selects</h4>
					</div>
					<div class="box-body">
						<div class="form-group form-group-float">
							<label class="form-label">Basic select</label>
							<select class="form-select">
								<option value="" selected>Basic select</option>
								<optgroup label="Alaskan/Hawaiian Time Zone">
									<option value="AK">Alaska</option>
									<option value="HI">Hawaii</option>
								</optgroup>
								<optgroup label="Pacific Time Zone">
									<option value="CA">California</option>
									<option value="NV">Nevada</option>
									<option value="WA">Washington</option>
								</optgroup>
								<optgroup label="Mountain Time Zone">
									<option value="AZ">Arizona</option>
									<option value="CO">Colorado</option>
									<option value="WY">Wyoming</option>
								</optgroup>
							</select>
						</div>
					</div>
			  </div>
			  <!-- /.box -->

			  <!-- Form Element sizes -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Different Height</h4>
				</div>
				<div class="box-body form-element">
				  <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
				  <br><br>
				  <input class="form-control" type="text" placeholder="Default input">
				  <br><br>
				  <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Different Width</h4>
				</div>
				<div class="box-body form-element">
				  <div class="row">
					<div class="col-sm-3">
					  <input type="text" class="form-control" placeholder=".col-sm-3">
					</div>
					<div class="col-sm-4">
					  <input type="text" class="form-control" placeholder=".col-sm-4">
					</div>
					<div class="col-sm-5">
					  <input type="text" class="form-control" placeholder=".col-sm-5">
					</div>
				  </div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			  <!-- Input addon -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Input Addon</h4>
				</div>
				<div class="box-body">
				  <div class="input-group">
					<span class="input-group-addon">@</span>
					<input type="text" class="form-control" placeholder="Username">
				  </div>
				  <br>

				  <div class="input-group">
					<input type="text" class="form-control">
					<span class="input-group-addon">.00</span>
				  </div>
				  <br>

				  <div class="input-group">
					<span class="input-group-addon">$</span>
					<input type="text" class="form-control">
					<span class="input-group-addon">.00</span>
				  </div>

				  <h6 class="mt-15 mb-5">With icons</h6>

				  <div class="input-group">
					<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
					<input type="email" class="form-control" placeholder="Email">
				  </div>
				  <br>

				  <div class="input-group">
					<input type="text" class="form-control">
					<span class="input-group-addon"><i class="fa fa-check"></i></span>
				  </div>
				  <br>

				  <div class="input-group">
					<span class="input-group-addon"><i class="fa fa-dollar"></i></span>
					<input type="text" class="form-control">
					<span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
				  </div>

				  <h6 class="mt-15 mb-5">With checkbox and radio inputs</h6>

				  <div class="row">
					<div class="col-lg-6">
					  <div class="input-group">
						<span class="input-group-addon">
						  <input type="checkbox" id="addon_Checkbox_1">
						  <label for="addon_Checkbox_1" style="padding-left: 20px;height: 17px;"></label>
						</span>
						<input type="text" class="form-control">
					  </div>
					  <!-- /input-group -->
					</div>
					<!-- /.col-lg-6 -->
					<div class="col-lg-6">
					  <div class="input-group">
							<span class="input-group-addon">
							  <input name="group1" type="radio" id="addon_Option_1">
							  <label for="addon_Option_1" style="padding-left: 20px;height: 17px;"></label>
							</span>
						<input type="text" class="form-control">
					  </div>
					  <!-- /input-group -->
					</div>
					<!-- /.col-lg-6 -->
				  </div>
				  <!-- /.row -->
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			</div>
			<!--/.col (left) -->
			<!-- right column -->
			<div class="col-12">
			  <!-- Horizontal Form -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Horizontal Form</h4>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form class="form-horizontal form-element">
				  <div class="box-body">
					<div class="form-group row">
					  <label for="inputEmail3" class="col-sm-2 form-label">Email</label>

					  <div class="col-sm-10">
						<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="inputPassword3" class="col-sm-2 form-label">Password</label>

					  <div class="col-sm-10">
						<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
					  </div>
					</div>
					<div class="form-group row">
					  <div class="ms-auto col-sm-10">
						<div class="checkbox">
							<input type="checkbox" id="Remember">
							<label for="Remember">Remember me</label> 
						</div>
					  </div>
					</div>
				  </div>
				  <!-- /.box-body -->
				  <div class="box-footer">
					<button type="submit" class="btn btn-danger">Cancel</button>
					<button type="submit" class="btn btn-info pull-right">Sign in</button>
				  </div>
				  <!-- /.box-footer -->
				</form>
			  </div>
			  <!-- /.box -->
			  <!-- general form elements disabled -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">General Elements</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <form role="form">
					<!-- text input -->
					<div class="form-group">
					  <label class="form-label">Text</label>
					  <input type="text" class="form-control" placeholder="Enter ...">
					</div>
					<div class="form-group">
					  <label class="form-label">Text Disabled</label>
					  <input type="text" class="form-control" placeholder="Enter ..." disabled>
					</div>

					<!-- textarea -->
					<div class="form-group">
					  <label class="form-label">Textarea</label>
					  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
					</div>
					<div class="form-group">
					  <label class="form-label">Textarea Disabled</label>
					  <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
					</div>

					<!-- input states -->
					<div class="form-group has-success">
					  <label class="form-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
					  <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">
					  <span class="help-block">Help block with success</span>
					</div>
					<div class="form-group has-warning">
					  <label class="form-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with
						warning</label>
					  <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
					  <span class="help-block">Help block with warning</span>
					</div>
					<div class="form-group has-error">
					  <label class="form-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
						error</label>
					  <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
					  <span class="help-block">Help block with error</span>
					</div>

					<!-- checkbox -->
					<div class="form-group">
					  <div class="checkbox">
						  <input type="checkbox" id="Checkbox_1">
						  <label for="Checkbox_1">Checkbox 1</label>
					  </div>

					  <div class="checkbox">
						  <input type="checkbox" id="Checkbox_2">
						  <label for="Checkbox_2">Checkbox 2</label>
					  </div>

					  <div class="checkbox">
						 <input type="checkbox" id="Checkbox_3" disabled>
						 <label for="Checkbox_3">Checkbox disabled</label>                      
					  </div>
					</div>

					<!-- radio -->
					<div class="form-group">
					  <div class="radio">
						  <input name="group1" type="radio" id="Option_1" checked>
						  <label for="Option_1">Option one is this and that&mdash;be sure to include why it's great</label>                    
					  </div>
					  <div class="radio">
						  <input name="group1" type="radio" id="Option_2" >
						  <label for="Option_2">Option two can be something else and selecting it will deselect option one</label>   
					  </div>
					  <div class="radio">
						  <input name="group1" type="radio" id="Option_3" disabled>
						  <label for="Option_3">Option three is disabled</label> 
					  </div>
					</div>

					<!-- select -->
					<div class="form-group">
					  <label class="form-label">Select</label>
					  <select class="form-select">
						<option>option 1</option>
						<option>option 2</option>
						<option>option 3</option>
						<option>option 4</option>
						<option>option 5</option>
					  </select>
					</div>
					<div class="form-group">
					  <label class="form-label">Select Disabled</label>
					  <select class="form-select" disabled>
						<option>option 1</option>
						<option>option 2</option>
						<option>option 3</option>
						<option>option 4</option>
						<option>option 5</option>
					  </select>
					</div>

					<!-- Select multiple-->
					<div class="form-group">
					  <label class="form-label">Select Multiple</label>
					  <select multiple class="form-select">
						<option>option 1</option>
						<option>option 2</option>
						<option>option 3</option>
						<option>option 4</option>
						<option>option 5</option>
					  </select>
					</div>
					<div class="form-group">
					  <label class="form-label">Select Multiple Disabled</label>
					  <select multiple class="form-select" disabled>
						<option>option 1</option>
						<option>option 2</option>
						<option>option 3</option>
						<option>option 4</option>
						<option>option 5</option>
					  </select>
					</div>

				  </form>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!--/.col (right) -->
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
	
	
	<!-- Vendor JS -->
	<script src="assets/src/js/vendors.min.js"></script>
	<script src="assets/src/js/pages/chat-popup.js"></script>
    <script src="assets/assets/icons/feather-icons/feather.min.js"></script>	
	
	<!-- CRMi App -->
	<script src="assets/src/js/template.js"></script>
	
	
</body>

<!-- Mirrored from crm-admin-dashboard-template.multipurposethemes.com/university/vertical/main/forms_general.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Sep 2023 14:45:59 GMT -->
</html>
