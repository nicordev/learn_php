<?php

function reverseInParentheses($inputString) {

    $regex = "#(\([a-z]*\))#";
    $matches = [];

    while (preg_match_all($regex, $inputString, $matches)) {
        foreach ($matches[0] as $match) {
            $reverse = str_replace(["(", ")"], "", strrev($match));
            $inputString = str_replace($match, $reverse, $inputString);
        }
    }

    return $inputString;
}

$inputString = "abc(goz(noc))def";

echo reverseInParentheses($inputString);