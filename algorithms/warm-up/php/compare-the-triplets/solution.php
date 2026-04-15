<?php

/**
 * Create a function that compares two triplet arrays of category scores.
 *
 * - Two triplets arrays are provided such as [1, 2, 3] & [4, 5, 6].
 * - Compare the 1st category score of triplet 1 with the 1st category score of triplet 2.
 * - Which ever category score is higher earns 1 point for that triplet, if they are the same then no point is awarded.
 * - Repeat for each category score in the triplet summing the points earned for each triplet.
 * - Return the total of points for each triplet as follows: "2 2" (No quotations included).
 *
 * Sample Input:
 *
 * STDIN
 * -----
 * 5 6 7
 * 3 6 10
 *
 * Sample Output:
 *
 * STDOUT
 * ------
 * 1 1
 */
function compareTriplets($arr1, $arr2) {
    $aTotalPoints = 0;
    $bTotalPoints = 0;

    for ($index = 0; $index < 3; $index++)
    {
        $aCategoryScore = $arr1[$index];
        $bCategoryScore = $arr2[$index];

        if ($aCategoryScore > $bCategoryScore)
        {
            $aTotalPoints++;
        }
        if ($bCategoryScore > $aCategoryScore)
        {
            $bTotalPoints++;
        }
    }

    return [$aTotalPoints, $bTotalPoints];
}

// Get the first array triplet score from the STDIN:
$str1 = trim(fgets(STDIN));
// Get the second array triplet score from the STDIN:
$str2 = trim(fgets(STDIN));
// Prepare each string putting each integer element into an array:
$arr1 = preg_split("/ /", $str1, -1, PREG_SPLIT_NO_EMPTY);
$arr2 = preg_split("/ /", $str2, -1, PREG_SPLIT_NO_EMPTY);
// Convert each string number into an integer value:
$arr1 = array_map("intval", $arr1);
$arr2 = array_map("intval", $arr2);
// Get the result:
$result = compareTriplets($arr1, $arr2);
// Print the result to the STDOUT:
echo implode(" ", $result) . PHP_EOL;
?>
