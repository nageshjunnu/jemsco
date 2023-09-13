<?php
session_start();
require_once '../models/UserModel.php';


    if (!isset($_SESSION['email'])) {
        header('Location: ../student-registration.html'); // Redirect to the login page if not logged in
        exit();
    }
    if (isset($_SESSION['email'])) {
      $email = $_SESSION['email'];
       // echo json_encode(['id' => $username]);
    } else {
       // echo json_encode(['id' => null]);
    }
    //  echo $email;

	$userModel = new UserModel();
	$user = $userModel->getStudentByEmail($_SESSION['email']);
	print_r($user);
	
?>

<!DOCTYPE html>
<html>
	

<head>

		<meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jemsco 2023</title>
        <link rel="shortcut icon" href="images/favicon.png">

		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
		

        <!-- STYLESHEETS : begin -->
		<link rel="stylesheet" type="text/css" href="../library/css/style.css">
        <link rel="stylesheet" type="text/css" href="../library/css/skin/red.css">
		<link rel="stylesheet" type="text/css" href="../library/css/custom.css">
		<!--[if lte IE 9]>
		<link rel="stylesheet" type="text/css" href="../library/css/oldie.css" />
		<![endif]-->
		<!-- STYLESHEETS : end -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <style>
					
		:root{
			--pinkish-red: #C35A74;
			--medium-blue: #307BAA;
			--greenish-blue: #53BAB5;
			--bright-orange: #FF7445;
			--white-smoke: #F5F5F4;
			--white: #FFF;
			--dark-gray: #7D7C7C;
			--black: #000;
		}



		.content {
			/* display: flex; */
			/* justify-content: space-between; */
			/* width: 1200px; */
			margin: 100px;
		}

		.box {
			display: flex;
			flex-direction: column;
			/* height: 586px; */
			border-radius: 20px;
			margin-left: 10px;
			padding: 1;
			margin-right: 10px;
			background: var(--white);
			box-shadow: 0 1rem 2rem rgba(0, 0, 0, 20%);
		}

		.title{
			width: 100%;
			padding: 10px 0;
			font-size: 1.2em;
			font-weight: lighter;
			text-align: center;
			border-top-left-radius: 20px;
			border-top-right-radius: 20px;

			color: var(--white-smoke);
		}

		.basic .title{
			background: var(--pinkish-red);
		}

		.standard .title{
			background: var(--medium-blue);
		}

		.business .title{
			background: var(--greenish-blue);
		}

		.view{
			display: block;
			width: 100%;
			padding: 30px 0 20px;

			background: var(--white-smoke);
		}

		.icon{
			display: flex;
			justify-content: center;
		}

		.icon img{
			width: 100px;
		}

		.cost {
			/* display: flex; */
			justify-content: center;
			flex-direction: row;
			margin-top: 10px;
			display: grid;
		}

		.amount{
			font-size: 2.8em;
			font-weight: bolder;
		}

		.detail{
			margin: auto 0 auto 5px;
			width: 70px;
			font-size: 0.7em;
			font-weight: bold;
			line-height: 15px;
			color: #7D7C7C;
		}

		.description{
			margin: 30px auto;
			/*font-size: 0.8em;
			color: #7D7C7C;*/
		}


		.button{
			margin: 0 auto 30px;
		}

		button{
			height: 40px;
			width: 250px;
			font-size: 0.7em;
			font-weight: bold;
			letter-spacing: 0.5px;
			color: #7D7C7C;
			border: 2px solid var(--dark-gray);
			border-radius: 50px;

			background: transparent;
		}

		button:hover{
			color: var(--white-smoke);
			transition: 0.5s;
			border: none;

			background: var(--bright-orange);
		}

					form#payment-form {
							text-align: center;
							font-size: 21px;
							margin: 0 0 0px 0;
							z-index: 99999;
							position: relative;
			}
			.description ul {
			text-align: left;
		}
		.description ul li {
			/* text-align: left; */
			list-style: none;
		}
		p.classes {
				text-transform: uppercase;
			}
				</style>


	</head>
	<body>
    <!-- HEADER : begin -->
		<!-- If you want to use Standard Header Menu, add "m-has-standard-menu" class to the following element (see home-2.html template for example)
		Remove "m-has-gmap" class if you are not using Google Map in this template -->
		<header id="header" class="m-has-header-tools">
			<div class="header-inner">

				<!-- HEADER CONTENT : begin -->
				<div class="header-content">
					<div class="c-container">
						<div class="header-content-inner">

							<!-- HEADER BRANDING : begin -->
							<!-- Logo dimensions can be changed in ../library/css/custom.css
							You can add "m-large-logo" class to following element to use larger version of logo -->
							<div class="header-branding">
								<a href="index-2.html"><span>
									<img src="../images/header-logo.png"
										data-hires="images/header-logo.2x.png"
										alt="TownPress - Municipality HTML Template">
								</span></a>
							</div>
							<!-- HEADER BRANDING : end -->

							<!-- HEADER TOGGLE HOLDER : begin -->
							<div class="header-toggle-holder">

								<!-- HEADER TOGGLE : begin -->
								<button type="button" class="header-toggle">
									<i class="ico-open tp tp-menu"></i>
									<i class="ico-close tp tp-cross"></i>
									<span>Menu</span>
								</button>
								<!-- HEADER TOGGLE : end -->

							</div>
							<!-- HEADER TOGGLE HOLDER : end -->

							<!-- HEADER MENU : begin -->
							<!-- This menu is used as both mobile menu (displayed on devices with screen width < 991px)
							and standard header menu (only if Header element has "m-has-standard-menu" class) -->
							<nav class="header-menu">
								<ul>
									<li><a href="index-2.html">Home</a>
										<ul>
											<li><a href="index-2.html">Home 1</a></li>
											<li><a href="home-2.html">Home 2</a></li>
										</ul>
									</li>
									<li class="m-active"><a href="town-hall.html">Government</a>
										<ul>
											<li><a href="town-hall.html">Town Hall</a></li>
											<li><a href="town-council.html">Town Council</a></li>
											<li><a href="phone-numbers.html">Phone Numbers</a></li>
											<li><a href="document-list.html">Documents</a></li>
											<li class="m-active"><a href="contact.html">Write To Mayor</a></li>
										</ul>
									</li>
									<li><a href="post-list.html">Community</a>
										<ul>
											<li><a href="post-list.html">News</a></li>
											<li><a href="notice-list.html">Notices</a></li>
											<li><a href="event-list.html">Events</a></li>
											<li><a href="gallery-list.html">Galleries</a></li>
										</ul>
									</li>
									<li><a href="statistics.html">Pages</a>
										<ul>
											<li><a href="statistics.html">Statistics</a></li>
											<li><a href="virtual-tour.html">Virtual Tour</a></li>
											<li><a href="town-history.html">Town History</a></li>
											<li><a href="elements.html">Elements</a></li>
										</ul>
									</li>
								</ul>
							</nav>
							<!-- HEADER MENU : end -->

							<!-- HEADER TOOLS : begin -->
							<div class="header-tools">

								<!-- HEADER SEARCH : begin -->
								<div class="header-search">
									<form method="get"  class="c-search-form">
										<div class="form-fields">
											<input type="text" value="" placeholder="Search this site..." name="s">
											<button type="submit" class="submit-btn"><i class="tp tp-magnifier"></i></button>
										</div>
									</form>
								</div>
								<!-- HEADER SEARCH : end -->

							</div>
							<!-- HEADER TOOLS : end -->

						</div>
					</div>
				</div>
				<!-- HEADER CONTENT : end -->

			</div>
		</header>
		<!-- HEADER : end -->
	

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>




    <div id="page-content">
        <div class="page-content-inner">
        <div class="c-content-box">
        <form id="payment-form">
            <input type="hidden" id="student_id" name="student_id" value="1"> <!-- Replace with the actual student ID -->
            <input type="hidden" id="amount" name="amount" value="1000.00"> <!-- Replace with the actual amount -->
            <!-- Add other necessary form fields -->
			<div class="content">
            <div class="standard box">
                <h2 class="title">Registration Successfull</h2>
                <div class="view">
                    
                    <div class="cost">
                        <p class="amount">00.00 ₹</p>
                        <p class="classes">ceo,cso,sss</p>
                    </div>
                </div>
                <div class="description">
                    <ul>
                        <li>Name : <span id ="student_name"></span></li>
                        <li>School Name : <span id ="school_name"></span></li>
                        <li>School Address : <span id ="school_address"></span></li>
                        <li>Mobile : <span id ="mobile"></span></li>
                        <li>Email : <span id ="email"></span></li>
                    </ul>
                </div>
                <div class="button">
				<button type="button" class="btn btn-lg btn-primary button--primary" id="razorpay-button" onclick="pay_now()">Pay Now</button>
                </div>
            </div>
        </div>
            <!-- Razorpay payment button -->
            
           
        </form>
		<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <div id="payment-response"></div>
    </div>
  </div>
</div>

	<!-- FOOTER : begin -->
    <footer id="footer" class="m-has-bg">
			<div class="footer-bg">
				<div class="footer-inner">

					<!-- FOOTER TOP : begin -->
					<div class="footer-top">
						<div class="c-container">

							<!-- BOTTOM PANEL : begin -->
							<div id="bottom-panel">
								<div class="bottom-panel-inner">
									<div class="row">
										<div class="col-md-3">

											<!-- TEXT WIDGET : begin -->
											<div class="widget">
												<hr class="c-separator m-transparent hidden-lg hidden-md">
												<div class="widget-inner">
													<h3 class="widget-title">About TownPress</h3>
													<div class="widget-content">
														<p>TownPress is a premium Municipality HTML template. It is best suited to be used as a presentation site for small towns or villages.</p>
														<p>You can buy this responsive HTML template on <a href="http://themeforest.net/user/LSVRthemes/portfolio">ThemeForest</a>.</p>
													</div>
												</div>
											</div>
											<!-- TEXT WIDGET : end -->

										</div>
										<div class="widget-col col-md-3">

											<!-- DEFINITION LIST WIDGET : begin -->
											<div class="widget definition-list-widget">
												<hr class="c-separator m-transparent hidden-lg hidden-md">
												<div class="widget-inner">
													<h3 class="widget-title m-has-ico"><i class="widget-ico tp tp-telephone"></i>Phone Numbers</h3>
													<div class="widget-content">
														<dl>
															<dt>Town Clerk</dt>
															<dd>(123) 456-7890</dd>
															<dt>State Police</dt>
															<dd>(123) 456-7891</dd>
															<dt>Fire Department</dt>
															<dd>(123) 456-7892</dd>
														</dl>
														<p class="show-all-btn"><a href="phone-numbers.html">See All Phone Numbers</a></p>
													</div>
												</div>
											</div>
											<!-- DEFINITION LIST WIDGET : end -->

										</div>
										<div class="widget-col col-md-3">

											<!-- MAILCHIMP SUBSCRIBE WIDGET : begin -->
											<!-- Please read the documentation to learn how to configure Mailchimp Subscribe widget -->
											<div class="widget mailchimp-subscribe-widget">
												<hr class="c-separator m-transparent hidden-lg hidden-md">
												<div class="widget-inner">
													<h3 class="widget-title m-has-ico"><i class="widget-ico tp tp-at-sign"></i>Join Our Newsletter</h3>
													<div class="widget-content">

														<!-- Add your custom form URL into "action" attribute in following element -->
                										<form class="mailchimp-subscribe-form" method="get"
                											action="http://lsvr.us14.list-manage.com/subscribe/post-json?u=8291218baaf54ddfd7dbc6016&amp;id=f3e5d696dc&amp;c=?">
	                    									<div class="subscribe-inner">

	                    										<div class="description">
	                    											<p>Join our newsletter to receive up to date news about our municipality.</p>
																</div>

																<!-- VALIDATION ERROR MESSAGE : begin -->
																<p class="c-alert-message m-warning m-validation-error" style="display: none;"><i class="ico fa fa-exclamation-circle"></i>
																<span>Your email address is required.</span></p>
																<!-- VALIDATION ERROR MESSAGE : end -->

																<!-- SENDING REQUEST ERROR MESSAGE : begin -->
																<p class="c-alert-message m-warning m-request-error" style="display: none;"><i class="ico fa fa-exclamation-circle"></i>
																<span>There was a connection problem. Try again later.</span></p>
																<!-- SENDING REQUEST ERROR MESSAGE : end -->

																<!-- SUCCESS MESSAGE : begin -->
																<p class="c-alert-message m-success" style="display: none;"><i class="ico fa fa-check-circle"></i>
																<span><strong>Form sent successfully!</strong></span></p>
																<!-- SUCCESS MESSAGE : end -->

										                        <div class="form-fields">
										                            <input type="text" placeholder="Your Email Address" name="EMAIL" class="m-required m-email">
										                            <button title="Subscribe" type="submit" class="submit-btn">
																		<i class="fa fa-chevron-right"></i>
																		<i class="fa fa-spinner fa-spin"></i>
																	</button>
										                        </div>

	                    									</div>
                										</form>

    												</div>
												</div>
											</div>
											<!-- MAILCHIMP SUBSCRIBE WIDGET : end -->

										</div>
										<div class="widget-col col-md-3">

											<!-- TEXT WIDGET : begin -->
											<div class="widget">
												<hr class="c-separator m-transparent hidden-lg hidden-md">
												<div class="widget-inner">
													<h3 class="widget-title m-has-ico"><i class="widget-ico tp tp-envelope"></i>Town Hall Address</h3>
													<div class="widget-content">
														<p>P.O. Box 123 TownPress<br>VT 12345</p>
														<p>Phone: (123) 456-7890<br>Fax: (123) 456-7891<br>
														Email: <a href="#">townhall@townpress.gov</a></p>
													</div>
												</div>
											</div>
											<!-- TEXT WIDGET : end -->

										</div>
									</div>
								</div>
							</div>
							<!-- BOTTOM PANEL : end -->

						</div>
					</div>
					<!-- FOOTER TOP : end -->

					<!-- FOOTER BOTTOM : begin -->
					<div class="footer-bottom">
						<div class="footer-bottom-inner">
							<div class="c-container">

								<!-- FOOTER SOCIAL : begin -->
								<!-- Here is the list of some popular social networks. There are more icons you can use, just refer to the documentation -->
								<div class="footer-social">
									<ul class="c-social-icons">
										<li class="ico-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li class="ico-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li class="ico-googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li class="ico-instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
										<!--li><a href="#"><i class="fa fa-envelope"></i></a></li-->
										<!--li class="ico-angellist"><a href="#"><i class="fa fa-angellist"></i></a></li-->
										<!--li class="ico-behance"><a href="#"><i class="fa fa-behance"></i></a></li-->
										<!--li class="ico-bitbucket"><a href="#"><i class="fa fa-bitbucket"></i></a></li-->
										<!--li class="ico-bitcoin"><a href="#"><i class="fa fa-bitcoin"></i></a></li-->
										<!--li class="ico-codepen"><a href="#"><i class="fa fa-codepen"></i></a></li-->
										<!--li class="ico-delicious"><a href="#"><i class="fa fa-delicious"></i></a></li-->
										<!--li class="ico-deviantart"><a href="#"><i class="fa fa-deviantart"></i></a></li-->
										<!--li class="ico-digg"><a href="#"><i class="fa fa-digg"></i></a></li-->
										<!--li class="ico-dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li-->
										<!--li class="ico-dropbox"><a href="#"><i class="fa fa-dropbox"></i></a></li-->
										<!--li class="ico-flickr"><a href="#"><i class="fa fa-flickr"></i></a></li-->
										<!--li class="ico-foursquare"><a href="#"><i class="fa fa-foursquare"></i></a></li-->
										<!--li class="ico-git"><a href="#"><i class="fa fa-git"></i></a></li-->
										<!--li class="ico-github"><a href="#"><i class="fa fa-github"></i></a></li-->
										<!--li class="ico-lastfm"><a href="#"><i class="fa fa-lastfm"></i></a></li-->
										<!--li class="ico-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li-->
										<!--li class="ico-paypal"><a href="#"><i class="fa fa-paypal"></i></a></li-->
										<!--li class="ico-pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li-->
										<!--li class="ico-reddit"><a href="#"><i class="fa fa-reddit"></i></a></li-->
										<!--li class="ico-skype"><a href="#"><i class="fa fa-skype"></i></a></li-->
										<!--li class="ico-soundcloud"><a href="#"><i class="fa fa-soundcloud"></i></a></li-->
										<!--li class="ico-spotify"><a href="#"><i class="fa fa-spotify"></i></a></li-->
										<!--li class="ico-steam"><a href="#"><i class="fa fa-steam"></i></a></li-->
										<!--li class="ico-trello"><a href="#"><i class="fa fa-trello"></i></a></li-->
										<!--li class="ico-tumblr"><a href="#"><i class="fa fa-tumblr"></i></a></li-->
										<!--li class="ico-twitch"><a href="#"><i class="fa fa-twitch"></i></a></li-->
										<!--li class="ico-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li-->
										<!--li class="ico-vine"><a href="#"><i class="fa fa-vine"></i></a></li-->
										<!--li class="ico-vk"><a href="#"><i class="fa fa-vk"></i></a></li-->
										<!--li class="ico-wordpress"><a href="#"><i class="fa fa-wordpress"></i></a></li-->
										<!--li class="ico-xing"><a href="#"><i class="fa fa-xing"></i></a></li-->
										<!--li class="ico-yahoo"><a href="#"><i class="fa fa-yahoo"></i></a></li-->
										<!--li class="ico-yelp"><a href="#"><i class="fa fa-yelp"></i></a></li-->
										<!--li class="ico-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li-->
									</ul>
								</div>
								<!-- FOOTER SOCIAL : end -->

								<!-- FOOTER MENU : begin -->
								<nav class="footer-menu">
									<ul>
										<li><a href="index-2.html">Home</a></li>
										<li><a href="http://demos.lsvr.sk/townpress.html/documentation/">Documentation</a></li>
										<li><a href="http://themeforest.net/user/LSVRthemes/portfolio">Purchase</a></li>
									</ul>
								</nav>
								<!-- FOOTER MENU : end -->

								<!-- FOOTER TEXT : begin -->
								<div class="footer-text">
									<p>You can purchase TownPress Municipality HTML template on <a href="http://themeforest.net/user/LSVRthemes/portfolio">ThemeForest.net</a></p>
								</div>
								<!-- FOOTER TEXT : end -->

							</div>
						</div>
					</div>
					<!-- FOOTER BOTTOM : end -->

				</div>
			</div>
		</footer>
		<!-- FOOTER : end -->

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
	

  function pay_now(){
        var studentId = <?php echo $user["id"]; ?>;
		console.log("student id", studentId);
		var storedv = JSON.parse(localStorage.getItem("payment-data"));
		// console.log(JSON.parse(stored))
        var amount = storedv.total_price;

          //var actual_amount = amount;
		  var options = {
		    "key": "rzp_test_ktNINPdYFllxlC", // Enter the Key ID generated from the Dashboard
		    "amount": amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
		    "currency": "INR",
		    "name": "JEMSCO",
		    "description": "Student Fee Payment",
		    "image": "razorpay.png",
		    //"order_id": "order_IluGWxBm9U8zJ8", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
		    "handler": function (response){
		        console.log("success", response);
		        $.ajax({

		        	url: '../controllers/PaymentController.php',
		        	'type': 'POST',
		        	'data': {'action':'payment','student_id':studentId,'payment_id':response.razorpay_payment_id,'amount':amount},
		        	success:function(data){
                        console.log(data);
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
                            title: 'Registration successful'
                            })
		        	  window.location.href = 'verify_payment.php';
		        	}

		        });
		        // alert(response.razorpay_payment_id);
		        // alert(response.razorpay_order_id);
		        // alert(response.razorpay_signature)
		    },
            "theme": {
                    "color": "#528FF0"
                }
		    
		};
		var rzp1 = new Razorpay(options);
		rzp1.on('payment.failed', function (response){
		        alert(response.error.code);
		        alert(response.error.description);
		        alert(response.error.source);
		        alert(response.error.step);
		        alert(response.error.reason);
		        alert(response.error.metadata.order_id);
		        alert(response.error.metadata.payment_id);
		});
		document.getElementById('razorpay-button').onclick = function(e){
		    rzp1.open();
		    e.preventDefault();
		}
    }


</script>

<script>
	$(document).ready(function(){
		var stored = localStorage.getItem("payment-data");
		console.log(JSON.parse(stored))
		stored = JSON.parse(stored);
		$("#student_name").text(stored.student_name)
		$("#school_name").text(stored.school_name)
		$("#school_address").text(stored.school_address.replace(/%2/g, ', '))
		$("#mobile").text(stored.mobile)
		$("#email").text(stored.email.replace(/%40/g, '@'))
		$(".amount").text(stored.total_price+" ₹")
		$(".classes").text("Class Selected - "+stored.classes.replace(/%2/g, ', '))

	})
</script>

		<!-- SCRIPTS : begin -->
		<script src="../library/js/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="../library/js/third-party.js" type="text/javascript"></script>
		<script src="../library/js/../library.js" type="text/javascript"></script>
		<script src="../library/js/scripts.js" type="text/javascript"></script>
		<!-- SCRIPTS : end -->

	</body>


</html>