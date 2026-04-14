<?php

// Create a function that returns the sum of two numbers:
function solveMeFirst($num1, $num2) {
  return $num1 + $num2;
}

// Open a handle to the STDIN:
$handle = fopen("php://stdin", "r");
// Get the first number argument:
$num1 = fgets($handle);
// Get the second number argument:
$num2 = fgets($handle);
// Get the result:
$sum = solveMeFirst((int)$num1, (int)$num2);
// Print the result to the console:
echo $sum, PHP_EOL;
// Always close the handle to free up the resource:
fclose($handle);
?>
