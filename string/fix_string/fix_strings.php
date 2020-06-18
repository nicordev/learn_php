<?php

function fixFile(string $fileName) {
    if ($fileName === '.' || $fileName === '..') {
        return;
    }
    
    $fileContent = file_get_contents(__DIR__ . "/file_to_fix/$fileName");
    
    return fixString($fileContent);
}

function fixString(string $stringToFix)
{
    $fixedString = $stringToFix;
    $fixedString = str_replace('Ã¯', 'ï', $fixedString);
    $fixedString = str_replace('Â²', '²', $fixedString);
    $fixedString = str_replace('Ã©', 'é', $fixedString);
    $fixedString = str_replace('Ã¨', 'è', $fixedString);
    $fixedString = str_replace('Ã', 'à', $fixedString);
    $fixedString = str_replace('à¨', 'è', $fixedString);
    $fixedString = str_replace('à§', 'ç', $fixedString);
    $fixedString = str_replace('àª', 'ê', $fixedString);
    $fixedString = str_replace('àª', 'ê', $fixedString);
    $fixedString = str_replace('â‚¬', '€', $fixedString);
    $fixedString = str_replace('ö', 'ï', $fixedString);
    $fixedString = str_replace('ë', 'ö', $fixedString);
    $fixedString = str_replace('à¹', 'ù', $fixedString);
    $fixedString = str_replace('à¢', 'â', $fixedString);
    $fixedString = str_replace('à«', 'ê', $fixedString);
    $fixedString = str_replace('à»', 'û', $fixedString);
    $fixedString = str_replace('à´', 'ô', $fixedString);
    $fixedString = str_replace('à¼', 'ü', $fixedString);
    
    return $fixedString;
}

$filesToFix = scandir(__DIR__ . '/file_to_fix');

$fixedStrings = array_map('fixFile', $filesToFix);

array_map(function ($fixedString) {
    echo "$fixedString\n";
}, $fixedStrings);