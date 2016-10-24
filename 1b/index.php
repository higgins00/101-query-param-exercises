<!DOCTYPE html>
<html>
<head>
	<title>Open Sesame - 1B</title>
</head>
<body>
<form>
    <input type="text" name="password">
    <input type="submit">
</form>

<?php

    if ($_GET) {
        
        
        if ($_GET["password"] == "whatever") {
            echo "Password is valid!";
        } else {
            echo "Invalid password.";
        }
    }
?>
  </body>  
</html>
</body>
</html>