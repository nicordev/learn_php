<?php

function isCryptSolution($crypt, $solution) {

    $numbers = [];

    foreach ($crypt as $word) {
        $number = convertWordToNumber($word, $solution);
        if ($number === false) {
            return false;
        }
        $numbers[] = $number;
    }

    if ($numbers[2] === ($numbers[0] + $numbers[1])) {
        return true;
    }
    return false;
}

function convertWordToNumber(string $word, array &$solution) {

    $number = "";

    for ($i = 0, $size = strlen($word); $i < $size; $i++) {
        $number .= convertLetterToDigit($word[$i], $solution);
    }

    if ($number[0] === "0" && strlen($number) > 1) {
        return false;
    }

    return (int) $number;
}

function convertLetterToDigit(string $letter, array &$solution) {

    foreach ($solution as $row) {
        if ($letter === $row[0]) {
            return $row[1];
        }
    }
}

$crypt = ["A",
    "A",
    "A"];

var_dump(isCryptSolution($crypt, [["A","0"]]), true);