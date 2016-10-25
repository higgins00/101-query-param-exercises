<!DOCTYPE html>
<html>
<head>
	<title>
		4 - Color Picker!
	</title>

	<?php 
		if ($_GET["theme"] == "red") {
        	echo '<link rel="stylesheet" type="text/css" href="style1.css">';
    	} elseif ($_GET["theme"] == "blue") {
        	echo '<link rel="stylesheet" type="text/css" href="style2.css">';
    	}
	?>
</head>
<body>



	<?php

		if ($_GET["theme"] == "red") {
	?>

			<a class="theme" href="./index.php?theme=blue">Switch the theme</a>
	
	<?php 
		} elseif ($_GET["theme"] == "blue") {
	?>

			<a class="theme" href="./index.php?theme=red">Switch the theme</a>
	<?php 
		}
	?>

</body>
</html>