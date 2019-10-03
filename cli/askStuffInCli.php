<?php

function askPositiveNumber()
{
    do {
        echo "Enter a positive number or 0 to quit: ";
        fscanf(STDIN, "%d\n", $number);

        if ($number > 0) {
            echo "You entered $number.\n";
        } else {
            echo "Good bye!\n";
        }
    } while ($number > 0);
}

askPositiveNumber();
