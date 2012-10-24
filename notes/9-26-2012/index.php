<!DOCTYPE html>

<head>
	<?php
	
	//initial variable example
	$square = 4 * 4;
	
	//string
	$name = 'nathan';
	$age = '26';
	
	//integer
	$level = 42;
	
	//float
	$weight = 250.5;
	
	//boolean
	$logged_in = false;
	
	$quarter = .25;
	$dime = .10;
	$nickle = .05;
	
	$calculate_total = ($quarter * 3) + ($dime * 4) + ($nickle * 1);
	
	//don't do this!
	//echo $total;
	
	?>
	
</head>

<body>
	
	The square of 4 is <?=$square?>
	
	<br>

	The total is <?=$calculate_total?>
</body>

</html>