<?php
function sequence(int $nbr) {
    if ($nbr < 0) {
        return; // Do nothing for negative numbers
    }

    // The first sequence always starts with "1"
    $current = "1";

    for ($i = 0; $i <= $nbr; $i++) {
        // Print the current sequence
        echo $current . PHP_EOL;

        // Generate the next sequence
        $next = "";
        $count = 1;

        for ($j = 1; $j < strlen($current); $j++) {
            if ($current[$j] == $current[$j - 1]) {
                $count++;
            } else {
                // Add "count + digit" to next sequence
                $next .= $count . $current[$j - 1];
                $count = 1;
            }
        }

        // The last group
        $next .= $count . $current[strlen($current) - 1];

        // Next iteration
        $current = $next;
    }
}


