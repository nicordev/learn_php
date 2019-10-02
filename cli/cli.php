<?php


echo "Enter a number: ";

// We store the number in $number
fscanf(STDIN, "%d\n", $number);

echo $number;

echo "\nEnter a string: ";

// We store the string in $string
fscanf(STDIN, "%s\n", $string);

echo $string;
