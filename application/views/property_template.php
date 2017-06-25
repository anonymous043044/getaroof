	<div id="results">
		<div class="containerup" >

		</div>

		<div class="container" id="container1" >
			<div id="firstbox">
			<div id="address">Address: <?php echo $address; ?></div>
			<div id="goto"><a href="#">Goto</a></div>
			</div>
			<div class="container" id="container2">

				<div class="boygirl">Room For <?php echo $gender; ?></div>
				<div class="rent">Monthly Rent : <?php echo $rent; ?></div>
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