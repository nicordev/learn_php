<?php

function isAlphaNumeric($value) {
    return ctype_alnum($value);
}

$values = [
    'Hello World!',
    'apple',
    '123',
    '123apple',
];

foreach ($values as $value) {
    if (!isAlphaNumeric($value)) {
        echo "$value is not alphanumeric\n";
        continue;
    }

    echo "$value is alphanumeric\n";
}
