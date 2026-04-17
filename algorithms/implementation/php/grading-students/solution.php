<?php

/**
 * Grading Students
 *
 * HackerLand University has the following grading policy:
 * - Every student receives a grade in the inclusive range from 0 to 100.
 * - Any grade less than 40 is a failing grade.
 * Same is a professor at the university & likes to round each student's grade according to these rules:
 * - If the difference between the grade & the next multiple of 5 is less than 3, round the grade up to the next multiple of 5.
 * - If the value of the grade is less than 38, no rounding occurs as the result will still be a failing grade.
 * Examples:
 * - grade = 84 round to 85 (85 - 84 is less than 3).
 * - grade = 29 do not round (result is less than 38).
 * - grade = 57 do not round (60 - 57 is 3 or higher).
 *
 * @param int the number of student grades
 * @param int[] $grades the students' grades before rounding
 * @return int[] the students grades after rounding
 */
function gradingStudents($grades) {
    $roundedGrades = [];
    foreach ($grades as $grade) {
        if ($grade >= 38) {
            $nextMultipleOf5 = $grade + (5 - $grade % 5);
            $differenceToNextMultipleOf5 = $nextMultipleOf5 - $grade;
            if ($differenceToNextMultipleOf5 < 3) {
                $grade += $differenceToNextMultipleOf5;
            }
        }
        $roundedGrades[] = $grade;
    }
    return $roundedGrades;
}

// Handle input & output from the console:
// Get the number of grades from the console:
$gradesCount = fgets(STDIN);
$grades = [];
// Grab each grade from the console individually:
for ($index = 0; $index < $gradesCount; $index++) {
    $grades[] = intval(trim(fgets(STDIN)));
}
// Get the result:
$roundedGrades = gradingStudents($grades);
// Print the result:
echo PHP_EOL, implode("\n", $roundedGrades), PHP_EOL;
?>
