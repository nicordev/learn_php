<?php

/*
 * Hacker Rank 30 days challenge
 *
 * https://www.hackerrank.com/challenges/30-recursion/problem?h_r=email&unlock_token=4508e98ea747a9383b8b2062aba51410439c7e8f&utm_campaign=30_days_of_code_continuous&utm_medium=email&utm_source=daily_reminder
 */

function factorial($n) {
    if ($n <= 1) {
        return $n;
    }
    return $n * factorial($n-1);
}

echo "Enter a number or 0 to quit: ";

while (0 !== $input = (int) rtrim(fgets(STDIN))) {
    echo factorial($input) . "\n";
    echo "Enter a number or 0 to quit: ";
}

echo "Good bye!";