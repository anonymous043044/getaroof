<head>
	<style>
	#father{
		display: flex;
	flex-wrap: wrap;
	}
	#box1{
		display: flex;
	flex-wrap: wrap;
	}
	#box2{
		display: flex;
	flex-wrap: wrap;
	}
	#box3{
		display: flex;
	flex-wrap: wrap;
	}
	#main_box{
		border-style: solid;
		border-width: 1px;
		border-radius: 3px;
		}
	#main_box:hover {
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    }

	@media  screen  and (min-width:850px){
		#super{
			order: 0;
			width: 20%;
		}
		#main_box{
			order: 1;
			width: 60%;
		}
		#down{
			order: 2;
			width: 20%;
		}
		#address{
			order: 0;
			width: 80%;
			font-size: 22px;
			padding: 10px;
		}
		#reach{
			order: 1;
			width: 20%;
			font-size: 22px;
			text-align: center;
			padding: 10px;
		}
		#boygirl{
			font-size: 20px;
			order: 0;
			width: 50%;

			border-style: solid;
			border-width: 1px;
			border-radius: 3px;
			text-align: center;
			font-weight: bold;
			padding: 5px;
		}
		#rent{
			font-size: 20px;
			order: 1;
			width: 50%;
			border-style: solid;
			border-width: 1px;
			border-radius: 3px;
			text-align: center;
			font-weight: bold;
			padding: 5px;
		}
		#free{
			order: 0;
			width: 60%;
			font-size: 20px;
			text-align: center;
			padding: 10px;
		}
		#detail{
			order: 1;
			width: 40%;
			text-align: center;
			padding: 1px;
			padding-top: 3px;

		}
		#btn{
		border-radius: 0px;
		font-size: 20px;
		font-weight: bold;
	}
	}
	@media  screen  and (max-width:850px){
		#super{
			order: 0;
			width: 10%;
		}
		#main_box{
			order: 1;
			width: 80%;
		}
		#down{
			order: 2;
			width: 10%;
		}
		#address{
			order: 0;
			width: 80%;
			font-size: 22px;
			padding: 10px;
		}
		#reach{
			order: 1;
			width: 20%;
			font-size: 22px;
			text-align: center;
			padding: 10px;
		}
		#boygirl{
			font-size: 20px;
			order: 0;
			width: 50%;
			
			border-style: solid;
			border-width: 1px;
			border-radius: 3px;
			text-align: center;
			font-weight: bold;
			padding: 5px;
		}
		#rent{
			font-size: 20px;
			order: 1;
			width: 50%;
			border-style: solid;
			border-width: 1px;
			border-radius: 3px;
			text-align: center;
			font-weight: bold;
			padding: 5px;
		}
		#free{
			order: 0;
			width: 60%;
			font-size: 20px;
			text-align: center;
			padding: 10px;
		}
		#detail{
			order: 1;
			width: 40%;
			text-align: center;
			padding: 1px;
			padding-top: 3px;

		}
		#btn{
		border-radius: 0px;
		font-size: 20px;
		font-weight: bold;
	}

	}
	@media  screen  and (max-width:500px){
		#super{
			order: 0;
			width: 0%;
		}
		#main_box{
			order: 1;
			width: 100%;
		}
		#down{
			order: 2;
			width: 0%;
		}
		#address{
			order: 0;
			width: 100%;
			font-size: 22px;
			padding: 5px;
		}
		#reach{
			order: 1;
			width: 100%;
			font-size: 22px;
			padding: 5px;
			}
		#boygirl{
			font-size: 15px;
			order: 0;
			width: 50%;
			padding : 5px;
			border-style: solid;
			border-width: 1px;
			border-radius: 3px;
			text-align: center;
			font-weight: bold;
		}
		#rent{
			font-size: 15px;
			order: 1;
			width: 50%;
			padding : 5px;
			border-style: solid;
			border-width: 1px;
			border-radius: 3px;
			text-align: center;
			font-weight: bold;
		}
		#free{
			order: 0;
			width: 60%;
			font-size: 15px;
			text-align: center;
			padding: 10px;
		}
		#detail{
			order: 1;
			width: 40%;
			text-align: center;
			padding: 1px;
			padding-top: 3px;

		}
		#btn{
		border-radius: 0px;
		font-size: 15px;
		font-weight: bold;
	}

	}
	</style>
	<script>
	$(document).ready(function(){



		if($(window).width() < 500){
			$("#reach1").text(" Go to Destination");
		}
	});
		
	</script>
</head>
<body>	<div id="father">
		<div id="super"></div>
		<div id="main_box" style="margin-bottom: 50px;">
		  	<div id="box1">
		  		<div id="address" >Address : <?php echo $address; ?></div>
		  		<div id="reach" ><a href="" id="reach1">Reach</a></div>
		  	</div>
		  	<div id="box2">
		  		<div id="boygirl" >Gender : <?php echo $gender; ?></div>
		  		<div id="rent" >Rent : <?php echo $rent; ?> &#x20B9</div>
		  		
		  	</div>
		  	<div id="box3">
		  		<div id="free" >Free Beds x out of <?php echo $total_seats; ?></div>
		  		<div id="detail" ><a href="<?php echo base_url(); ?>/index.php/property/viewproperty/<?php echo $property_id; ?>" target="_blank"><button class="btn" id="btn">More Details</button></a></div>
		  	</div>
		</div>
		<div id="down"></div>
		</div>
</body>