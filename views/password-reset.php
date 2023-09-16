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
								<form id="reset-password-form" method="post">
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
                                            <input type="hidden" name="user_id" value="<?php echo $_GET['id']; ?>">
											<input type="password" name="new_password" placeholder="New Password" required>
											<input type="password" name="confirm_password" placeholder="Confirm Password" required>

										</div>
									</div>
									  <div class="row">
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-info margin-top-10">Reset</button>
										</div>
										<!-- /.col -->
									  </div>
                                      <div id="message"></div>
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
            // Handle "Reset Password" form submission
            $('#reset-password-form').submit(function(event) {
                event.preventDefault();
                
                var userId = $('#reset-password-form input[name="user_id"]').val();
                var newPassword = $('#reset-password-form input[name="new_password"]').val();
                var confirmPassword = $('#reset-password-form input[name="confirm_password"]').val();
                
                if (newPassword !== confirmPassword) {
                    $('#message').text('Password and confirm password do not match.');
                    return;
                }
                
                // Send an AJAX request to UserController to update the password
                $.ajax({
                    type: 'POST',
                    url: '../controllers/AdminUsersController.php',
                    data: { user_id: userId, new_password: newPassword, action:"reset_password" },
                    dataType: 'json',
                    success: function(response) {
                       // $('#message').text(response.message);
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
							window.location ="auth_login.html";

                    },
                    error: function(xhr, status, error) {
                        //console.error(error);
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
                });
            });
        });

	</script>
	
	

</body>

</html>
