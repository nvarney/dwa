<!DOCTYPE html>

<head>
	<?php
	
	$hour = date("G");
	
	// for testing
	$hour = 21;
	
	if ($hour >= 20) {
		$color = "black";
	}
	else {
		$color = "blue";
	}
	
	
	?>
	
	<style type='text/css'>
		body {
			background-color: <?=$color?>;
		}
	
</head>

<body>

<br>
	Today is <?=$day?>


</body>

</html>