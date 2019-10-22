<?php

function countSeconds(int $seconds)
{
    for ($i = 1; $i <= $seconds; $i++) {
        echo "$i s\r"; // The '\r' character put the cursor at the beginning of the line
        sleep(1);
    }

    echo "Done!\n";
}

countSeconds(10);