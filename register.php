<?php
include"dbconfig.php";
?>
<!DOCTYPE html>
<html lang="en">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>
		<meta charset="utf-8">
		<title>Registration Form</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta content="" name="keywords">
		<meta content="" name="description">
		<!-- Favicons -->
		<link href="img/favicon.png" rel="icon">
		<link href="img/apple-touch-icon.png" rel="apple-touch-icon">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
		<!-- Bootstrap CSS File -->
		<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- Libraries CSS Files -->
		<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="lib/animate/animate.min.css" rel="stylesheet">
		<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
		<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
		<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
		<!-- Main Stylesheet File -->
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<!--==========================
			Header
		============================-->
		<header id="header" class="fixed-top">
			<div class="container">
				<div class="logo float-left">
				<h1 style="font-weight:bold">Event's</h1>
				</div>
				<?php include"nav.php";?>
			</div>
		</header><!-- #header -->
		<!--==========================
			Intro Section
		============================-->
		</br>
		</br>
		</br>
		<main id="main">
			<!--==========================
				About Us Section
			============================-->
			<section id="contact">
				<div class="container-fluid">
					<div class="section-header">
						<h3>Register Now</h3>
					</div>
					<div class="row wow fadeInUp">
						<div class="col-lg-6 offset-lg-3">
							<div class="form">
								<div id="sendmessage">Your message has been sent. Thank you!</div>
								<div id="errormessage"></div>
								<form   method="POST" role="form" >
									<div class="form-group">
										<input type="text" name="name" class="form-control" id="name" placeholder="Your Name"  data-validation="length" data-validation-length="min2"/>
										<div class="validation"></div>
									</div>
									<div class="form-group">
										<input type="tel" name="mobile" class="form-control" id="mobile"placeholder="1234-456-789"  
										pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}"
										required/>
										<div class="validation"></div>
									</div>
									<div class="form-group">
										<input type="email" name="email" class="form-control" id="email" placeholder="Your Email"  required />
										<div class="validation"></div>
									</div>
									<div class="form-group">
										<input type="text" name="password" class="form-control" id="password" placeholder="Your Password"  data-validation="length" data-validation-length="min5"/>
										<div class="validation"></div>
									</div>
									
									<div class="form-row">
									
										
										
										
										
									</div>
									<!-- 
									<div class="form-group">
										<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
										<div class="validation"></div>
									</div>
									<div class="form-group">
										<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
										<div class="validation"></div>
									</div>
									 -->
									<div class="text-center"><button type="submit" name="submit" title="Register Now">Register Now</button></div>
								</form>
							</div>
							<?php
							if(isset($_REQUEST['submit']))
							{
								extract($_REQUEST);
								$n=iud("INSERT INTO `registration`( `name`, `mobile`, `email`, `password`) VALUES('$name','$mobile','$email','$password')");
								if($n==1)
								{
									echo"<script>alert('Register Successful');
									window.location='login.php';
									</script>";
								}
								else
								{
									echo"<script>alert('Something Wrong Try Again');
									window.location='register.php';
									</script>";
								}
							}
							?>
						</div>
					</div>
				</div>
			</section><!-- #contact -->
			<!--==========================
				Clients Section
			============================-->
			<!-- #testimonials -->
			<!--==========================
				Team Section
			============================-->
			<!-- #team -->
			<!--==========================
				Clients Section
			============================-->
			
			<!--==========================
				Contact Section
			============================-->
		</main>
		<!--==========================
			Footer
		============================-->
		<footer id="footer">
			<div class="footer-top">
				<div class="container">
					
				</div>
			</div>
			<!-- <div class="container">
				<div class="copyright">
					All Right Reserve! 2019
				</div>
			</div> -->
		</footer><!-- #footer -->
		<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
		<!-- Uncomment below i you want to use a preloader -->
		<!-- <div id="preloader"></div> -->
		<!-- JavaScript Libraries -->
		<script src="lib/jquery/jquery.min.js"></script>
		<script src="lib/jquery/jquery-migrate.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="lib/easing/easing.min.js"></script>
		<script src="lib/mobile-nav/mobile-nav.js"></script>
		<script src="lib/wow/wow.min.js"></script>
		<script src="lib/waypoints/waypoints.min.js"></script>
		<script src="lib/counterup/counterup.min.js"></script>
		<script src="lib/owlcarousel/owl.carousel.min.js"></script>
		<script src="lib/isotope/isotope.pkgd.min.js"></script>
		<script src="lib/lightbox/js/lightbox.min.js"></script>
		<!-- Contact Form JavaScript File -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
		<script>
			$.validate({
				lang: 'en'
			});
		</script>
		<!-- Template Main Javascript File -->
		<script src="js/main.js"></script>
	</body>
</html>