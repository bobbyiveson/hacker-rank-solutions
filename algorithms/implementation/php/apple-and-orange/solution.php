<?php

/**
 * Apple & Orange
 *
 * Sam's house has an apple tree & an orange tree that yield an abundance of fruit.
 * Using the information given below, determine the number of apples & oranges that land on Sam's house:
 * - The red region denotes the house, where s is the start point, & t is the endpoint along the x-axis.
 * - The apple tree is to the left of the house, & the orange tree is to it's right.
 * - Assume the trees are located on a single point, where the apple tree is at point a, & the orange tree is at point b.
 * - When a fruit falls from it's tree, it lands d units of distance from it's tree of origin along the x-axis. A negative value of d
 * means the fruit fell d units to the tree's left, & a positive value of d means it falls d units to the tree's right.
 * Given the value of d for m apples & n oranges, determine how many apples & oranges will fall on Sam's house (i.e., in the inclusive
 * range of [s, t])?
 * For example:
 * Sam's house is between s = 7 & t = 10. The apple tree is located at a = 4 & the orange a b = 12. There are m = 3 apples & n = 3 oranges.
 * Apples are thrown apples = [2, 3, -4] units distance from a, & oranges = [3, -2, -4] units distance from b. Adding each apple's distance to
 * the position of it's tree, they land at [4 + 2, 4 + 3, 4 + -4] = [6, 7, 0]. Oranges land at [12 + 3, 12 + -2, 12 + -4] = [15, 10, 8].
 * One apple & two oranges land in the inclusive range 7 - 10 so we print:
 *
 * 1
 * 2
 *
 * @param int $houseStartingPoint The location of the house starting point on the x-axis
 * @param int $houseEndingPoint The location of the house ending point on the x-axis
 * @param int $appleTreeLocation The location of the apple tree on the x-axis
 * @param int $orangeTreeLocation The location og the orange tree on the x-axis
 * @param int[] $appleDistancesFromOrigin The array of each apple's distance from the tree
 * @param int[] $orangeDistancesFromOrigin The array of each orange's distance from the tree
 *
 * @return void
 */

function countApplesAndOranges($houseStartingPoint, $houseEndingPoint, $appleTreeLocation, $orangeTreeLocation, $appleDistancesFromOrigin, $orangeDistancesFromOrigin) {
    echo countFruit($houseStartingPoint, $houseEndingPoint, $appleTreeLocation, $appleDistancesFromOrigin) . PHP_EOL;
    echo countFruit($houseStartingPoint, $houseEndingPoint, $orangeTreeLocation, $orangeDistancesFromOrigin) . PHP_EOL;
}

function countFruit($houseStartingPoint, $houseEndingPoint, $fruitTreeLocation, $fruitDistancesFromOrigin) {
    $fruitCount = 0;
    foreach ($fruitDistancesFromOrigin as $fruitDistance) {
        $fruitXLocation = $fruitDistance + $fruitTreeLocation;
        if ($fruitXLocation >= $houseStartingPoint && $fruitXLocation <= $houseEndingPoint) {
            $fruitCount++;
        }
    }
    return $fruitCount;
}

// Handle input & output from the console:
$houseStartingAndEndingPoints = array_map("intval",  preg_split("/ /", trim(fgets(STDIN)), -1, PREG_SPLIT_NO_EMPTY));
$appleAndOrangeTreePoints = array_map("intval",  preg_split("/ /", trim(fgets(STDIN)), -1, PREG_SPLIT_NO_EMPTY));
$appleDistancesFromOrigin = array_map("intval",  preg_split("/ /", trim(fgets(STDIN)), -1, PREG_SPLIT_NO_EMPTY));
$orangeDistancesFromOrigin = array_map("intval",  preg_split("/ /", trim(fgets(STDIN)), -1, PREG_SPLIT_NO_EMPTY));
// Print the result:
countApplesAndOranges(
    $houseStartingAndEndingPoints[0],
    $houseStartingAndEndingPoints[1],
    $appleAndOrangeTreePoints[0],
    $appleAndOrangeTreePoints[1],
    $appleDistancesFromOrigin,
    $orangeDistancesFromOrigin
);
?>
