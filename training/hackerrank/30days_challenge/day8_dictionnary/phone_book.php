<?php

/*
 * HackerRank challenge day 8
 */

$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

function getLine($input)
{
    return rtrim(fgets($input));
}

function handleInput ($input)
{
    $entryCount = (int) getLine($input);
    $entries = [];

    for ($i = 1; $i <= $entryCount; $i++) {
        $entry = explode(" ", getLine($input));
        $entries[$entry[0]] = $entry[1];
    }

    while (!feof($input)) {
        $query = getLine($input);

        if (!isset($entries[$query])) {
            echo "Not found\n";
        } else {
            echo "{$query}={$entries[$query]}\n";
        }
    }
}

handleInput($_fp);

