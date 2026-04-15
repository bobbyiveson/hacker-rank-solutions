<?php

/**
 * Given five positive integers, find the minimum and maximum values that can be calculated by summing exactly four of the five integers.
 *
 * Then print the respective minimum and maximum values as a single line of two space-separated long integers.
 */
function miniMaxSum($arr) {
    $sumOfArr = array_sum($arr);
    $maxNum = max($arr);
    $minNum = min($arr);
    // Get the minimum possible sum of 4 numbers of the array:
    $minSumOf4 = $sumOfArr - $maxNum;
    // Get the maximum possible sum of 4 numbers of the array:
    $maxSumOf4 = $sumOfArr - $minNum;
    // Print the minimum & maximum sums:
    echo $minSumOf4, " ", $maxSumOf4, PHP_EOL;
}

// Get the 5 positive integers from the STDIN:
$numbers = trim(fgets(STDIN));
// Convert the string of integers into an array:
$numbers = array_map("intval", preg_split("/ /", $numbers, -1, PREG_SPLIT_NO_EMPTY));
// Get the result:
miniMaxSum($numbers);
?>