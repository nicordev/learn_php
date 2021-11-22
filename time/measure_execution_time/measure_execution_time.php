<?php

function myBigFunction($durationInSeconds)
{
    echo "Hello";
    for ($i = 0; $i < $durationInSeconds; $i++) {
        echo ".";
        sleep(1);
    }
    echo " World!\n";
}

$start = microtime(true);
myBigFunction(3);
$duration = microtime(true) - $start;
echo "Elapsed time $duration s\n";



$start = microtime(true);
myBigFunction(3);
var_dump(microtime(true) - $start);
exit();