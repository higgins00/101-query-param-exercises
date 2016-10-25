<?php

    if ($_GET["op"] == "+") {
        echo ($_GET["num1"] + $_GET["num2"]);
    } elseif ($_GET["op"] == "-") {
        echo ($_GET["num1"] - $_GET["num2"]);
    } elseif ($_GET["op"] == "*") {
        echo ($_GET["num1"] * $_GET["num2"]);
    } elseif ($_GET["op"] == "/") {
        echo ($_GET["num1"] / $_GET["num2"]);
    }
?>

<html>
    <head>
       <title>Calculator - 3a</title>
    </head>

    <body>
<form>
<input type="number" name="num1">
<select name="op">
  <option value="+">+</option>
  <option value="-">-</option>
  <option value="*">*</option>
  <option value="/">/</option>
</select>
<input type="number" name="num2">
  <input type="submit">
</form>

    
    
  </body>
</html>