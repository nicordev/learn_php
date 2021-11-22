<?php

// microtime: get number of seconds since the Unix epoch (0:00:00 January 1,1970 GMT)
// https://www.php.net/manual/en/function.microtime.php
$start = microtime(true); // true to get a float value

echo "Press 'Enter' to stop the timewatch.\n";

fgetc(STDIN);

$elapsedTime = microtime(true) - $start;

echo "$elapsedTime seconds\n";
echo "Bye!\n";