<!DOCTYPE html>
<html>
<head>
	<title>makenew Html</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/footer.css">
	<style>
		body{
			overflow-x: hidden;
		}
		#question{
			font-size: 20px;
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




	</style>
</head>
<body>

	<div id="info">
		<div id="first"></div>
		<div id="image_box" class="text-center" >
			<div id="image1">
				<img src="https://placekitten.com/420/310" alt="image1" class="img-responsive img-thumbnail">
			</div>
			<div id="image2" >
				<img src="https://placekitten.com/420/310" alt="image2" class="img-responsive img-thumbnail">
			</div>
			<div id="image3" >
				<img src="https://placekitten.com/420/310" alt="image3" class="img-responsive img-thumbnail">
			</div>
			<div id="image4" >
				<img src="https://placekitten.com/420/310" alt="image4" class="img-responsive img-thumbnail">
			</div>
		</div>
		<div id="detail_box" >
			
		</div>
	</div>
	<h3 class="text-center">Details</h3>
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
		<div id="info1">
			<span id="question">Food  facility</span> yes or no
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="btn-group " data-toggle="buttons">

							<label class="btn" id="food">
								<input type="radio" name='food' <?=$food=="1" ? "checked" : ""?> ><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span>  Yes</span>
							</label>
							<label class="btn" id="food">
								<input type="radio" name='food' <?=$food=="0" ? "checked" : ""?> ><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> No</span>
							</label>
						</div>

					</div>
				</div>
			</div>

			<br>
			<span id="question">Secuity Money</span> amount<br>
			<span id="question">Drinking Water</span> 
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="btn-group " data-toggle="buttons">

							<label class="btn" id="water">
								<input type="radio" name='water' <?=$water=="1" ? "checked" : ""?> ><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span>  Yes</span>
							</label>
							<label class="btn" id="water">
								<input type="radio" name='water'<?=$water=="0" ? "checked" : ""?> ><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> No</span>
							</label>
						</div>

					</div>
				</div>
			</div>
			<br>
			<span id="question">Water filter</span><div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="btn-group " data-toggle="buttons">

						<label class="btn">
							<input type="radio" name='water_facility' <?=$water_facility=="1" ? "checked" : ""?> ><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span>  Yes</span>
						</label>
						<label class="btn">
							<input type="radio" name='water_facility' <?=$water_facility=="0" ? "checked" : ""?> ><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> No</span>
						</label>
					</div>

				</div>
			</div>
		</div>
		<br>
		<span id="question">water availability</span>(no of hours) <br>
		<span id="question">Furnishing </span>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="btn-group " data-toggle="buttons">

						<label class="btn">
							<input type="radio" name='Furnishing' <?=$Furnishing=="1" ? "checked" : ""?> ><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span>  Full</span>
						</label>
						<label class="btn">
							<input type="radio" name='Furnishing' <?=$Furnishing=="2" ? "checked" : ""?>><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> Semi</span>
						</label>
						<label class="btn">
							<input type="radio" name='Furnishing' <?=$Furnishing=="3" ? "checked" : ""?>><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> No</span>
						</label>
					</div>

				</div>
			</div>
		</div> <br>
		<span id="question">Electricity bill</span> 
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="btn-group " data-toggle="buttons">

						<label class="btn">
							<input type="radio" name='Electricity' <?=$Electricity=="1" ? "checked" : ""?> ><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span>  Included</span>
						</label>
						<label class="btn">
							<input type="radio" name='Electricity' <?=$Electricity=="0" ? "checked" : ""?>><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> No</span>
						</label>
					</div>

				</div>
			</div>
		</div><br>
		<span id="question"> gyser </span>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="btn-group " data-toggle="buttons">

						<label class="btn">
							<input type="radio" name='gyser' <?=$gyser=="1" ? "checked" : ""?><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span>  Yes</span>
						</label>
						<label class="btn">
							<input type="radio" name='gyser' <?=$gyser=="0" ? "checked" : ""?>><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> No</span>
						</label>
					</div>

				</div>
			</div>
		</div>
		<br>
		<span id="question">cooler</span> <div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="btn-group " data-toggle="buttons">

					<label class="btn">
						<input type="radio" name='cooler' <?=$cooler=="1" ? "checked" : ""?>><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span>  Yes</span>
					</label>
					<label class="btn">
						<input type="radio" name='cooler' <?=$cooler=="0" ? "checked" : ""?>><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> No</span>
					</label>
				</div>

			</div>
		</div>
	</div>
	<br>


</div>
<div id="info2">
	<span id="question">AC</span> <div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="btn-group " data-toggle="buttons">

				<label class="btn">
					<input type="radio" name='AC' <?=$AC=="1" ? "checked" : ""?> ><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span>  Yes</span>
				</label>
				<label class="btn">
					<input type="radio" name='AC' <?=$AC=="0" ? "checked" : ""?> ><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> No</span>
				</label>
			</div>

		</div>
	</div>
</div>
<br>
<span id="question">room cleaning</span> 
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="btn-group " data-toggle="buttons">

				<label class="btn">
					<input type="radio" name=' cleaning' <?=$cleaning=="1" ? "checked" : ""?> ><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span>  Yes</span>
				</label>
				<label class="btn">
					<input type="radio" name=' cleaning'<?=$cleaning=="0" ? "checked" : ""?> ><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> No</span>
				</label>
			</div>

		</div>
	</div>
</div><br>
<span id="question">wifi</span>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="btn-group " data-toggle="buttons">

				<label class="btn">
					<input type="radio" name='wifi' <?=$wifi=="1" ? "checked" : ""?> ><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span>  Yes</span>
				</label>
				<label class="btn">
					<input type="radio" name='wifi' <?=$wifi=="0" ? "checked" : ""?> ><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> No</span>
				</label>
			</div>

		</div>
	</div>
</div><br>
<span id="question">tv</span><div class="container">
<div class="row">
	<div class="col-xs-12">
		<div class="btn-group " data-toggle="buttons">

			<label class="btn">
				<input type="radio" name='tv' <?=$tv=="1" ? "checked" : ""?> ><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span>  Yes</span>
			</label>
			<label class="btn">
				<input type="radio" name='tv' <?=$tv=="0" ? "checked" : ""?> ><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> No</span>
			</label>
		</div>

	</div>
</div>
</div><br>
<span id="question">REFRIGERATOR</span> <div class="container">
<div class="row">
	<div class="col-xs-12">
		<div class="btn-group " data-toggle="buttons">

			<label class="btn">
				<input type="radio" name='REFRIGERATOR' <?=$REFRIGERATOR=="1" ? "checked" : ""?> ><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span>  Yes</span>
			</label>
			<label class="btn">
				<input type="radio" name='REFRIGERATOR' <?=$REFRIGERATOR=="0" ? "checked" : ""?> ><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> No</span>
			</label>
		</div>

	</div>
</div>
</div> <br>
<span id="question">power backup</span>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="btn-group " data-toggle="buttons">

				<label class="btn"  id="myRadio1" >
					<input type="radio"  id="myRadio" name='power' <?=$power=="1" ? "checked" : ""?> ><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span>  Yes</span>
				</label>
				<label class="btn"  id="myRadio1" >
					<input type="radio"  id="myRadio" name='power' <?=$power=="0" ? "checked" : ""?> ><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> No</span>
				</label>
			</div>

		</div>
	</div>
</div><br>
<span id="question">free beds </span><br>
<span id="question">no of bathroom</span><br>
<span id="question">total no of beds </span><br>

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