<?php

$fruits = [
    'apple' => "on",
    'cherry' => "on",
    'pear' => "on",
    'peach' => "on",
    'orange' => "on",
    'banana' => "on",
    'coconut' => "on",
];

var_dump(filter_var($fruits['coconut'], FILTER_VALIDATE_BOOL));
