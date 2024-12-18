<?php
//Create a database connection
if (!empty($_POST)) {

	$dbhost="localhost";
	$dbuser="gallery_user";
	$dbpass="password";
	$dbname="gallery_contact";
	$connection= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if (mysqli_connect_errno()) {
		die ("Database connection failed: ".mysqli_connect_error()."(".mysqli_connect_errno().")");
	}

	$email = $_POST['email'];

	$sql="INSERT INTO newsletter_emails (email) VALUES (
		'{$connection->real_escape_string($email)}')";

	$insert=$connection->query($sql);
	if ($insert == TRUE) {
		
	} else {
		die ("Error: {$connection->errno} : {connection->error}");
	}
	$connection->close();
}
?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Art Gallery | Gallery</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--CSS-->
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		</head>
		<body>
			<header id="header" id="home">
			  	<div class="container header-top">
			  		<div class="row">
				  		<div class="col-6 top-head-left"></div>
				  		<div class="col-6 top-head-right">
				  			<ul>
		  						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				  			</ul>
				  		</div>			  			
			  		</div>
			  	</div>
			  	<hr>
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
					        <li><a href="index.php">Home</a></li>
						    <li><a href="about.php">About</a></li>
						    <li><a href="gallery.php">Gallery</a></li>
						    <li><a href="event.php">Events</a></li>
						    <li><a href="ticket.php">Ticket</a></li>
						    <li><a href="contact.php">Contact</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Art Gallery				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="gallery.html"> Gallery</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	


			<!-- Start gallery Area -->
			<section class="gallery-area section-gap gallery-page-area" id="gallery">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Our Exhibition Gallery</h1>
								<p>  
									Our Art advisors will help you find the perfect artwork for your walls. It's easy and free.
								</p>
							</div>
						</div>
					</div>						
					<div id="grid-container" class="row">
						<a class="single-gallery" href="img/g1.jpg"><img class="grid-item" src="img/g1.jpg"></a>
						<a class="single-gallery" href="img/g2.jpg"><img class="grid-item" src="img/g2.jpg"></a>
						<a class="single-gallery" href="img/g3.jpg"><img class="grid-item" src="img/g3.jpg"></a>
						<a class="single-gallery" href="img/g4.jpg"><img class="grid-item" src="img/g4.jpg"></a>
						<a class="single-gallery" href="img/g5.jpg"><img class="grid-item" src="img/g5.jpg"></a>
						<a class="single-gallery" href="img/g6.jpg"><img class="grid-item" src="img/g6.jpg"></a>
						<a class="single-gallery" href="img/g7.jpg"><img class="grid-item" src="img/g7.jpg"></a>
						<a class="single-gallery" href="img/g8.jpg"><img class="grid-item" src="img/g8.jpg"></a>
						<a class="single-gallery" href="img/g9.jpg"><img class="grid-item" src="img/g9.jpg"></a>
						<a class="single-gallery" href="img/g10.jpg"><img class="grid-item" src="img/g10.jpg"></a>
						<a class="single-gallery" href="img/g11.jpg"><img class="grid-item" src="img/g11.jpg"></a>
						<a class="single-gallery" href="img/g12.jpg"><img class="grid-item" src="img/g12.jpg"></a>
						<a class="single-gallery" href="img/g13.jpg"><img class="grid-item" src="img/g13.jpg"></a>
						<a class="single-gallery" href="img/g14.jpg"><img class="grid-item" src="img/g14.jpg"></a>
						<a class="single-gallery" href="img/g15.jpg"><img class="grid-item" src="img/g15.jpg"></a>	
						<a class="single-gallery" href="img/g16.jpg"><img class="grid-item" src="img/g16.jpg"></a>							
					</div>	
				</div>	
			</section>
			<!-- End gallery Area -->

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>In Association With</h6>
									<img src="img/ot_logo" width="50%" height="50%">
								<p class="footer-text">Gallery Fine Arts | All rights reserved</p>
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay up to date with our latest news</p>
									<form method="post" action="">
										<input class="form-control" name="email" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
										<input type="submit" value="Submit" class="click-btn btn btn-default">
									</form>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<div class="footer-social d-flex align-items-center">
									<a href="#" class="fa fa-facebook"></a>
									<a href="#" class="fa fa-twitter"></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>	
			<script src="js/imagesloaded.pkgd.min.js"></script>
			<script src="js/justified.min.js"></script>					
			<script src="js/jquery.nice-select.min.js"></script>				
			<script src="js/main.js"></script>	
		</body>
	</html>



