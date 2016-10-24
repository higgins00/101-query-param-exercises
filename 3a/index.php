<?php

/* ======================================================
   PHP Calculator example using "sticky" form (Version 2)
   ======================================================

   - uses a dropdown select box to select operation
   - does very basic validation
   - uses a function to calculate result
   - traps a devide by zero error
   
   - author : p-chatterjee, sept.2012
   - https://gist.github.com/pchatterjee/3756368
   
*/

// function to calculate and return result
function calculate($num1, $num2, $op) { 
    // calculate $prod using switch (case) statement
    switch($op) {
        case '+':
            $prod = $num1 + $num2;
            break;
        case '-':
            $prod = $num1 - $num2;
            break;
        case '*':
            $prod = $num1 * $num2;
            break;
        case '/':
            if ($num2 == 0) {$prod = "&#8734";}
            else {$prod = $num1 / $num2;}
    }

    // return the result
    return $prod;
}

// declare all variables
$num1 = 0;
$num2 = 0;
$prod = 0;
$op = '';

// grab the form values from $_GET hash
extract($_GET);

?>

<html>
    <head>
       <title>Calculator - 3a</title>
    </head>

    <body>
            <p>number 1 = num1</p>
            <p>operators
                <ul>
                    <li>+ = op=+</li>
                    <li>- = op=-</li>
                    <li>* = op=*</li>
                    <li>/ = op=/</li>
      
        <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <input type="text" name="num1" value="<?php print $num1; ?>"/>
            <select name="op">
                <option value="+" <?php if ($op=='+') echo 'selected="selected"';?>>+</option>
                <option value="-" <?php if ($op=='-') echo 'selected="selected"';?>>-</option>
                <option value="*" <?php if ($op=='*') echo 'selected="selected"';?>>*</option>
                <option value="/" <?php if ($op=='/') echo 'selected="selected"';?>>/</option>
            </select>
        <input type="text" name="num2"  value="<?php  print $num2; ?>"/>
        <input type="submit" name="calc" value="Calculate"/>
        </form>

    <?php
        if(isset($calc)) {
            // check that $num1 & $num2 are numeric
            
            if (is_numeric($num1) && is_numeric($num2)) {	
                // call the caculate function and pass $num1, $num2 & $op as args.
                $prod = calculate($num1, $num2, $op);
				
                // print the result 
                echo "<p>$num1 $op $num2 = $prod</p>";
            }
            else {
                // unaccepatable values
                echo "<p>x and y values are required to be numeric ... 
                         please re-enter values</p>";
            }
        }
    ?>
    
  </body>
</html>