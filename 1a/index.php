<html>
<body>


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