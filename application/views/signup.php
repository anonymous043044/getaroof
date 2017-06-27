<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/home.ico" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    body {
      overflow-x: hidden;
      
    }
    html{
       overflow-x: hidden;
    }
    .navbar {
     margin-bottom: 0;

     background-color: #292c2f;
     z-index: 9999;
     border: 0;
     font-size: 12px !important;
     line-height: 1.42857143 !important;
     letter-spacing: 4px;
     border-radius: 0;
     font-weight: bold;
   }
   .navbar li a, .navbar .navbar-brand {
     color: #85C1E9 !important;
   }
   .navbar-nav li a:hover, .navbar-nav li.active a {
     // color: #6F1EF4 !important;
     color: black !important;
     background-color: #FCFAFF !important;
     font-size: 16px;
   }
   .navbar-default .navbar-toggle {
     border-color: transparent;
     color: #85C1E9 !important;
   }
   .submitbutton{
     margin-top: 20px;
     margin-left: 20px;
     margin-bottom: 10px;
   }
   .username{
    
   }
   .username:focus{
    outline: 0;
  }
  .box{
    margin-bottom: 4%;
    border: solid;
    border-color: #58778A;
    border-radius: 2px;
    padding-bottom: 1%;
    background-color: white;
    margin-bottom: 100px;
  }
  .box:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  }
  .submitbutton{
    background-color:#85C1E9;
    border-radius: 3px; 
  }
  
  @media  screen  and (min-width:750px){
    .box{
      margin-top: 10%;
      width: 40%;
    }
  }
  @media  screen  and (min-width:850px){
    .box{
      margin-top: 10%;
      width: 33.3%;
    }
  }
  @media  screen  and (max-width:750px){
    .box{
      margin-top: 20%;
    }
  }

  form .row:first-child .form-item{border-top:1px solid #fff;}
  .form-item{position:relative;margin-bottom:10px;margin-left:15px;margin-top:10px;margin-right:25px;padding-bottom:10px;border-bottom: 2px solid #ccc;}
  .form-item input, .form-item textarea{z-index:1;position:relative;padding-right:0;
    padding-left:0px;border:0;border-radius:0;font-size:1.5em;background:0 0;
    box-shadow:none!important;resize:none;width:100%;}
    .form-item input:focus, .form-item textarea:focus{outline:0}
    .form-item label{display:block;z-index:0;position:relative;top:2em;
      margin:0;font-size:.85em;line-height:1.764705882em;
      vertical-align:middle;vertical-align:baseline;
      opacity:0;
      -webkit-transition:top .3s ease,opacity .3s ease;transition:top .3s ease,opacity .3s ease;}
      .form-item-filled label{top:0;opacity:1;color:#aaa;}
      .form-item-focused label{color:#292c2f;}


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
  <body style="background-color: #95C7E8;"> 

   <!-- navbar start -->
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

     <li><a href="<?php echo base_url() ?>/index.php/Home">HOME</a></li>
     <li><a href="<?php echo base_url() ?>/index.php/auth/signin">SIGN IN</a></li>
     <li style=" background-color: #FCFAFF !important;font-size: 16px;"><a href="#"><span style="color: black;">SIGN UP</span></a></li>
     <li><a href="logout.php">LOG OUT</a></li>
   </ul>
 </div>
</div>
</nav>
<!-- navbar ended -->
<div class="row container-fluid" id="navup">
  <div class="col-sm-4">

  </div>
  <div class="box col-sm-4 slideanim">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ;?>"> 
     <div class="form-item">
       <label for="fname">Username</label>
       <input type="text" class="username" name="username" placeholder="username" autocomplete="off"><?php echo $usernameERR; ?><br>
     </div>
     <div class="form-item">
       <label for="fname">Email</label>
       <input type="text" class="username" name="email" placeholder="email" autocomplete="off"><?php echo $emailERR;?><br>
     </div>
     <div class="form-item">
       <label for="fname">Phone</label>
       <input type="text" class="username" name="phoneNo" placeholder="Phone Number" autocomplete="off"><?php echo $phoneNoERR;?><br>
     </div>
     <div class="form-item">
       <label for="fname">Registration</label>
       <input type="text" class="username" name="registration" placeholder="Registration Number"><?php echo $passwordERR;?><br>
     </div>
     <div class="form-item">
      <label for="fname">Password</label>
      <input type="password" class="username" name="password" placeholder="Password"><?php echo $passwordERR;?><br>
    </div>

    

    <input type="submit" class="submitbutton btn  btn-lg"  name="signup" value="Sign Up">
  </form>
  <?php  echo $username." ".$password . " ". $email." ". $phoneNo ;?>
</div>
<div class="col-sm-4">

</div>
</div>
<!-- navbar start -->

<!-- navbar ended -->
<script src="jquery.counterup.min.js"></script> 
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
</body>
</html>