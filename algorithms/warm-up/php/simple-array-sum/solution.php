<?php

// Create a function that takes an array & finds the sum of it's elements:
function simpleArraySum($arr) {
    $sum = 0;
    foreach ($arr as $num) {
        $sum += $num;
    }
    return $sum;
}

// Get the string number elements from the STDIN:
$str = trim(fgets(STDIN));
// Prepare the number elements & put them into an array:
$arr = preg_split("/ /", $str, -1, PREG_SPLIT_NO_EMPTY); // removes all spaces & returns the values in between as array elements
// Convert each string number into an integer value:
$arr = array_map("intval", $arr); // Converts each string element into an integer value
// Pass the arguments into the function solution:
$result = simpleArraySum($arr);
echo $result, PHP_EOL;
?>
