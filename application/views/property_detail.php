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
		#detail  span{
			font-size: 30px;
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
					<li><a href="<?php echo base_url() ?>/index.php/home">HOME</a></li>
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

			<span>Food  facility</span> yes or no <br>
			<span>Secuity Money</span> amount<br>
			<span>Drinking Water</span> yes /no<br>
			<span>Water filter</span> y/n
			<span>water availability</span>(no of hours)
			<span>Furnishing </span>full/semi/no <br>
			<span>Electricity bill</span> included/not<br>
			<span>gyser </span>yes/no <br>
			<span>cooler</span> yes/no <br>
			<span>AC</span>  yes/no<br>
			<span>room cleaning</span> <br>
			<span>wifi</span><br>
			<span>tv</span><br>
			<span>REFRIGERATOR</span>  <br>
			<span>power backup</span><br>
			<span>power backup</span><br>
			<span>no of bathroom</span><br>
			<span>total no of beds </span><br>
			<span>free beds </span><br>
			
			goto this address link 
			<div>
				owner details
				name
				phone no (intent to phone no)
				email NOT AVAILABLE
			</div>		
			<div>	we suggest you to contact owner on call before visiting.</div>
			<div>option of reporting , report wrong info/broker </div>

		</div>



	</div>
	
	
	
</body>
</html>