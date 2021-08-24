<?php

function printFruits($title, $fruits) {
    echo "$title:\n  " . implode("\n  ", $fruits) . "\n";
}

$fruits = [
    'apple',
    'peach',
    'pear',
    'cherry'
];

$otherFruits = [
    'banana',
    'raspberry'
];

printFruits('Fruits', $fruits);

$extractedFruits = array_splice($fruits, 0, 2, $otherFruits);

printFruits('Extracted fruits', $extractedFruits);
printFruits('Fruits', $fruits);