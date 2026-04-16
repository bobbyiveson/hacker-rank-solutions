<?php

/**
 * Given a time in 12-hour AM/PM format, convert it to military (24-hour) time.
 *
 * Note:
 * - 12:00:00AM on a 12-hour clock is 00:00:00 on a 24-hour clock.
 * - 12:00:00PM on a 12-hour clock is 12:00:00 on a 24-hour clock.
 *
 * Sample Input:
 *
 * STDIN
 * -----
 * 07:05:45PM
 *
 * A single string that represents a time in 12-hour clock format (i.e. hh:mm:ssAM or hh:mm:ssPM).
 *
 * Sample Output:
 *
 * 19:05:45
 */
function timeConversion($timeIn12HourFormat) {
    // Find out whether the time is AM or PM:
    $amPm = substr($timeIn12HourFormat, -2);
    // Get the hour part of the string:
    $hourPart = intval(substr($timeIn12HourFormat, 0, 2));
    $newHourPart = $hourPart;
    if ($amPm === "PM") {
        if ($hourPart !== 12) {
            $newHourPart = $hourPart + 12;
        }
    }
    if ($amPm === "AM") {
        // If the hour part is a single integer then prepend a 0:
        if ($hourPart < 10) {
            $newHourPart = "0" . $hourPart;
        }
        // Else if the hour part is 12AM then this should be shown as '00':
        elseif ($hourPart === 12) {
            $newHourPart = "00";
        }
    }
    // Get just the time part, removing the AM/PM part:
    $time = substr($timeIn12HourFormat, 0, -2);
    // Add the converted hour part to the time:
    $time = substr_replace($time, $newHourPart, 0, 2);

    return $time;
}

// Get the 12-hour format time string from the STDIN:
$timeIn12HourFormat = trim(fgets(STDIN));
// Get the result:
$result = timeConversion($timeIn12HourFormat);
// Print the result:
echo $result, PHP_EOL;
?>
