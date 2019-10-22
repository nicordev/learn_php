<?php

function countdown(int $seconds)
{
    for ($i = $seconds; $i > 0; $i--) {
        print chr(27) . '[2K'; // Clear the line using the ANSI Escape character 27
        echo "$i s\r";
        sleep(1);
    }

    echo "Boom!\n";
}

countdown(10);