<?php

function printFruits(array $fruits) {
    foreach ($fruits as $fruit) {
        echo "$fruit\n";
    }
}

$fruits = new ArrayIterator([
    'apple',
    'orange',
    'banana'
]);

// printFruits($fruits); // Error: not an array but an ArrayIterator
printFruits($fruits->getArrayCopy());
