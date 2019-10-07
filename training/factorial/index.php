<?php

require __DIR__ . "/factorial.php";

do {
    echo "Enter a positive number or 0 to quit: ";
    fscanf(STDIN, "%d\n", $number);

    if ($number > 0) {
        echo "Recursive\n";
        printFactorial($number, function ($n) {
            return recursiveFactorial($n);
        });

        echo "Iterative\n";
        printFactorial($number, function ($n) {
            return iterativeFactorial($n);
        });
    } else {
        echo "Good bye!\n";
    }
} while ($number > 0);
