<!DOCTYPE html>
<html>
<head>
	<title>Custom greeting - 2a</title>
</head>
<body>


<?php

    if ($_GET) {
        
        if ($_GET["name"] == "Alex") {
            echo "Welcome" . " " . $_GET["name"] . "!";
        } else {
            echo "Hello anonymous, why don't you tell us your name?";
        }
    }
?>
  </body>  
</html>
</body>
</html>