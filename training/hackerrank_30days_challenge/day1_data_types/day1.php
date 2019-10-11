<?php
$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";
// Declare second integer, double, and String variables.
$myInt = 0;
$myDouble = 0.0;
$myString = "";

// Read and save an integer, double, and String to your variables.
$myInt = fgets(STDIN);
$myDouble = fgets(STDIN);
$myString = fgets(STDIN);

// Print the sum of both integer variables on a new line.
echo $i + $myInt;
echo "\n";

// Print the sum of the double variables on a new line.
echo number_format($d + $myDouble, 1);
echo "\n";

// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.
echo $s . $myString;
echo "\n";

fclose($handle);
