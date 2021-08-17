<?php

$myAge = '34';
$myAgeWithLeadingZeros = str_pad($myAge, 5, "0", STR_PAD_LEFT);

echo $myAgeWithLeadingZeros."\n";