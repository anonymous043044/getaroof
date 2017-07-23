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
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
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


	<!-- navbar start -->
	
	<!-- navbar ended -->

	<!-- this is the input start form   -->
	<div id="navup" class="container-fluid"  ><!-- this is only for navbar id -->
		<div class="row" id="yui1" style="background-color: #F35A2D;  " >
			<span  style="color: white;">GetaRoof </span>

		</div>
		<!-- filter buttons -->
		<div class="subfilter row" style="background-color: #F35A2D; margin-top: 0px;  margin-bottom: 0px; padding-top: 50px; padding-bottom: 230px;">
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
					<?php  if($this->session->isloggedin)
						{
							echo '<input type="submit" name="SUBMIT" class=" btn" id="submitbutton2" >';
						}
						else if(!$this->session->isloggedin || isset($_SESSION['isloggedin']))
						{
							echo '<input type="submit" name="SUBMIT" class=" btn" id="submitbutton2" disabled >';	
								
						}  
						?>
						
					</div>
				</form>
			</div>

			<div id="filterdown"></div>
		</div>
		<!-- this is input form end  -->



		<!-- trending property here -->

			 <section  id="make_differ_text" style="padding-top: 100px; padding-bottom: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="section-heading">Trending Properties</p>
                    
                </div>
            </div>
        

           </div>
    </section>
                <div class="row" style="padding-bottom: 50px;">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?=base_url()?>images/first.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">₹3500/p</h4>
                                <h4><a href="#">A-6 , Zs/9 paschim vihar</a>
                                </h4>
                                <p>Three Room , Two Bathroom , Full furnished , Non AC ,  2 Cooler</p>
                            </div>
                            <div class="ratings">
                                <!-- <p class="pull-right">5 reviews</p> -->
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
                            <img src="http://via.placeholder.com/350x280" alt="">
                            <div class="caption">
                                <h4 class="pull-right">Blank</h4>
                                <h4><a href="#">Blank</a>
                                </h4>
                                <p>Your Description will be added here</p>
                            </div>
                            <div class="ratings">
                                <!-- <p class="pull-right">0 reviews</p> -->
                                <p>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?=base_url()?>images/aunty1.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">₹4800/p</h4>
                                <h4><a href="#">Rama-Raj Villa</a>
                                </h4>
                                <p>Two Bedroom , One Bathroom , Full Furnished , Non AC , 2 Cooler</p>
                            </div>
                            <div class="ratings">
                                <!-- <p class="pull-right">14 reviews</p> -->
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
		<div style="background-color: #F35A2D; padding-bottom: 100px; " class="container-fluid row"><!-- background color -->
			<div><!-- difference box-->
				<p id="make_differ_text" style="margin-bottom: 100px ; color: white; margin-top: 100px">We Make A Difference</p>
			</div>
			<div class="row " style="text-align: center; margin-top: 40px; margin-bottom: 40px;"><!-- make a differ -->
				<div class="col-sm-4 " >
					<p id="differ_text" style="color: white;" > Total Saved money</p>
					<div class="differ_border" style="padding-top: 10px; width: 150px; height: 150px; background-color: white;">
						<p class="rupee" style="font-size: 30px;">&#8377;</p>
						<span class="counter differ_no" style="font-size: 30px; width: 32%" >80000</span> 
					</div>
				</div>

				<div class="col-sm-4">
					<p id="differ_text" style="color: white;">Students</p>
					<div class="differ_border" style="background-color: white; padding-top: 50px; width: 150px; height: 150px;">
						<span class="counter differ_no" style="font-size: 30px; width: 32%">75</span>
					</div>
				</div>

				<div class="col-sm-4">
					<p id="differ_text" style="color: white;">Year target</p>
					<div class=" differ_border" style="padding-top: 10px ;  width: 150px; height: 150px; background-color: white;">
						<p class="rupee" style="font-size: 30px;">&#8377;</p>
						<span class="counter differ_no" style="font-size: 30px; width: 32%">100000</span>
					</div>
				</div>
			</div> <!-- make a differ -->

			<!-- here what  we make diifer wnd -->


			</div>
			<div>


			<!-- testominal  part start-->

			<div style="margin-bottom: 50px; padding-top: 100px;"><!-- testimonial-->
				<p id="make_differ_text">Testimonial</p>
			</div>


			<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom: 50px;"><!-- carousel start -->
				<!-- Indicators -->
				<!-- <ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol> -->

				<!-- Wrapper for slides -->
				<div class="carousel-inner text-center" role="listbox" style="padding-bottom: 50px;">

					<div class="item active">



						<div class="col-sm-4">
							<img src="<?=base_url()?>images/testimonial/f/astha.jpg" style="border-radius: 50%; border-style: solid;  margin-top: 20px; margin-left: auto; margin-right: auto;">
						</div><!-- end image of testimonal here -->
						<div class="col-sm-6" >
							<p id="testimonal_text" style="text-align: center; font-weight: bold;"> <br> <br>It was a nice experience with GetaRoof . This is very helpful . I am very happy with GetaRoom owner plans. Keep it up GetaRoof</p>
							<p style="text-align: right; font-weight: bold;"> <br> <br> </p>
						</div><!-- end text here of testimonal one -->




					</div>

					<div class="item">



						<div class="col-sm-4">
							<img src="<?=base_url()?>images/testimonial/f/harsh.jpg" style="border-radius: 50%; border-style: solid;  margin-top: 20px; margin-left: auto; margin-right: auto;">
						</div><!-- end image of testimonal here -->
						<div class="col-sm-6" >
							<p id="testimonal_text" style="text-align: center; font-weight: bold;"> <br> <br> I have got very quick response from the site. They helped me to find a new PG to stay as i  was  new in delhi ,as an individual,to find a home with college roommates.Thankfully GetaRoof helped me it.
 </p>
							<p style="text-align: right; font-weight: bold;"> <br> <br></p>
						</div><!-- end text here of testimonal one -->



					</div>

					<div class="item">



						<div class="col-sm-4">
							<img src="<?=base_url()?>images/testimonial/f/mohit.jpg" style="border-radius: 50%; border-style: solid;  margin-top: 20px; margin-left: auto; margin-right: auto;">
						</div><!-- end image of testimonal here -->
						<div class="col-sm-6" >
							<p id="testimonal_text" style="text-align: center; font-weight: bold;"> <br> <br>When I first came to college I was worried about how will i find a PG  , after spending countless hours finidng one , i found GetaRoof then i found peace and my new home .   </p>
							<p style="text-align: right; font-weight: bold;"> <br> <br> </p>


						</div><!-- end text here of testimonal one -->


					</div>

					<div class="item">


						<div class="col-sm-4">
							<img src="<?=base_url()?>images/testimonial/f/jj1.jpg" style="border-radius: 50%; border-style: solid;  margin-top: 20px; margin-left: auto; margin-right: auto;">
						</div><!-- end image of testimonal here -->
						<div class="col-sm-6" >
							<p  id="testimonal_text" style="text-align: center; "> <br> <br>GetaRoof provides a great place to stay with safe environment. if they show you something about property that is always same as it. No fake pictures. </p>
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
		<article>
			<p id="make_differ_text" class="fancy row" style="margin-bottom: 50px;color: #201D1B; margin-top: 50px;">Why Use This ?</p>

			</article>
		</div>

		<div class="row text-center slideanim" style="padding-bottom: 50px;">  
			<div class="col-sm-4  whythis">
				<span style="color: #F35A2D;" class="glyphicon glyphicon-piggy-bank logo-small"></span>
				<br>
				<span id="use_this">FREE</span>
			</div>
			<div class="col-sm-4  whythis">
				<span style="color: #F35A2D;" class="glyphicon glyphicon-search logo-small"></span>
				<br>
				<span id="use_this">EASY TO USE</span>
			</div>
			<div class="col-sm-4  whythis">
				<span style="color: #F35A2D;" class="glyphicon glyphicon-certificate logo-small"></span>
				<br>
				<span id="use_this">COLLEGE AFFILIATED</span>
				
			</div>
		</div>

		<!-- why use this  end here -->
		<a name="about" id="about"></a>	
			<div class=" text-center" style="padding-top: 100px;">
				<span style="color: black" id="about_heading"><a style="text-decoration: none; color: black;" href="<?php echo base_url() ?>/index.php/Rock">About Us</a></span>
				
			</div>

		<div class="row "  style="margin-top: 50px; margin-bottom: 50px;" >
			
			<div class="col-sm-12 text-center" style="
			padding-left: 30px;
			padding-right: 30px;" id="about_font">

			GetaRoof is an innovative home rental platform that makes it easier for you to find your new home in just a few clicks , without paying any brokerage and sorting properties your institute wise hence saving a lot of time . Use our verified listing to ensure you find your home by contacting the owners directly. 


			If you are a landlord interested in posting your apartments to GetaRoof, please contact us and we will get in touch to help you list the property. <br>

            GetaRoof understands that not everyone has time & expertise to use computer to list a property. To solve this problem, we have made the listing even simpler. <br>

            You just need to send us the information on WhatsApp on +91-8802907496 or +91-8285626792 and we will create your login for you! No need of a computer or calling anyone. Our Customer Service Representative will call you and take whatever info is required. Nothing can be simpler and quicker than this! 

            And tenants, happy hunting and get in touch with us to let us know what else we can help!


			 <a style="font-size: 25px; text-decoration: none;"  href="<?php echo base_url() ?>/index.php/Rock">More</a>

			.
		</div>
	</div>

	<!-- contact -->
	<div id="contact">
		<p class="text-center" style=" font-size: 40px; padding-top: 50px;
				font-family: 'Mogra', cursive;">Contact</p>
		<br> <br>
		<div class="row slideanim" >
			<a name="contact"></a>
			<div class="col-md-6 inputcontact" >


				
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
			<div class="col-md-6 inputcontact " style="padding-top: 100px; padding-bottom: 100px;">
				
				<i class="fa fa-phone-square" style="font-size:23px; color: #F35A2D " aria-hidden="true"></i> 
				<span style="font-size: 23px;"> &nbsp;&nbsp;&nbsp;8285626792</span>
				<br>
				<i class="fa fa-envelope-o" style="font-size:23px; color: #F35A2D" aria-hidden="true"></i> 
				<span style="font-size: 23px;"> &nbsp;&nbsp;&nbsp;vaibhavchellani223@gmail.com</span>
				<br>
				<i class="fa fa-globe" style="font-size:23px; color: #F35A2D" aria-hidden="true"></i>
				<span style="font-size: 23px;"> &nbsp;&nbsp;&nbsp;getaroof.co.in</span>
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