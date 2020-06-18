<?php

function fixString(string $stringToFix)
{
    $fixedString = str_replace('Ã¯', 'ë', $stringToFix);
    $fixedString = str_replace('Ã©', 'é', $fixedString);
    $fixedString = str_replace('Ã', 'à', $fixedString);
    $fixedString = str_replace('Ã¨', 'è', $fixedString);

    return $fixedString;
}

echo fixString($argv[1]);
