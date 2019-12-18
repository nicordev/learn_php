<?php

function commonCharacterCount($s1, $s2) {

    $commonCharacterCount = 0;
    $arrayS1 = str_split($s1);
    sort($arrayS1);
    $s1 = implode("", $arrayS1);

    for ($i = 0, $size = strlen($s1); $i < $size; $i++) {
        if ($i === 0 || $s1[$i] !== $s1[$i - 1]) {
            $s1Count = substr_count($s1, $s1[$i]);
            $s2Count = substr_count($s2, $s1[$i]);
            if ($s2Count > 0) {
                if ($s1Count > $s2Count) {
                    $commonCharacterCount += $s2Count;
                } else {
                    $commonCharacterCount += $s1Count;
                }
            }
        }
    }

    return $commonCharacterCount;
}

$s1 = "aabcc";
$s2 = "adcaa";

echo commonCharacterCount($s1, $s2);