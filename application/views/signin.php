<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>SIGN IN</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/home.ico" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



  <style>
  html{
      overflow-x: hidden;
  }

    body{
      background-color: #6CEC83;
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
      color: #fff !important;
    }
    .navbar-nav li a:hover, .navbar-nav li.active a {
     /* color: #6F1EF4 !important;*/
     color: black !important;
     background-color: #FCFAFF !important;
     font-size: 16px;
   }
   .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;

  }
  .username{
    font-size: 25px;
    width: 80%;
    padding: 1px 0px 0px 0px;
    margin: 5px 5px 5px 5px;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid #ccc;
  }
  .username:focus{
    outline: 0; 
  }
  .password{
    font-size: 25px;
    width: 80%;
    padding: 1px 0px 0px 0px;
    margin: 0px 5px 5px 5px;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid #ccc;
  }
  .password:focus{
    outline: 0; 
  }
  .submitbutton{
    margin-left: 20px;
    margin-bottom: 10px;
    border-radius: 2px;
    background-color: #6CEC83;
  }
  .box{
    margin-top: 3%;
    border: solid;
    border-width: 2px;

    border-color: #292c2f;
    border-radius: 0px;
    padding-bottom: 10px;
    margin-left: auto;
    margin-right: auto;
  }
  .box:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  }
  .box1{
    margin-left: auto;
    margin-right: auto;
    width: 33.3%;
    border: solid;
    border-radius: 0px;
    border-width: 2px;
    margin-top:  10px;
    border-color: #292c2f;
    background-color: white;
  }
  .box1:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  }
  @media  screen  and (min-width:750px){
    .box1{
      margin-left: auto;
      margin-right: auto;
      width: 33.3%;
    }
    .box1 span{
      font-size: 20px;
    }
    .box1 a{
      font-size: 18px;
    }
  }
  @media  screen  and (max-width:750px){
    .box1{
      width: 100%;
      margin-left: auto;
      margin-right: auto;
    }
    .box1 span{
      font-size: 20px;
    }
    .box1 a{
      font-size: 18px;
    }
  }

  form .row:first-child .form-item{border-top:1px solid #fff;
  }
  .form-item{position:relative;margin-bottom:0px;margin-left:20px;margin-top:10px;margin-right:30px;padding-bottom:10px;border-bottom:2px solid #ccc;
  }
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
    <!-- nav bar scroll up down -->
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

            <li><a href="<?php echo base_url() ?>/index.php/home">HOME</a></li>
            <li style="color: black !important; background-color: #FCFAFF !important;font-size: 16px;"><a  href="#"><span style="color: black;">SIGN IN</span></a></li>
            <li><a href="<?php echo base_url() ?>/index.php/auth/signup">SIGN UP</a></li>
            <li><a href="../php/logout.php">LOG OUT</a></li>
          </ul>
        </div>

      </div>
    </nav>
    <div class="text-center" style="margin-top: 70px;">
<h2>Sign in to "company"</h2>
</div>    
<div class="row container-fluid " >
  <div class="col-sm-4">
  </div>
  <div class="box col-sm-4" style="background-color: white;"">
    
    <?php  
      echo '<label class="text-danger">'.$this->session->flashdata

("error").'</label>';  
                     ?>  
    <form method="post" action="<?php echo base_url();?>index.php/Auth/signin_validation">
    <div class="form-item">
    <label for="fname">Email</label>
    <span><?php echo form_error('EmailORUsername'); ?></span>
     <input type="text" class="username" name="EmailORUsername" placeholder="Enter Email Or Username" value="">
     </div><br>
     <div class="form-item">
     <label for="fname">Password</label>
    <span><?php echo form_error('Password'); ?></span>

     <input type="password" class="password" name="Password" placeholder="Enter password" value="">
     </div><br><br>
     <input type="submit" class="submitbutton btn btn-success btn-lg" name="Submit">
   </form>
   

 </div>
 <div class="col-sm-4">
 </div>
</div>
<div class="row container-fluid">
  <div class="col-sm-4">
  </div>
  <div class="col-sm-4 box1 text-center" style="float: left;">
    <form method="POST" action="../php/signup.php">
     <span>Click Here</span>
     <a href="http://localhost/startup-bvp1.1/php/signup.php" style="text-decoration: none;">&nbsp;  &nbsp;  New Users</a>
   </form>
 </div>
 <div class="col-sm-4">
 </div>
</div>
  <script src="jquery.counterup.min.js"></script>
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