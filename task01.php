<?php
// We define our function with 4 parameters: age, name, gpa, isStudent
function discover_type(int $age, string $name, float $gpa, bool $isStudent)
{
    // Check if the person is a student (true/false)
    if ($isStudent) {
        // If true → print with GPA
        echo "Hello my name is $name, I'm $age years old. I'm a student at Epitech with a GPA of $gpa." . PHP_EOL;
    } else {
        // If false → print without GPA
        echo "Hello my name is $name, I'm $age years old. I'm not a student." . PHP_EOL;
    }
}
?>
