<!DOCTYPE html>
<html>
<head>
	<title>GetaRoof-Details</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>images/home.ico" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Chewy|Finger+Paint|Indie+Flower|Mogra|Pacifico|Pangolin|Permanent+Marker|Spectral" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/footer.css">
	<style>
		html{
			overflow-x: hidden;
		}
		body{
			overflow-x: hidden;
		}
		/*navbar ki startig*/
		.navbar {
			margin-bottom: 0;
			/* background-color: #292c2f;*/
			background-color: #F35A2D;
			z-index: 9999;
			border: 0;
			font-size: 12px !important;
			line-height: 1.42857143 !important;
			letter-spacing: 4px;
			border-radius: 0;
			font-weight: bold;
		}

		.navbar li a, .navbar .navbar-brand {

			color: #fff !important;
		}

		.navbar-nav li a:hover, .navbar-nav li.active a {
			/* color: #6F1EF4 !important;*/
			color: #292c2f !important;
			background-color: #FCFAFF !important;
			font-size: 16px;
		}

		.navbar-default .navbar-toggle {
			border-color: transparent;
			color: #fff !important;
		}
		/*navbar ki ending */

		#question{
			font-size: 25px;
			font-weight: bold;
		}
		#image_box{
			display: flex;
			flex-wrap: wrap;
			padding-top: 40px;
		}
		#info{
			display: flex;
			flex-wrap: wrap;
		}
		
		@media screen and (min-width: 1150px){
			#first{
				order: 0;
				width: 30%;
			}
			#image_box{
				order: 1;
				width: 40%;
			}
			#detail_box{
				order: 2;
				width: 30%;
			}
		}

		@media screen and (max-width: 1150px){
			#first{
				order: 0;
				width: 20%;
			}
			#image_box{
				order: 1;
				width: 60%;
			}
			#detail_box{
				order: 2;
				width: 20%;
			}
		}
		@media  screen  and (min-width:650px){
			
			#image1{
				order: 0;
				width: 50%;
				border-radius: 8px;
				
			}
			#image2{
				order: 1;
				width: 50%;
				border-radius: 8px;
			}
			#image3{
				order: 2;
				width: 50%;
				border-radius: 8px;
			}
			#image4{
				order: 3;
				width: 50%;
				border-radius: 8px;
			}
		}
		@media  screen  and (max-width:650px){
			#image_box{
				order: 0;
				width: 100%;
			}
			#detail_box{
				order: 1;
				width: 100%;
			}
			#image1{
				order: 0;
				width: 50%;
			}
			#image2{
				order: 1;
				width: 50%;
			}
			#image3{
				order: 2;
				width: 50%;
			}
			#image4{
				order: 3;
				width: 50%;
			}
		}
		@media  screen  and (max-width:450px){
			#image_box{
				order: 0;
				width: 100%;
			}
			#detail_box{
				order: 1;
				width: 100%;
			}
			#image1{
				order: 0;
				width: 100%;
				padding-bottom: 5px;
			}
			#image2{
				order: 1;
				width: 100%;
				padding-bottom: 5px;
			}
			#image3{
				order: 2;
				width: 100%;
				padding-bottom: 5px;
			}
			#image4{
				order: 3;
				width: 100%;
				padding-bottom: 5px;
			}

		}

		#get_details{
			display: flex;
			flex-wrap: wrap;
		}
		@media  screen  and (min-width:1000px){
			#upper{
				order: 0;
				width: 10%;
			}
			#info1{
				order: 1;
				width: 40%;
			}
			#info2{
				order: 2;
				width: 40%;
			}
			#lower{
				order: 3;
				width: 10%;
			}
		}
		@media  screen  and (max-width:1000px){

			#info1{
				order: 0;
				width: 50%;
			}
			#info2{
				order: 1;
				width: 50%;
			}
			
		}
		@media  screen  and (max-width:1000px){
			#info1{
				order: 0;
				width: 100%;
			}
			#info2{
				order: 1;
				width: 100%;
			}
		}

		label.btn span {
			font-size: 1.5em ;
		}

		label input[type="radio"] ~ i.fa.fa-circle-o{
			color: #c8c8c8;    display: inline;
		}
		label input[type="radio"] ~ i.fa.fa-dot-circle-o{
			display: none;
		}
		label input[type="radio"]:checked ~ i.fa.fa-circle-o{
			display: none; outline: 0; 
		}
		label input[type="radio"]:checked ~ i.fa.fa-dot-circle-o{
			color: #7AA3CC;    display: inline; outline: 0; 
		}
		label:hover input[type="radio"] ~ i.fa {
			color: #7AA3CC;
			outline: 0; 
		}

		div[data-toggle="buttons"] label.active{
			color: #7AA3CC;
			outline: 0; 
		}


		div[data-toggle="buttons"] label {
			display: inline-block;
			padding: 6px 12px;
			margin-bottom: 0;
			font-size: 14px;
			font-weight: normal;
			line-height: 2em;
			text-align: left;
			white-space: nowrap;
			vertical-align: top;
			cursor: pointer;
			background-color: none;
			border: 0px solid 
			#c8c8c8;
			border-radius: 3px;
			color: #c8c8c8;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			-o-user-select: none;
			user-select: none;
			outline: 0; 
		}

		div[data-toggle="buttons"] label:hover {
			color: #7AA3CC;
			outline: 0; 
		}

		div[data-toggle="buttons"] label:active, div[data-toggle="buttons"] label.active {
			-webkit-box-shadow: none;
			box-shadow: none;
			outline: 0; 
		}


		/*#image1 ,#image2,#image3,#image4{
			
			border:solid;
			border-color: #f35a2d;
		}
		*/
		#question{
			font-family: 'Alegreya Sans SC', sans-serif;	
		}
		#details{

   font-size: 40px; color: black; 
 font-family: 'Mogra', cursive;
		}
		#answer{
			color: #f35a2d;
			font-family: 'Quattrocento Sans', sans-serif;
			font-size: 18px;
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

	<div id="info">
		<div id="first"></div>
		<div id="image_box" class="text-center" >
			<div id="image1">
				<img src="<?= base_url('assets/id_'.$id.'/1.jpg')?>" alt="image1" class="img-responsive img-thumbnail">
			</div>
			<div id="image2" >
				<img src="<?= base_url('assets/id_'.$id.'/2.jpg')?>" alt="image2" class="img-responsive img-thumbnail">
			</div>
			<div id="image3" >
				<img src="<?= base_url('assets/id_'.$id.'/3.jpg')?>" alt="image3" class="img-responsive img-thumbnail">
			</div>
			<div id="image4" >
				<img src="<?= base_url('assets/id_'.$id.'/4.jpg')?>" alt="image4" class="img-responsive img-thumbnail">
			</div>
		</div>
		<div id="detail_box" >
			
		</div>
	</div>

	<p class="text-center" id="details">Details</p>
	<?php  

/*$food = "1";
$water = "0";
$water_facility = "0";
$filter = "0";
$Furnishing = "0";
$Electricity = "0";
$gyser = "0";
$cooler = "0";
$AC = "0";
$cleaning = "0";
$wifi = "0";
$REFRIGERATOR = "0";
$tv = "0";
$power = "0";
*/
//echo "hey ".$food;

?>
<div id="get_details">
	<div id="upper"></div>
	<div id="info1" class="text-center"> 
			<span id="question">Rent</span> <span id="answer"><?php echo $rent;?></span><br><br>
		<span id="question">Security Money</span><span id="answer"><?php echo $security_money;?></span><br><br>
		<span id="question">Address </span> <span id="answer"><?php echo $address;?></span><br><br>
		<!-- <span id="question">Go to direction </span><span id="answer"> go  to</span><br><br> -->
		<span id="question">free beds </span><span id="answer"><?php echo $free_beds;?></span><br><br>
		<span id="question">Food  facility</span> 

		
			<div class="row">
				<div class="col-xs-12">
					<div class="btn-group " data-toggle="buttons">

						<!-- <label class="btn" id="food"> -->
							<input id="answer" type="radio" name='food' <?=$food=="1" ? "checked" : ""?> disabled> <span id="answer" >  Yes</span>
						<!-- </label> -->
						<!-- <label class="btn" id="food"> -->
							<input  id="answer" type="radio" name='food' <?=$food=="0" ? "checked" : ""?> disabled><span  id="answer" > No</span>
						<!-- </label> -->
					</div>

				
			</div>
		</div>

		<br>
		<span id="question">Security Money</span><?php  echo $security_money;?><br>

		<span id="question">Drinking Water</span> 
		
			<div class="row">
				<div class="col-xs-12">
					<div class="btn-group " data-toggle="buttons">

						<!-- <label class="btn" id="water"> -->
							<input id="answer"  type="radio" name='water' <?=$drinking_water=="1" ? "checked" : ""?> disabled><span id="answer" >  Yes</span>
						<!-- </label> -->
						<!-- <label class="btn" id="water"> -->
							<input  id="answer" type="radio" name='water'<?=$drinking_water=="0" ? "checked" : ""?> disabled><!-- <i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> --><span id="answer" > No</span>
						<!-- </label> -->
					</div>

				
			</div>
		</div>
		<br>
		<span id="question">Water filter</span>
		<div class="row">
			<div class="col-xs-12">
				<div class="btn-group " data-toggle="buttons">

					<!-- <label class="btn"> -->
						<input type="radio" name='water_facility' <?=$filter_prov=="1" ? "checked" : ""?> disabled><!-- <i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> --> <span id="answer" >  Yes</span>
					<!-- </label> -->
					<!-- <label class="btn"> -->
						<input type="radio" name='water_facility' <?=$filter_prov=="0" ? "checked" : ""?> disabled><!-- <i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> --><span id="answer" > No</span>
					<!-- </label> -->
				</div>

			
		</div>
	</div>
	<br>
	
	<span id="question">Furnishing </span>
	
		<div class="row">
			<div class="col-xs-12">
				<div class="btn-group " data-toggle="buttons">

					<!-- <label class="btn"> -->
						<input type="radio" name='Furnishing' <?=$furnishing_type=="1" ? "checked" : ""?> disabled><!-- <i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> --> <span id="answer" >  Full</span>
					<!-- </label> -->
					<!-- <label class="btn"> -->
						<input type="radio" name='Furnishing' <?=$furnishing_type=="2" ? "checked" : ""?> disabled><!-- <i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> --><span id="answer" > Semi</span>
					<!-- </label> -->
					<!-- <label class="btn"> -->
						<input type="radio" name='Furnishing' <?=$furnishing_type=="3" ? "checked" : ""?> disabled><!-- <i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> --><span  id="answer" > No</span>
					<!-- </label> -->
				</div>

			
		</div>
	</div> <br>
	<span id="question">Electricity bill</span> 
	
		<div class="row">
			<div class="col-xs-12">
				<div class="btn-group " data-toggle="buttons">

					<!-- <label class="btn"> -->
						<input type="radio" name='Electricity' <?=$elec_bill=="1" ? "checked" : ""?> disabled><!-- <i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i>  --><span id="answer" >  Included</span>
					<!-- </label> -->
					<!-- <label class="btn"> -->
						<input type="radio" name='Electricity' <?=$elec_bill=="0" ? "checked" : ""?> disabled><!-- <i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> --><span id="answer" > No</span>
					<!-- </label> -->
				</div>

			
		</div>
	</div><br>
	


</div>
<div id="info2" class="text-center" >
	<span id="question">AC</span><br>
	<input type="radio" name='AC' <?=$ac=="1" ? "checked" : ""?> disabled><span id="answer" >  Yes</span>
	<input type="radio" name='AC' <?=$ac=="0" ? "checked" : ""?> disabled><span id="answer" > No</span>
	<br>

<br>
<span id="question">room cleaning</span> 
<br>
<input type="radio" name=' cleaning' <?=$room_cleaning=="1" ? "checked" : ""?> disabled>
<span id="answer" >  Yes</span>
	<input type="radio" name=' cleaning'<?=$room_cleaning=="0" ? "checked" : ""?> disabled>
<span id="answer" > No</span>
<br>
<br> 
<span id="question"> gyser </span>
	
		<div class="row">
			<div class="col-xs-12">
				<div class="btn-group " data-toggle="buttons">

					<!-- <label class="btn"> -->
						<input type="radio" name='gyser' <?=$geyser=="1" ? "checked" : ""?> disabled><!-- <i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i>  --><span id="answer" >  Yes</span>
					<!-- </label> -->
					<!-- <label class="btn"> -->
						<input type="radio" name='gyser' <?=$geyser=="0" ? "checked" : ""?> disabled><!-- <i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> --><span id="answer" > No</span>
					<!-- </label> -->
				</div>

			</div>
		
	</div>
	<br>

<span id="question">cooler</span> 
	
		<div class="row">
			<div class="col-xs-12">
				<div class="btn-group " data-toggle="buttons">

					<!-- <label class="btn"> -->
						<input type="radio" name='cooler' <?=$cooler=="1" ? "checked" : ""?> disabled><!-- <i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> --> <span id="answer" >  Yes</span>
					<!-- </label> -->
					<!-- <label class="btn"> -->
						<input type="radio" name='cooler' <?=$cooler=="0" ? "checked" : ""?> disabled><!-- <i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> --><span id="answer" > No</span>
					<!-- </label> -->
				</div>

			
		</div>
	</div>
	<br>
<span id="question">wifi</span>
<br>
<input type="radio" name='wifi' <?=$wifi=="1" ? "checked" : ""?> disabled>
<span id="answer" >  Yes</span>
<input type="radio" name='wifi' <?=$wifi=="0" ? "checked" : ""?> disabled>
<span id="answer" > No</span>
<br>
<br>
<span id="question">tv</span> <br>
<input type="radio" name='tv' <?=$tv=="1" ? "checked" : ""?> disabled><span id="answer" >Yes</span>
<input type="radio" name='tv' <?=$tv=="0" ? "checked" : ""?> disabled><span id="answer" >No</span>
<br>
<br>
<span id="question">REFRIGERATOR</span> 
<div class="row">
	<div class="col-xs-12">
		<div class="btn-group " data-toggle="buttons">

			<!-- <label class="btn"> -->
				<input type="radio" name='REFRIGERATOR' <?=$fridge=="1" ? "checked" : ""?> disabled><!-- <i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i>  --><span id="answer" >  Yes</span>
			<!-- </label> -->
			<!-- <label class="btn"> --> 
				<input type="radio" name='REFRIGERATOR' <?=$fridge=="0" ? "checked" : ""?> disabled><!-- <i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> --><span id="answer" > No</span>
			<!-- </label> -->
		</div>

	</div>

</div> <br>
<span id="question">power backup</span>

	<div class="row">
		<div class="col-xs-12">
			<div class="btn-group " data-toggle="buttons">

				<!-- <label class="btn"  id="myRadio1" > -->
					<input type="radio"  id="myRadio" name='power' <?=$power_backup=="1" ? "checked" : ""?> disabled ><!-- <i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> --> <span id="answer" >  Yes</span>
				<!-- </label> -->
				<!-- <label class="btn"  id="myRadio1" > -->
					<input type="radio"  id="myRadio" name='power' <?=$power_backup=="0" ? "checked" : ""?> disabled><!-- <i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> --><span id="answer" > No</span>
				<!-- </label> -->
			</div>

		
	</div>
</div><br>

<span id="question"><span id="answer">Number Of Bathroom</span> <?php echo $no_of_bathroom; ?></span><br>


</div>
<div id="lower"></div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script> 


<!-- script of what make differ -->
<script src="<?= base_url('js/jquery.counterup.min.js')?>"></script> 

<script>
	$(window).bind("load", function() {
		$("myRadio1").change(function() {
			$("#myRadio").attr('disabled', true);
		});
	});
</script>
</body>

</html>