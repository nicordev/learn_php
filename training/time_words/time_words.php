<?php

/*
 * HackerRank - Time in words
 * 
 * https://www.hackerrank.com/challenges/the-time-in-words/problem
 */

function timeInWords(int $h, int $m)
{
    $timeWords = [
        "",
        "one",
        "two",
        "three",
        "four", 
        "five", 
        "six", 
        "seven",
        "eight",
        "nine",
        "ten",
        "eleven",
        "twelve",
        "thirteen",
        "fourteen",
        "quarter",
        "sixteen",
        "seventeen",
        "eighteen",
        "nineteen",
        "twenty",
        "twenty one",
        "twenty two",
        "twenty three",
        "twenty four",
        "twenty five",
        "twenty six",
        "twenty seven",
        "twenty eight",
        "twenty nine",
        "half"
    ];
    
    $hour = $timeWords[$h];

    if ($m === 0) {
        if ($h === 0) {
            return "midnight";
        }
        return "$hour o' clock";
    }

    if ($m <= 30) {
        $minute = $timeWords[$m];
        if ($m === 1) {
            return "$minute minute past $hour";
        }
        if ($m === 15) {
            return "$minute past $hour";
        }
        if ($m === 30) {
            return "$minute past $hour";
        }
        return "$minute minutes past $hour";
    }
    
    $hour = $timeWords[$h + 1];

    if ($m === 45) {
        return "quarter to $hour";
    }

    $minute = $timeWords[60 - $m];

    if ($m === 59) {
        return "$minute minute to $hour";
    }
    
    return "$minute minutes to $hour";
}

echo timeInWords(1, 0) . "\n";
echo timeInWords(1, 1) . "\n";
echo timeInWords(2, 15) . "\n";
echo timeInWords(2, 30) . "\n";
echo timeInWords(11, 35) . "\n";
echo timeInWords(11, 40) . "\n";
echo timeInWords(11, 45) . "\n";
echo timeInWords(7, 29) . "\n";
echo timeInWords(5, 30) . "\n";