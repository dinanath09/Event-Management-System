<?php
require_once"dbconfig.php";
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
					<!-- Uncomment below if you prefer to use an image logo -->
					<!-- <h1 class="text-light"><a href="#header"><span>Event's!</span></a></h1> -->
				<h1 style="font-weight:bold">Event's</h1>
				</div>
				<?php include"nav.php";?><!-- .main-nav -->
			</div>
		</header><!-- #header -->
		<!--==========================
			Intro Section
		============================-->
		<main id="main">
		</br>
		</br>
		</br>
			<!--==========================
				About Us Section
			============================-->
			<section id="contact">
				<div class="container-fluid">
					<div class="section-header">
						<h3>View Event</h3>
					</div>
					<table class="table table-responsive">
					<tr style="font-weight:bold">
					<td>S.no.</td>
					<td>Name/Title</td>
					<td>Music</td>
					<td>Dance</td>
					<td>Cartoon</td>
					<td>Light</td>
					<td>Chair</td>
					<td>Stage</td>
					<td>Flowers</td>
					<td>Veg</td>
					<td>Non-veg</td>
					<td>Veg + Non-veg</td>
					<td>No of chair</td>
					<td>Venue address</td>
					<td>Mobile</td>
					<td>Email</td>
					<td>Date </td>
					<td>Time </td>
					<td>Status </td>
					</tr>
					<?php
					$t=1;
					$result=select("select * from event where userid='".$_SESSION['id']."'");
					while($r=mysqli_fetch_array($result))
					{extract($r);
					?>
					<tr>
					<td><?=$t?></td>
					<td><?=$title?></td>
					<td><?=$music?></td>
					<td><?=$dance?></td>
					<td><?=$cartoons?></td>
					<td><?=$light?></td>
					<td><?=$chair?></td>
					<td><?=$stage?></td>
					<td><?=$flower?></td>
					<td><?=$veg?></td>
					<td><?=$nonveg?></td>
					<td><?=$veg_nonveg?></td>
					<td><?=$no_of_chair?></td>
					<td><?=$address?></td>
					<td><?=$mobile?></td>
					<td><?=$email?></td>
					<td><?=$date_to?> To <?=$date_from?></td>
					<td><?=$time_to?> To <?=$time_from?></td>
					<td><?php
					if($status==0) {echo"Pending";}
					if($status==11){echo"Team A";}
					if($status==22){echo"Team B";}
					if($status==33){echo"Team C";}
					?> </td></tr><?php
					}
					?>
					</table>
					
					
				</div>
			</section><!-- #contact -->
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
					<div class="row">
						<div class="col-lg-4 col-md-6 footer-info">
							<h3>Event's!</h3>
<p>Life is short, and if we enjoy every moment of every day, then we will be happy no matter what happens or what changes along the way.<br>
We're born alone, we live alone, we die alone. <br>
The journey is never ending. ...<br>
Do not dwell in the past, do not dream of the future,<br> concentrate the mind on the present moment.</p>
						</div>

						

					</div>
				</div>
			</div>
			<div class="container">
				<div class="copyright">
					
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