<!DOCTYPE html>
<html>
<head>
	<title>Get_A_Roof-search</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="home.ico"/>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/navstyle.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/footer.css">
	<link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>images/home.ico" />
	<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans" rel="stylesheet">
	<style>
		.navbar{
			background-color: #f35a2d;
		}
	</style>
	<script>
		$(document).ready(function(){
			$("#navup").click(function(){
				$(".collapse").slideUp("slow");
			});
			$(".navbar .navbar-header").click(function(){
				$(".collapse").slideToggle("slow");
			});
		});
	</script>
</head>
<body>
	
	<?php 
		if($this->session->isloggedin)
			{
				//navbar when user loged in	
				echo '
				<nav class="navbar navbar-default navbar-fixed-top" style="background-color: #F35A2D">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						</button>
						<a class="navbar-brand"  href="';?><?php echo base_url() ?><?php echo '/index.php/Home">GetaRoof</a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
							<li><a  href="#about">ABOUT US</a></li>
							<li><a href="#contact">CONTACT US</a></li>
							<li><a href="https://goo.gl/forms/9FfU0ZoVkMKQoVaN2">POST MY PROPERTY</a></li>
	
							<li><a href="';?><?php echo base_url() ?><?php echo '/index.php/auth/logout">LOG OUT</a></li>
							<li><a href="';?><?php echo base_url() ?><?php echo '/index.php/auth/signup">SIGN UP</a></li>
							
						</ul>
					</div>
				</div>
			</nav>';




						}
			else if(!$this->session->isloggedin || isset($_SESSION['isloggedin']))
			{	echo '
				<nav class="navbar navbar-default navbar-fixed-top" style="background-color: #F35A2D">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						</button>
						<a class="navbar-brand"  href="';?><?php echo base_url() ?><?php echo '/index.php/Home">GetaRoof</a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#about">ABOUT US</a></li>
							<li><a href="#contact">CONTACT US</a></li>
							<li><a href="https://goo.gl/forms/9FfU0ZoVkMKQoVaN2">POST MY PROPERTY</a></li>
							<li><a href="';?><?php echo base_url() ?><?php echo '/index.php/auth/signin">SIGN IN</a></li>
							<li><a href="';?><?php echo base_url() ?><?php echo '/index.php/auth/signup">SIGN UP</a></li>
							
						</ul>
					</div>
				</div>
			</nav>';
				//navbar when user logged out

			}



	 ?>
	
	<div class="subfilter" style="padding-top: 100px;">
		<div id="filterup"></div>

		<div id="filter">
			<form action="<?php echo base_url(); ?>index.php/Home/search" method="POST">
				<div class="container-fluid1 dropdown btn1">


					<select name="Gender" class="btn  btn-responsive xyz" style=""><!-- xyz for  styling -->
						<option value="Any">Gender : Any</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
				<div class="container-fluid1 btn2">

					<select name="Distance" class="btn  btn-responsive xyz"  ><!-- xyz for  styling -->
						

						<option value="3">1-3 km</option>
						<option value="5">3-5 km</option>
						<option value="7">5-7 km</option>
					</select>
				</div>
				<div class="container-fluid1 btn3">


					<select name="Budget" class="btn  btn-responsive xyz" ><!-- xyz for  styling -->

						<option value="10000">Budget : All</option>
						<option value="4000">Under 4000</option>
						<option value="5000">Under 5000</option>
						<option value="6000">Under 6000</option>

					</select>
				</div>
				<div class="container-fluid1 btn4">

					<input type="submit" name="SUBMIT" class=" btn" id="submitbutton2" >
				</div>
			</form>
		</div>

		<div id="filterdown"></div>
	</div>


</body>
</html>