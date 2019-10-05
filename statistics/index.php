<?php
/**
 * CLI script to test some homemade statistic functions
 */

require __DIR__ . '/median.php';
require __DIR__ . '/medium.php';

function askStatistics()
{
    $continue = true;
    /**
     * Regular expression corresponding to a list of integer or float number, positive or negative
     */
    $regex = '#^(-?\d+(\.\d+)?){1}( -?\d+(\.\d+)?)*$#';

    while ($continue) {
        echo "Enter all values separated by a space (or anything else to quit): ";
        $values = trim(fgets(STDIN));

        if (preg_match($regex, $values)) {
            $values = explode(" ", $values);
            $medium = medium($values);
            $median = median($values);
            echo "Medium: $medium\n";
            echo "Median: $median\n";
        } else {
            $continue = false;
            echo "Good bye!\n";
        }
    }
}

askStatistics();