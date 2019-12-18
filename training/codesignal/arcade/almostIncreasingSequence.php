<?php

function dump(...$args) {
    foreach ($args as $arg) {
        if (is_array($arg)) {
            print_r($arg);
        } else {
            var_dump($arg);
        }
        echo '<hr>';
    }
}

function almostIncreasingSequence($sequence) {

    $size = count($sequence);
    $a = 0;
    $b = 0;
    for ($i = 1; $i < $size; $i++) {
        if ($sequence[$i] <= $sequence[$i - 1]) {
            $a++;
        }
    }
    for ($i = 2; $i < $size; $i++) {
        if ($sequence[$i] <= $sequence[$i - 2]) {
            $b++;
        }
    }
    if($a > 1 || $b > 1) {
        return false;
    } else {
        return true;
    }
}

$sequence = [1, 2, 3, 4, 3, 6];
$sequence = [1, 2, 1, 2];
$sequence = [10, 1, 2, 3, 4, 5];
dump(almostIncreasingSequence($sequence));

$sequence = [1, 3, 2];

dump(almostIncreasingSequence($sequence));


/* 37/38

function almostIncreasingSequence($sequence) {

    $max = min($sequence) - 1;
    $cleanSequence = [];

    for ($i = 0, $size = count($sequence); $i < $size - 1; $i++) {

        if ($sequence[$i] < $sequence[$i + 1] && $sequence[$i] > $max) {
            $cleanSequence[$i] = $sequence[$i];
            $cleanSequence[$i + 1] = $sequence[$i + 1];
            $max = $sequence[$i + 1];
        }
    }

    if ($sequence[$size - 1] > $max) {
        $cleanSequence[] = $sequence[$size - 1];
    }

    dump($cleanSequence);

    if (count($sequence) - count($cleanSequence) > 1) {
        return false;
    }
    return true;
}

*/

/*
function almostIncreasingSequence($sequence) {
    $numberOfElementsToRemove = 0;
    for ($i = 0, $size = count($sequence); $i < $size - 1; $i++) {
        if ($sequence[$i] >= $sequence[$i + 1]) {
            $numberOfElementsToRemove++;
        }
        if ($numberOfElementsToRemove > 1) {
            return false;
        }
    }
    return true;
}
*/

/*
function almostIncreasingSequence($sequence) {
    $numberOfElementsToRemove = 0;
    $cleanSequence = [];

    for ($i = 0, $size = count($sequence); $i < $size - 1; $i++) {
        if ($sequence[$i] >= $sequence[$i + 1]) {
            $numberOfElementsToRemove++;
        }
        if ($numberOfElementsToRemove > 1) {
            return false;
        }
        if ($sequence[$i] < $sequence[$i + 1]) {
            $cleanSequence[] = $sequence[$i];
        }
    }
    if ($sequence[$size - 1] > $sequence[$i]) {
        $cleanSequence[] = $sequence[$size - 1];
    }

    print_r($cleanSequence);

    for ($i = 0, $size = count($cleanSequence); $i < $size - 1; $i++) {
        if ($cleanSequence[$i] >= $cleanSequence[$i + 1]) {
            $numberOfElementsToRemove++;
        }
        if ($numberOfElementsToRemove > 1) {
            return false;
        }
    }

    return true;
}


*/

/*
function almostIncreasingSequence($sequence) {

    $index = 0;
    $max = 0;
    $numberOfElementsToRemove = 0;

    return analyse($sequence, count($sequence), $numberOfElementsToRemove, $index, $max);
}

function analyse(array $sequence, $$size, $&$numberOfElementsToRemove, $&$index = 0, $&$max = 0)
{
    if ($index < $size) {
        if ($sequence[$index] < $max) {
            $numberOfElementsToRemove++;
        }
        if ($sequence[$index] < $sequence[$index + 1]) {
            $max = $sequence[$index + 1];
        } else {
            $max = $sequence[$index];
            $numberOfElementsToRemove++;
        }
        if ($numberOfElementsToRemove > 1) {
            return false;
        }
        $index++;
        analyse($sequence, $size, $numberOfElementsToRemove, $index, $max);
    }
    return true;
}
 */

/*

function almostIncreasingSequence($sequence) {

    $numberOfElementsToRemove = 0;
    $max = min($sequence) - 1;
    $cleanSequence = [$sequence[0]];

    for ($i = 0, $size = count($sequence); $i < $size - 1; $i++) {

        if ($sequence[$i] < $sequence[$i + 1] && $sequence[$i] > $max) {
            $cleanSequence[] = $sequence[$i + 1];
            $max = $sequence[$i];
        } else {
            $numberOfElementsToRemove++;
        }
    }

    if ($sequence[$size - 1] > $max) {
        $cleanSequence[] = $sequence[$size - 1];
    }

    $diff = array_diff($sequence, $cleanSequence);

    print_r($sequence);
    echo "<hr>";
    print_r($cleanSequence);
    echo "<hr>";
    print_r($diff);

    if ($numberOfElementsToRemove > 1 || count($diff) > 1) {
        return false;
    }
    return true;
}

 */

/*

function almostIncreasingSequence($sequence) {

    $increasingValues = [$sequence[0]];

    for ($i = 1, $size = count($sequence); $i < $size; $i++) {
        if ($sequence[$i] > end($increasingValues)) {
            $increasingValues[] = $sequence[$i];
        }
    }
    if ($size - count($increasingValues) > 1) {
        return false;
    }
    return true;
}

 */

/*
function almostIncreasingSequence($sequence) {

    $numberOfElementsToRemove = 0;
    $max = min($sequence) - 1;
    $cleanSequence = [$sequence[0]];

    for ($i = 0, $size = count($sequence); $i < $size - 1; $i++) {

        if ($sequence[$i] < $sequence[$i + 1] && $sequence[$i] > $max) {
            $cleanSequence[] = $sequence[$i + 1];
            $max = $sequence[$i + 1];
        } else {
            $numberOfElementsToRemove++;
        }
    }

    if ($sequence[$size - 1] > $max) {
        $cleanSequence[] = $sequence[$size - 1];
    }

    dump($cleanSequence);

    //dump($sequence, $cleanSequence, $numberOfElementsToRemove, count($sequence) - count($cleanSequence));

    if ($numberOfElementsToRemove > 1 || count($sequence) - count($cleanSequence) > 1) {
        return false;
    }
    return true;
}
 */