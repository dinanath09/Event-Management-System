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
						<h3>Create Event</h3>
					</div>
					<div class="row wow fadeInUp">
						<div class="col-lg-6 offset-lg-3">
							<div class="form">
								<div id="sendmessage">Your message has been sent. Thank you!</div>
								<div id="errormessage"></div>
								<form   method="POST" role="form" >
									.
									
									
										
										
										<div class="form-group">
										<label>Name/Title
										</label>
										<input type="text" name="title" required   class="form-control" id="mobile" placeholder="Enetr your name and Title"  />
										<div class="validation"></div>
									
									
										
									</div>
									
									
									<div class="form-row">
									<div class="col-lg-6">
									
										
										
										<div class="form-group">
										<label>Date To
										</label>
										<input type="date" name="date_to" class="form-control" id="mobile" placeholder="Your Mobile"  data-validation="length" data-validation-length="min2"/>
										<div class="validation"></div>
									</div>
									</div>
									<div class="col-lg-6">
									
									<div class="form-group">
<label>Date From		
</label>		
		<input type="date" name="date_from" class="form-control" id="email" placeholder="Your Email"  data-validation="length" data-validation-length="min2"/>
										<div class="validation"></div>
									</div>
									</div>
										
									</div>
									<div class="form-row">
									<div class="col-lg-6">
									
										
										
										<div class="form-group">
										<label>Time To</label>
										<input type="time" name="time_to" class="form-control" id="mobile" placeholder="Your Mobile"  data-validation="length" data-validation-length="min2"/>
										<div class="validation"></div>
									</div>
									</div>
									<div class="col-lg-6">
									
									<div class="form-group">
									<label>Time From
									</label>
										<input type="time" name="time_from" class="form-control" id="email" placeholder="Your Email"  data-validation="length" data-validation-length="min2"/>
										<div class="validation"></div>
									</div>
									</div>
										
									</div>
									<div class="form-group">
									<label>Entertainments:-</label></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="checkbox" name="music"  value="yes" />Music&nbsp;&nbsp;
										<input type="checkbox" name="dance"  value="yes" />Dance&nbsp;&nbsp;
										<input type="checkbox" name="cartoon"  value="yes" />Cartoons
										<div class="validation"></div>
									</div>
<div class="form-group">
									<label>Decoration:-</label></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="checkbox" name="light"  value="yes" />Light&nbsp;&nbsp;
										<input type="checkbox" name="chair"  value="yes" />Chair&nbsp;&nbsp;
										<input type="checkbox" name="stage"  value="yes" />Stage&nbsp;&nbsp;
										<input type="checkbox" name="flower"  value="yes" />Flowers
										<div class="validation"></div>
									</div>
<div class="form-group">
									<label>Food:-</label></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="checkbox" name="veg"  value="yes" />Veg&nbsp;&nbsp;
										<input type="checkbox" name="nonveg"  value="yes" />Non-Veg&nbsp;&nbsp;
										<input type="checkbox" name="veg_nonveg"  value="yes" />Veg + Non-Veg&nbsp;&nbsp;
										<div class="validation"></div>
									</div>
									<div class="form-group">
											<label>No of Chairs
										</label>
										<input type="text" name="no_of_chair" class="form-control" required  id="mobile" placeholder="No. Of Chairs"  />
										<div class="validation"></div>
									
									
										
									</div>
									
									<div class="form-group">
											<label>Address
										</label>
										<input type="text" name="address" class="form-control" required  id="mobile" placeholder="Venue Address"  />
										<div class="validation"></div>
									
									
										
									</div>
									<div class="form-group">
										<label>Contact Details
										</label>
										<input type="mobile" name="mobile" class="form-control" placeholder="1234-456-789"  
										pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}"
										required  />
										<div class="validation"></div>
									
									
										
									</div>
									<div class="form-group">
										<label>Email Id
										</label>
										<input type="email" name="email" class="form-control" required id="mobile" placeholder="E-mail "  />
										<div class="validation"></div>
									
									
										
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
								$id=$_SESSION['id'];
								echo $n=iud("INSERT INTO `event`( `userid`,`title`, `date_to`, `date_from`, `time_to`, `time_from`, `music`, `dance`,
								`cartoons`, `light`, `chair`, `stage`, `flower`, `no_of_chair`, `veg`, `nonveg`, `veg_nonveg`,
								`address`, `mobile`, `email`) VALUES ('$id','$title','$date_to','$date_from','$time_to','$time_from',
								'$music','$dance','$cartoon','$light','$chair','$stage','$flower','$no_of_chair','$veg','$nonveg',
								'$veg_nonveg','$address','$mobile','$email')");
								if($n==1)
								{
									echo"<script>alert(' Successful');
									window.location='view_event.php';
									</script>";
								}
								else
								{
									echo"<script>alert('Something Wrong Try Again');
									window.location='createevent.php';
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