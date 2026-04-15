<?php

/**
 * Given a square matrix calculate the absolute difference of it's diagonals.
 *
 * Sample input:
 *
 * STDIN    Function
 * -----    --------
 * 3        arr[][] sizes n=3, m=3
 * 11 2 4   arr = [[11, 2, 4], [4, 5, 6], [10, 8 -12]]
 * 4 5 6
 * 10 8 -12
 *
 * Sample Output:
 * 15
 */

function diagonalDifference($arr) {
    $matrixSize = count($arr);
    $leftToRightDiagonalSum = 0;
    $RightToLeftDiagonalSum = 0;
    // Access each row:
    for ($index1 = 0; $index1 < $matrixSize; $index1++)
    {
        // Access each item in row:
        for ($index2 = 0; $index2 < $matrixSize; $index2++)
        {
            // Get the diagonal numbers from left to right & sum them:
            if ($index1 === $index2)
            {
                $leftToRightDiagonalSum += $arr[$index1][$index2];
            }
            // Get the diagonal numbers from right to left & sum them:
            if ($index2 === $matrixSize - ($index1 + 1))
            {
                $RightToLeftDiagonalSum += $arr[$index1][$index2];
            }
        }
    }
    // Calculate the absolute difference of the diagonals:
    $difference = $leftToRightDiagonalSum - $RightToLeftDiagonalSum;
    $absoluteDifference = $difference < 0 ? $difference * -1 : $difference;

    return $absoluteDifference;
}

// Get matrix size from the STDIN:
$matrixSize = intval(trim(fgets(STDIN)));
$arr = [];
// Get the matrix from the STDIN & process it, removing any white space & converting all values to integer:
for ($index = 0; $index < $matrixSize; $index++) {
    $tempArr = trim(fgets(STDIN));
    $arr[] = array_map('intval', preg_split("/ /", $tempArr, -1, PREG_SPLIT_NO_EMPTY));
}
// Get result:
$result = diagonalDifference($arr);
// Print result:
echo $result . PHP_EOL;
?>
