<?php

require __DIR__ . "/fibonacci.php";

function askFibonacci()
{
    do {
        echo "Enter a positive number or 0 to quit: ";
        fscanf(STDIN, "%d\n", $number);

        if ($number > 0) {
            echo "Fibonacci sequence for $number terms\n";
            echo "Using an iterative function:\n";
            echo implode(", ", iterativeFibonacciSequence($number)) . "\n";
            echo "Using a recursive function:\n";
            echo implode(", ", recursiveFibonacciSequence($number)) . "\n";
        } else {
            echo "Good bye!\n";
        }
    } while ($number > 0);
}

askFibonacci();
