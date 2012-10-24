<!DOCTYPE html>

<head>
	<?php

		$boxes = "";
		for($i = 1; $i <= 100; $i++) {
  		$boxes = $boxes."<div style='width:50px; height:50px; float:left; margin:4px; background-color:red'></div>";
		}
	?>

	
</head>

<body>
	<?=$boxes?>


</body>

</html>