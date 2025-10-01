<?php
function get_shortest(array $words) {
    // If array is empty, return null (nothing to compare)
    if (empty($words)) {
        return null;
    }

    // Start by assuming the first word is the shortest
    $shortest = $words[0];

    // Loop through all words
    foreach ($words as $word) {
        if (strlen($word) < strlen($shortest)) {
            $shortest = $word; // Found a shorter one → update
        }
    }

    return $shortest;
}
?>
