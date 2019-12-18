<?php

function firstNotRepeatingCharacter($s) {

    $arrayString = myExplode($s);

    $charOccurences = array_count_values($arrayString);

    foreach ($charOccurences as $character => $occurrence) {
        if ($occurrence === 1) {
            return $character;
        }
    }
    return "_";
}

function myExplode(string $str) {

    $myArray = [];
    for ($i = 0, $size = strlen($str); $i < $size; $i++) {
        $myArray[] = $str[$i];
    }
    return $myArray;
}

$s = "abacabad";

echo firstNotRepeatingCharacter($s);