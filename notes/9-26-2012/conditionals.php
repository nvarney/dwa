<!DOCTYPE html>

<head>
	<?php
		//hard coded variable
		$age = -12;
		$person_type = n00b;
		
		echo "Age is:".$age;
		

		if($age < 12) {
   			$person_type = "kiddo";
		}
		elseif($age > 12 AND $age <= 19) {
   			$person_type = "teenager";
		}
		elseif($age > 19 AND $age <= 80) {
        	$person_type = "adult";
		}
		else {
        	$person_type = "super wise person";
		}
	?>
	

</head>

<body>

<br>
<!-- @$person_type would turn off errors-->
The person is a <?=$person_type?>


</body>

</html>