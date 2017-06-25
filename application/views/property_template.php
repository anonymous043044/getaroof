	<head>
		<style>

			#results{
    display: flex;
        flex-wrap: wrap;
        margin: 30px;
}
@media  screen  and (min-width:750px){
    #containerup{
        order: 0;
        width: 25%;
    }
    #container1{
        order: 1;
        width: 50%;
    }
    #containerdown{
        order: 2;
        width: 25%;
    }
}
@media  screen  and (min-width:600px){

   #containerup{
        order: 0;
        width: 10%;
    }
    #container1{
        order: 1;
        width: 80%;
    }
    #containerdown{
        order: 2;
        width: 10%;
    }
}
@media screen and (max-width:600px){
    #container1{
        width: 100%;
    }
}

    #container1{
        display: flex;
        flex-wrap: wrap;
         border-style: solid;border-width: 1px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
 
   
    #container1:hover {
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    }


			
			#address{
				font-size: 20px;
			}
			#goto{
				font-size: 20px;
			}
			.boygirl{
				font-size: 20px;
			}
			.rent{
				font-size: 20px;
			}
			#gender{
				color: green;
			}
			
			@media  screen  and (min-width:850px){
				#inner{
					margin-left: 180px;
					margin-right: 180px;
					
				}	
			}
			
			
		</style>
	</head>
	<body>
		<div id="outer">
			<div id="inner">
				<div id="results">
					<div class="containerup" >

					</div>

					<div class="container" id="container1" >
						<div id="firstbox">
							<div id="address">Address: <?php echo $address; ?></div>
							<div id="goto"><a href="#">Goto</a></div>
						</div>
						<div class="container" id="container2">

							<div class="boygirl"><span id="gender">Gender </span>:- <?php echo $gender; ?></div>
							<div class="rent"><button class="btn"> Rent : <?php echo $rent; ?></button></div>
						</div>
						<div class="container" id="container3">
							<div class="seats" >Total Beds <?php echo $total_seats; ?></div>
							<div>Free Beds : To be entered</div>
							<div class="Details"><a href="<?php echo base_url(); ?>/index.php/property/viewproperty/<?php echo $property_id; ?>">Details </a><?php echo $property_id; ?></div>
						</div>
					</div>
					<div class="containerdown" >

					</div>
				</div>
			</div>
		</div>
	</body>