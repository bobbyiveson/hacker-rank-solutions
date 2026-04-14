<?php
/**
 * GLOBAL PHP TEST RUNNER
 * Usage: php path/to/tester.php <solution.php> <input.txt> <output.txt>
 */

// 1. Check that the correct number of arguments have been passed:
if ($argc < 4)
{
    echo "❌ Missing Arguments!\n";
    echo "Usage: tester.php <path/to/solution.php> <path/to/input.txt> <path/to/output.txt>";
    exit(1);
}

// 2. Assign arguments to variables:
// Get the solution file:
$solution_file = $argv[1];
// Get the input file:
$input_file = $argv[2];
// Get the output file:
$output_file = $argv[3];

// 3. Check that each file exists:
foreach ([$solution_file, $input_file, $output_file] as $file)
{
    if (!file_exists($file))
    {
        echo "🚨 Error: File not found -> $file\n";
        exit(1);
    }
}

echo "🧪 Testing: $solution_file\n";
echo "---------------------------\n";

// 4. Run the solution & capture the output:
$command = "php " . escapeshellarg($solution_file) . " < " . escapeshellarg($input_file);
$actual_output = shell_exec($command);

// 5. Read the expected output:
$expected_output = file_get_contents($output_file);

// 6. Compare the results trimming any white space
if (trim($actual_output) === trim($expected_output))
{
    echo "✅ Result: PASSED\n";
}
else
{
    echo "❌ Result: FAILED\n";
    echo "\n---- EXPECTED ----\n";
    echo trim($expected_output) . "\n";
    echo "------------------\n";
    echo "\n----- ACTUAL -----\n";
    echo trim($actual_output) . "\n";
    echo "------------------\n";
}
?>
