<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>images/home.ico" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
	<title>Get_A_Roof - About</title>
	<style>

		html {
    overflow: scroll;
    overflow-x: hidden;
}
::-webkit-scrollbar {
    width: 0px;  /* remove scrollbar space */
    background: transparent;  /* optional: just make scrollbar invisible */
}
/* optional: show position indicator in red */
::-webkit-scrollbar-thumb {
    background: #FF0000;
}
		#abc{
			display: flex;
			flex-wrap: wrap;
		}
		@media screen and (min-width: 1000px){
			#abc1{
				order: 0;
				width: 40%;
			}
			#abc2{
				order: 1;
				width: 60%;
                
			}	
			body{
				 overflow: hidden;
			}

		}

		@media screen and (max-width: 1000px){
			#abc1{
				order: 0;
				width: 100%;
			}
			#abc2{
				order: 1;
				width: 100%;
                
			}
			#myFrame{
				overflow: hidden;
			}
		}


        #getaroof{
            font-size: 70px;
            color: red;
            padding-left: 80px;
            padding-top: 375px;
        }
        /*this is navbar styling*/
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
/*this is filter content */


	</style>

     <!-- navbar sccript here -->
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
<body onload="myFunction()" >
		
		<script>
function myFunction() {
    var h = window.innerHeight;
    document.getElementById("myFrame").height = h;
}
</script>
	
	
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
                  
                    <li><a href="<?php echo base_url() ?>/index.php/Home">HOME</a></li>
                    <li><a href="<?php echo base_url() ?>/index.php/auth/signin">SIGN IN</a></li>
                    <li><a href="<?php echo base_url() ?>/index.php/auth/signup">SIGN UP</a></li>
                    <li><a href="#">LOG OUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="navup">
		<div id="abc">
		<div id="abc1">
		<!-- <img src="<?=base_url()?>images/aboutus/getaroof_poster1.jpg" > -->
			<img  class="img-responsive" src="<?=base_url()?>images/aboutus/poster.jpg">
		</div>
		<div id="abc2" class="fixed">
		 <iframe src="<?php echo site_url('Test');?>" overflow="hidden" id="myFrame" width="100%"></iframe>
		</div>
		</div>
        </div>
 
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>
</html>