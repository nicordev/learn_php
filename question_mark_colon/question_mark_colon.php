<?php

$basket = [
    'fruits' => [
        'apple',
        'peach',
        'pear'
    ],
    'owner' => []
];

$fruits = $basket['fruits'] ?: 'no fruits in the basket.';

var_dump($fruits);

$customer = $basket['owner'] ?: 'unknown owner.';

var_dump($customer);

// Will throw a PHP Warning:  Undefined array key "color"
$color = $basket['color'] ?: 'unknown color.';

var_dump($color);