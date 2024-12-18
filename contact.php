<?php
	if (!empty($_POST)) {
		$dbhost="localhost";
		$dbuser="gallery_user";
		$dbpass="password";
		$dbname="gallery_contact";
		$connection= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
		
		if (mysqli_connect_errno()) {
			die ("Database connection failed: ".mysqli_connect_error()."(".mysqli_connect_errno().")");
		}

		switch($_POST['action']) {
			case "message":
				$name = $_POST['name'];
				$email = $_POST['email'];
				$subject = $_POST['subject'];
				$message = $_POST['message'];

				$sql="INSERT INTO message_info (name, email, subject, message) VALUES (
					'{$connection->real_escape_string($name)}',
					'{$connection->real_escape_string($email)}',
					'{$connection->real_escape_string($subject)}',
					'{$connection->real_escape_string($message)}')";

				$insert=$connection->query($sql);
				if ($insert == TRUE) {
					
				} else {
					die ("Error: {$connection->errno} : {connection->error}");
				}
				break;

			case "newsletter":
				$email = $_POST['email'];

				$sql="INSERT INTO newsletter_emails (email) VALUES (
					'{$connection->real_escape_string($email)}')";

				$insert=$connection->query($sql);
				if ($insert == TRUE) {
					
				} else {
					die ("Error: {$connection->errno} : {connection->error}");
				}
				break;
		}

		$connection->close();
	}
?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Art Gallery | Contact</title>

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
				  		<div class="col-6 top-head-left">
				  		</div>
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
								Contact Us
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.html"> Contact Us</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						<p>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.6715336065695!2d-78.89897408449278
							!3d43.94547107911229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d51b9a6af8ae7f%3A0x2a373a195937
							16f5!2sOntario%20Tech%20University!5e0!3m2!1sen!2sca!4v1638667860770!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								
								<div class="contact-details">
									<h5>Oshawa, ON, Canada</h5>
									<p> 2000 Simcoe Street North Oshawa, Ontario L1G 0C5 Canada</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>+1 905-721-8668</h5>
									<p>Mon ~ Fri: 9AM - 6PM</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>ask@fineart.com</h5>
									<p>Ask us anything!</p>
								</div>
							</div>														
						</div>
						<div class="col-lg-8">
							<form method="post" action="">
								<label for="name">Name:</label><br>
								<input type="text" id="name" name="name" required><br>
								<label for="email">Email:</label><br>
								<input type="email" id="email" name="email" required><br>
								<label for="subject">Subject:</label><br>
								<input type="text" id="subject" name="subject" required><br>
								<label for="message">Message:</label><br>
								<textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>
								<input type="hidden" name="action" value="message">
								<input type="submit" value="Submit">
							</form>


						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

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
										<input type="hidden" name="action" value="newsletter">
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