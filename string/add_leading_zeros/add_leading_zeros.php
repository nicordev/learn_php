<?php

$myAge = '34';
$myAgeWithLeadingZeros = str_pad($myAge, 5, "0", STR_PAD_LEFT);

echo $myAgeWithLeadingZeros."\n";

echo "add 4 zeros before 1:\n".sprintf('%05d', 1);