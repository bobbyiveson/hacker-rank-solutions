<?php

/**
 * Given an array of integers, calculate the ratio of integers that are positive, negative & zero.
 *
 * Return the decimal value of each fraction on a new line with 6 decimal places after the decimal.
 *
 * Sample Input:
 *
 * -4 3 -9 0 4 1
 *
 * Sample Output:
 *
 * 0.500000
 * 0.333333
 * 0.166667
 */
function plusMinus($arr) {
    $positiveCount = 0;
    $negativeCount = 0;
    $zeroCount = 0;
    $integerCount = count($arr);
    $ratios = [];
    // Count the number of positive, negative & zero integers:
    foreach ($arr as $num) {
        if ($num > 0) {
            $positiveCount++;
        }
        elseif ($num < 0) {
            $negativeCount++;
        }
        else {
            $zeroCount++;
        }
    }
    // Calculate the positive ratio:
    $ratios[] = sprintf("%.6f", $positiveCount / $integerCount);
    // Calculate the negative ratio:
    $ratios[] = sprintf("%.6f", $negativeCount / $integerCount);
    // Calculate the zero ratio:
    $ratios[] = sprintf("%.6f", $zeroCount / $integerCount);

    foreach ($ratios as $ratio) {
        echo $ratio . PHP_EOL;
    }
}

// Get the string of integers from the STDIN:
$str = trim(fgets(STDIN));
// Prepare the string, returning an array of string integers:
$arr = preg_split("/ /", $str, -1, PREG_SPLIT_NO_EMPTY);
// Convert each string integer into an integer value:
$arr = array_map('intval', $arr);
// Get the result:
plusMinus($arr);
?>
