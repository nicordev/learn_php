<?php

function getLastDigit(int $number)
{
    $result = (string) pow(2, $number);
    return strrev($result)[0]; // Here I reverse the string and return the first character, which corresponds to the last digit
}

echo getLastDigit(10);
