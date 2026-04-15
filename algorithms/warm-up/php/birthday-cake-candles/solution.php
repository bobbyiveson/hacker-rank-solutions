<?php

/**
 * You are in charge of the cake for a child's birthday. It will have one candle for each year of their total age.
 * They will only be able to blow out the tallest of the candles. Your task is to count how many candles are the tallest.
 *
 * Sample Input:
 *
 * STDIN
 * -----
 * 4 4 2 1
 *
 * Sample Output:
 *
 * 2
 *
 * The tallest candles are 4 units high. There are 2 candles with this height, so the function should return 2.
 */
function birthdayCakeCandles($candles) {
    // Find the tallest candle:
    $maxCandleHeight = max($candles);
    // Get the count of tallest candles:
    $tallestCandlesCount = count(array_keys($candles, $maxCandleHeight));
    return $tallestCandlesCount;
}

// Get the candle sizes from the STDIN:
$candles = fgets(STDIN);
// Prepare the candle sizes string & put them into an array:
$candles = array_map("intval", preg_split("/ /", $candles, -1, PREG_SPLIT_NO_EMPTY));
// Get the result:
$tallestCandlesCount = birthdayCakeCandles($candles);
// Print the result:
echo $tallestCandlesCount, PHP_EOL;
?>
