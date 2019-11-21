<?php

require_once __DIR__ . "/MyIterableClass/MyIterableClass.php";

function myGenerator()
{
    for ($i = 1; $i < 6; $i++) {
        yield $i;
    }
}

function readIterable(iterable $iterable)
{
    foreach ($iterable as $item) {
        echo $item . " ";
    }
}

$data = [1, 2, 3, 4, 5];
$myIterable = new MyIterableClass($data);

echo "An array\n";
readIterable($data);
echo "\nAn object implementing Traversable\n";
readIterable($myIterable);
echo "\nA generator\n";
readIterable($myIterable);
