<?php

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

$fruits += $otherFruits; // Do nothing

print_r($fruits);

$fruits = array_merge($fruits, $otherFruits); // Works!

print_r($fruits);


$zog = array_merge($responses, $fruits);

print_r($zog);
