<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">

    <title>JEMSCO - Recover Password</title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="assets/src/css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="assets/src/css/style.css">
	<link rel="stylesheet" href="assets/src/css/skin_color.css">	

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(assets/images/auth-bg/bg-2.jpg)">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">						
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h3 class="mb-0 text-primary">Recover Password</h3>								
							</div>
							<div class="p-40">
								<form id="forgot-password-form" method="post">
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
											<input type="email" class="form-control ps-15 bg-transparent" placeholder="Your Email" required>
										</div>
									</div>
									  <div class="row">
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-info margin-top-10">Reset</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	



	<!-- Vendor JS -->
	<script src="assets/src/js/vendors.min.js"></script>
	<script src="assets/src/js/pages/chat-popup.js"></script>
    <script src="assets/icons/feather-icons/feather.min.js"></script>	
	<script>
		$(document).ready(function() {
			// Handle "Forgot Password" form submission
			$('#forgot-password-form').submit(function(event) {
				event.preventDefault();
				
				var email = $('#forgot-password-form input[name="email"]').val();
				
				// Send an AJAX request to UserController to send the password reset email
				$.ajax({
					type: 'POST',
					url: '../controllers/UserController.php',
					data: { email: email, action:"forgot-password" },
					dataType: 'json',
					success: function(response) {
						alert(response.message);
					},
					error: function(xhr, status, error) {
						console.error(error);
					}
				});
			});

		});

	</script>
	
	

</body>

</html>
