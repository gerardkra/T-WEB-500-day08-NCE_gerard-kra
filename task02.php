<?php
function dog_bark(int $woof_nb) {
    if ($woof_nb <= 0) {
        // If number is 0 or negative → just print a newline
        echo PHP_EOL;
        return;
    }

    // Repeat "woof" woof_nb times
    for ($i = 0; $i < $woof_nb; $i++) {
        echo "woof";
        if ($i < $woof_nb - 1) {
            echo " "; // add a space between woofs, but not after the last one
        }
    }

    // Always end with a newline
    echo PHP_EOL;
}
?>
