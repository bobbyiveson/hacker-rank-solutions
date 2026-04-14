<?php

/**
 * Print the sum of integer elements in the given array.
 */
function aVeryBigSum($arr) {
    $sum = 0;
    foreach($arr as $num) {
        $sum += $num;
    }
    return $sum;
}

// Get the string of numbers:
$str = trim(fgets(STDIN));
// Get an array of string integers from the string of numbers:
$arr = preg_split("/ /", $str, -1, PREG_SPLIT_NO_EMPTY);
// Convert the integer strings into integer values:
$arr = array_map('intval', $arr);
// Get the result:
$result = aVeryBigSum($arr);
// Print the result:
echo $result . PHP_EOL;
?>
