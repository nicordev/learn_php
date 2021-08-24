<?php

function countOneByOne()
{
    static $count = 0;

    return ++$count;
}

for ($i = 0; $i < 10; $i++) {
    echo countOneByOne()."\n";
}
