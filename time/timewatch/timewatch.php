<?php

$start = microtime(true);

echo "Press 'Enter' to stop the timewatch.\n";

fgetc(STDIN);

$elapsedTime = microtime(true) - $start;

echo "$elapsedTime seconds\n";
echo "Bye!\n";