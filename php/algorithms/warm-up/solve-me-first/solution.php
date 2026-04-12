<?php

// Create a function that returns the sum of two numbers:
function solveMeFirst($a, $b){
  return $a + $b;
}

// Open a handle to the STDIN:
$handle = fopen("php://stdin", "r");
// Get the first line:
$_a = fgets($handle);
// Get the second line:
$_b = fgets($handle);
// Get the result:
$sum = solveMeFirst((int)$_a, (int)$_b);

echo $sum, PHP_EOL;
// Always close the handle to free up the resource:
fclose($handle);
?>
