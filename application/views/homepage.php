<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Get A Roof</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>images/home.ico" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Chewy|Finger+Paint|Indie+Flower|Mogra|Pacifico|Pangolin|Permanent+Marker|Spectral" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/letterdrop.css">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/stylehome.css">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/filter.css">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/footer.css">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/font-style.css">

	<script type = 'text/javascript' src = "<?php echo base_url();?>js/jquery.counterup.min.js"></script>
	<script type = 'text/javascript' src = "<?php echo base_url();?>js/letter.js"></script>

	<!-- on hold check the naming  -->
	<!-- page refresh at see from top -->
	<script >
		$(document).ready(function(){
			$(this).scrollTop(0);
		});
	</script>
	<!-- input placeholder become heading -->
	<script>
		$(function() {$("body")
			.on("input propertychange", ".form-item",function(e) {
				$(this).toggleClass("form-item-filled",!! $(e.target).val());})
			.on("focus", ".form-item",function() {
				$(this).addClass("form-item-focused");})
			.on("blur", ".form-item",function() {
				$(this).removeClass("form-item-focused");});
		});

	</script>
	<!-- navbar js -->
	<!-- touch  this and i will kill u -->
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
	<style>


		@media  screen  and (min-width:650px){
			#yui1{
				font-size: 60px;

			}

		}
		@media  screen  and (max-width:650px){
			#yui1{
				font-size: 40px;
			}

		}
		#yui1{
			text-align: center;
			padding-top: 200px;
		}
		/*letter drop this is style*/
		.caption {
    height: 130px;
    overflow: hidden;
}

.caption h4 {
    white-space: nowrap;
}

.thumbnail img {
    width: 100%;
}

.ratings {
    padding-right: 10px;
    padding-left: 10px;
    color: #d17581;
}

.thumbnail {
    padding: 0;
}

.thumbnail .caption-full {
    padding: 9px;
    color: #333;
}

	</style>

	
	<!-- on hold putter  check the proper naming in it -->
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="80" >

	<!-- navbar start -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand"  href="#myPage">GetaRoof</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#about">ABOUT</a></li>
					<li><a href="#contact">CONTACT</a></li>
					<li><a href="<?php echo base_url() ?>/index.php/auth/signin">SIGN IN</a></li>
					<li><a href="<?php echo base_url() ?>/index.php/auth/signup">SIGN UP</a></li>
					<li><a href="<?php echo base_url() ?>/index.php/auth/aboutpage">LOG OUT</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- navbar ended -->

	<!-- this is the input start form   -->
	<div id="navup" class="container-fluid"><!-- this is only for navbar id -->
		<div id="yui1">
			<span >GetaRoof </span>

		</div>
		<!-- filter buttons -->
		<div class="subfilter" style=";">
			<div id="filterup"></div>

			<div id="filter">
				<form action="<?php echo base_url() ;?>index.php/Home/search" method="POST">
					<div class="container-fluid1 dropdown btn1">


						<select name="Gender" class="btn  btn-responsive xyz" style=""><!-- xyz for  styling -->
							<option value="Any" selected="true"> Any</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</div>
					<div class="container-fluid1 btn2">

						<select name="Distance" class="btn  btn-responsive xyz"  ><!-- xyz for  styling -->
							<option value="3">1-3 km</option>
							<option value="5">3-5 km</option>
							<option value="7" selected="true">5-7 km</option>
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
		<!-- this is input form end  -->



		<!-- trending property here -->

			 <section  id="make_differ_text" style="padding-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="section-heading">Trending Properties</p>
                    <h3 class="section-subheading text-muted">Where we found something good</h3>
                </div>
            </div>
        

           </div>
    </section>
                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?=base_url()?>images/first.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">₹3500</h4>
                                <h4><a href="#">A-6 , Zs/9 paschim vihar</a>
                                </h4>
                                <p>Three Room , Two Bathroom , Full furnished , Non AC ,  2 Cooler</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">5 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?=base_url()?>images/second.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">₹4000</h4>
                                <h4><a href="#">Fs - Shiva Enclave</a>
                                </h4>
                                <p>Three Room , Three Bathroom , Semi furnished , Non AC , One cooler</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">9 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?=base_url()?>images/aunty1.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">₹4800</h4>
                                <h4><a href="#">Rama-Raj Villa</a>
                                </h4>
                                <p>Two Bedroom , Two cooler , Full Furnished , Non AC , 2 Cooler</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">14 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- trending property here -->
		<!-- this is what  we make differ -->
		<div style="background-color: #EAE5F1; width: 100%;" class="container-fluid"><!-- background color -->
			<div><!-- difference box-->
				<p id="make_differ_text" style="margin-bottom: 100px ; margin-top: 100px">WE MAKE A DIFFERENCE</p>
			</div>
			<div class="row " style="text-align: center; margin-top: 40px; margin-bottom: 40px;"><!-- make a differ -->
				<div class="col-sm-4 " >
					<p id="differ_text"> Total Saved money</p>
					<div class="differ_border" style="padding-top: 10px; background-color: white;">
						<p class="rupee">&#8377;</p>
						<span class="counter differ_no" >80000</span> 
					</div>
				</div>

				<div class="col-sm-4">
					<p id="differ_text">Students</p>
					<div class="differ_border" style="background-color: white;">
						<span class="counter differ_no">75</span>
					</div>
				</div>

				<div class="col-sm-4">
					<p id="differ_text">Year target</p>
					<div class=" differ_border" style="padding-top: 10px ; background-color: white;">
						<p class="rupee">&#8377;</p>
						<span class="counter differ_no">100000</span>
					</div>
				</div>
			</div> <!-- make a differ -->

			<!-- here what  we make diifer wnd -->





			<!-- testominal  part start-->

			<div style="margin-bottom: 50px;"><!-- testimonial-->
				<p id="make_differ_text">TESTIMONIAL</p>
			</div>


			<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom: 50px;"><!-- carousel start -->
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner text-center" role="listbox">

					<div class="item active">



						<div class="col-sm-4">
							<img src="https://placekitten.com/g/125/125" style="border-radius: 50%; border-style: solid;  margin-top: 20px; margin-left: auto; margin-right: auto;">
						</div><!-- end image of testimonal here -->
						<div class="col-sm-6" >
							<p id="testimonal_text" style="text-align: center; font-weight: bold;"> <br> <br>FIRST This is good to  use this site , easy to use . provide inf about the lanndlord . This is very good  to use this site . and this is <br>helping and right now using is nice .... blah blah annd blah this </p>
							<p style="text-align: right; font-weight: bold;"> <br> <br> </p>
						</div><!-- end text here of testimonal one -->




					</div>

					<div class="item">



						<div class="col-sm-4">
							<img src="https://placekitten.com/g/125/128" style="border-radius: 50%; border-style: solid;  margin-top: 20px; margin-left: auto; margin-right: auto;">
						</div><!-- end image of testimonal here -->
						<div class="col-sm-6" >
							<p id="testimonal_text" style="text-align: center; font-weight: bold;"> <br> <br>SECOND This is good to  use this site , easy to use . provide inf about the lanndlord . This is very good  to use this site . and this is helping and right now using is nice .... blah blah annd blah  </p>
							<p style="text-align: right; font-weight: bold;"> <br> <br></p>
						</div><!-- end text here of testimonal one -->



					</div>

					<div class="item">



						<div class="col-sm-4">
							<img src="https://placekitten.com/g/125/127" style="border-radius: 50%; border-style: solid;  margin-top: 20px; margin-left: auto; margin-right: auto;">
						</div><!-- end image of testimonal here -->
						<div class="col-sm-6" >
							<p id="testimonal_text" style="text-align: center; font-weight: bold;"> <br> <br>THIRD This is good to  use this site , easy to use . <br>provide inf about the lanndlord . This is very good  to use this site . and this is helping and right now using is nice .... blah blah annd blah  </p>
							<p style="text-align: right; font-weight: bold;"> <br> <br> </p>


						</div><!-- end text here of testimonal one -->


					</div>

					<div class="item">


						<div class="col-sm-4">
							<img src="https://placekitten.com/g/125/126" style="border-radius: 50%; border-style: solid;  margin-top: 20px; margin-left: auto; margin-right: auto;">
						</div><!-- end image of testimonal here -->
						<div class="col-sm-6" >
							<p  id="testimonal_text" style="text-align: center; "> <br> <br>FORTH This is good to  use this site , easy to use . provide inf about the lanndlord . This is very good  to use this site . and this <br> is helping and right now using is nice .... blah blah annd blah  </p>
							<p style="text-align: right; font-weight: bold;"> <br> <br> </p>
						</div><!-- end text here of testimonal one -->



					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div><!-- carousel ended -->

			<!-- testomminal part end -->

		</div><!-- background color ended -->



		<div><!-- why use this-->
			<p id="make_differ_text" style="margin-bottom: 50px;margin-top: 50px;">WHY USE THIS ?</p>
		</div>

		<div class="row text-center slideanim">
			<div class="col-sm-4  whythis">
				<span class="glyphicon glyphicon-piggy-bank logo-small"></span>
				<br>
				<span id="use_this">FREE</span>
			</div>
			<div class="col-sm-4  whythis">
				<span class="glyphicon glyphicon-search logo-small"></span>
				<br>
				<span id="use_this">EASY TO USE</span>
			</div>
			<div class="col-sm-4  whythis">
				<span class="glyphicon glyphicon-certificate logo-small"></span>
				<br>
				<span id="use_this">COLLEGE AFFILIATED</span>
				
			</div>
		</div>

		<!-- why use this  end here -->
		<a name="about" id="about"></a>

		<div class="row "  style="margin-top: 50px; margin-bottom: 50px;" >
			<div class="col-sm-4 text-center">
				<span style="color: black" id="about_heading">ABOUT US</span>
			</div>
			<div class="col-sm-8" style="
			padding-left: 30px;
			padding-right: 30px;" id="about_font">
			GetaRoof is an innovative home rental platform that makes it easier for you to find your new home in just a few clicks , without paying any brokerage and sorting properties your institute wise hence saving a lot of time . Use our verified listing to ensure you find your home by contacting the owners directly.


			If you are a landlord interested in posting your apartments to GetaRoof, please contact us and we will get in touch to help you list the property.

            GetaRoof understands that not everyone has time & expertise to use computer to list a property. To solve this problem, we have made the listing even simpler.

            You just need to send us the information on WhatsApp on +91-8802907496 or +91-8285626792 and we will create your login for you! No need of a computer or calling anyone. Our Customer Service Representative will call you and take whatever info is required. Nothing can be simpler and quicker than this!

            And tenants, happy hunting and get in touch with us to let us know what else we can help!


			 <a href="<?php echo base_url() ?>/index.php/Rock">More</a>

			.
		</div>
	</div>

	<!-- contact -->
	<div id="contact">
		<br> <br>
		<div class="row slideanim" >
			<a name="contact"></a>
			<div class="col-md-6 inputcontact" >


				<p class="text-center" style=" font-size: 40px;
				font-family: 'Mogra', cursive;">CONTACT</p>
				<form>
					<div class="form-item">
						<label for="fname">NAME</label>
						<input type="text" id="fname" name="fname" placeholder="NAME " autocomplete="off" style="outline: 0;">
					</div>
					<div class="form-item">
						<label for="email">EMAIL ID</label>
						<input type="text" id="lname" name="email" placeholder="xyz@abc.com" autocomplete="off" style="outline: 0;">
					</div>
					<div class="form-item">
						<label for="email">MESSAGE</label>
						<textarea placeholder="say something" class="messagetext" autocomplete="off" style="outline: 0;"></textarea>
					</div>
					<div>
						<a href="mailto:tuskibansal@gmail.com"><input type="submit" name="SUBMIT"></a>
					</div>
				</form>
			</div>
			<div class="col-md-6 inputcontact text-center">
				<p style=" font-size: 40px;
				font-family: 'Mogra', cursive;">OUR MOTO</p> 
				<p>ssdjs sjdsd ssjdhasj ssjdhas  <br> sjd jsadbasd </p>
			</div>
		</div>
	</div>
	<!-- contact end here -->


	<!-- footer start -->


</div><!-- navbar id end to  up -->



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script> 


<!-- script of what make differ -->
<script src="<?= base_url('js/jquery.counterup.min.js')?>"></script> 
<script>
	jQuery(document).ready(function( $ ) {
		$('.counter').counterUp({
			delay: 10,
			time: 1000
		});
	});
</script>
<!-- script of what make  differ end -->


<!-- srcipt of easy scroll -->
<script>$('a[href*="#"]:not([href="#"])').click(function() {
		 if( $(this).attr("href")=="#myCarousel") return;//This is the exception
		 if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
		 	var target = $(this.hash);
		 	target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		 	if (target.length) {
		 		$('html, body').animate({
		 			scrollTop: target.offset().top
		 		}, 1000);
		 		return false;
		 	}
		 }
		});
	</script>
	<!-- script of easy scroll end -->

	<!-- scroll it above js ( slideanim ) -->

	<script>

		$(window).scroll(function() {
			$(".slideanim").each(function(){
				var pos = $(this).offset().top;

				var winTop = $(window).scrollTop();

				if (pos < winTop + 600) {
					$(this).addClass("slide");
				}
			});
		});
	</script>
	<!-- scroll it above js end -->


</body>
</html>