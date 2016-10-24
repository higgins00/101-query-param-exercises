<!DOCTYPE html>
<html>
<head>
	<title>Custom greeting - 2b</title>
</head>
<body>
<form>
    <p>What is your name?</p>
    <input type="text" name="name">
    <input type="submit">
</form>
<br />
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