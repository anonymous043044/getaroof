<!DOCTYPE html>
<html>
<head>
	<title>navopen</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>images/home.ico"/>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="navstylae.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/fake.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/font-style.css">
	<style>
		#rent{
			font-size: 40px;
			font-family: 'Mogra', cursive;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="#myPage">Logo</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo base_url() ?>/index.php/Trial/index">HOME</a></li>
				<li><a href="#">My_Name</a></li>
				<li><a href="logout.php">LOG OUT</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div id="main">
		<div id="heading">
			<div id="rent">
				main 
			</div>
			<div id="address">
				Address
			</div>
			<div id="goto">
				Rent
			</div>
		</div>
	</div>
	<div id="image_info" style="margin-bottom: 100px;">
		<div id="images">
			<div id="image1" class="center-block img-thumbnail" >
				<img src="https://placekitten.com/g/320/220" class="img-responsive" >
			</div>
			<div id="image2" class="center-block img-thumbnail">
				<img src="https://placekitten.com/g/320/220" class="img-responsive">
			</div>
			<div id="image3" class="center-block img-thumbnail">
				<img src="https://placekitten.com/g/320/220" class="img-responsive">
			</div>
			<div id="image4" class="center-block img-thumbnail">
				<img src="https://placekitten.com/g/320/220" class="img-responsive">
			</div>
		</div>

		<div id="details">
			Food <br>
			Water <br>
			Secuity Money <br>
			Furnishing  <br>
			Electricity bill <br>
			etc1 <br>
			etc2	<br>
			etc3 		<br>
			gyser <br>
			coole <br>
			ac <br>
			
		</div>



	</div>
	
	<!-- footer start -->
		<footer class="footer-distributed">

			<div class="footer-right">

				<a href="https://www.facebook.com/tuskibansal"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a>
				<a href="https://www.linkedin.com/mynetwork/"><i class="fa fa-linkedin"></i></a>
				<a href="https://github.com/anonymous043044/startup-bvp1.1"><i class="fa fa-github"></i></a>

			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a href="<?php echo base_url() ?>/index.php/Trial/index">Home</a>
					·
					<a href="#about">About</a>
					·
					<a href="#contact">Contact</a>
					·
					<a href="signup/signin.php">Log Out</a>
					
					
				</p>

				<p>Company Name &copy; 2017</p>
			</div>

		</footer>
		<!-- footer end  here -->
	
</body>
</html>