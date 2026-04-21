<?php

/**
 * Number Line Jump
 *
 * If given the locations (on a number line) & speeds of two kangaroos, determine if they will eventually meet each other on the number line.
 *
 * @param int $kangaroo1Location The location of kangaroo 1
 * @param int $kangaroo1Speed The speed of kangaroo 1
 * @param int $kangaroo2Location The location of kangaroo 2
 * @param int $kangaroo2Speed The speed of kangaroo 2
 *
 * @return string Return 'Yes' or 'No'
 */

function kangaroo($kangaroo1Location, $kangaroo1Speed, $kangaroo2Location, $kangaroo2Speed) {
    if ($kangaroo1Location === $kangaroo2Location) {
        // Kangaroos have already met:
        $kangaroosWillMeet = "YES";
    }
    elseif (($kangaroo1Location > $kangaroo2Location && $kangaroo1Speed >= $kangaroo2Speed) ||
            ($kangaroo2Location > $kangaroo1Location && $kangaroo2Speed >= $kangaroo1Speed)) {
        // Kangaroos will never meet:
        $kangaroosWillMeet = "NO";
    }
    else {
        // A kangaroo is behind:
        $isKangarooBehind = $kangaroo1Location < $kangaroo2Location;
        $keepJumping = true;
        // Kangaroos might meet:
        while ($keepJumping) {
            $kangaroo1Location += $kangaroo1Speed;
            $kangaroo2Location += $kangaroo2Speed;
            if ($kangaroo1Location === $kangaroo2Location) {
                $kangaroosWillMeet = "YES";
                $keepJumping = false;
            }
            // The kangaroo is now in front & can never meet the other kangaroo:
            elseif ($isKangarooBehind !== ($kangaroo1Location < $kangaroo2Location)) {
                $kangaroosWillMeet = "NO";
                $keepJumping = false;
            }
        }
    }

    return $kangaroosWillMeet;
}

// Handle IO from the console:
$parameters = explode(" ", trim(fgets(STDIN)));
$kangaroo1Location = $parameters[0];
$kangaroo1Speed = $parameters[1];
$kangaroo2Location = $parameters[2];
$kangaroo2Speed = $parameters[3];
$result = kangaroo($kangaroo1Location, $kangaroo1Speed, $kangaroo2Location, $kangaroo2Speed);
echo $result . PHP_EOL;
?>
