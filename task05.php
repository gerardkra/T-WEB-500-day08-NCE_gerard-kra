<?php
function calc_average(array $numbers) {
    if (empty($numbers)) {
        return 0; // If no numbers, return 0
    }

    // Calculate sum of all numbers
    $sum = array_sum($numbers);

    // Count how many numbers
    $count = count($numbers);

    // Average
    $average = $sum / $count;

    // Round to 1 decimal place
    return round($average, 1);
}


