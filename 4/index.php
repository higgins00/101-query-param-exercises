<!DOCTYPE html>
<html>
<head>
	<title>
		4 - Color Picker!
	</title>
</head>
<body>

<?php 
if ($_GET["theme"] = "red") {
        echo '<link rel="stylesheet" type="text/css" href="style1.css">';
    } if ($_GET["theme"] = "blue") {
        echo '<link rel="stylesheet" type="text/css" href="style2.css">';
    }
?>

<a class="theme">Switch the theme</a>

</body>
</html>