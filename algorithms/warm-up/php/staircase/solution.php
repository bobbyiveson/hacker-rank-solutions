<?php

/**
 * Print a staircase of size n.
 *
 * This is a staircase of size 4:
 *
 *    #
 *   ##
 *  ###
 * ####
 *
 * It's base & height are equal to 4 & all # symbols are right-aligned.
 */
function staircase($size) {
    for ($index = 1; $index <= $size; $index++) {
        // Get number of spaces to print:
        $noOfSpaces = $size - $index;
        // Get number of # symbols to print:
        $noOfSymbols = $size - $noOfSpaces;
        // Print spaces:
        for ($spaceIndex = 1; $spaceIndex <= $noOfSpaces; $spaceIndex++) {
            echo " ";
        }
        // Print # Symbols:
        for ($symbolIndex = 1; $symbolIndex <= $noOfSymbols; $symbolIndex++) {
            echo "#";
            // If it's the last symbol print a new line:
            if ($symbolIndex === $noOfSymbols) {
                echo PHP_EOL;
            }
        }
    }
}

// Get staircase size from STDIN:
$size = trim(fgets(STDIN));
// Get result:
staircase($size);
?>
