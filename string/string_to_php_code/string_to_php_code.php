<?php

function convertAsKeysValues(string $inputString, array &$keys, array &$values)
{
    $keys = str_replace(" ", "", $inputString);
    $keys = str_replace("-", "_", $keys);
    $keys = strtoupper($keys);
    $keys = explode(",", $keys);
    $values = explode(", ", $inputString);
}

function printAsArray(string $inputString, string $keyPrefix = "")
{
    $keys = $values = [];
    convertAsKeysValues($inputString, $keys, $values);

    echo "[\n";

    for ($i = 0, $count = count($values); $i < $count; $i++) {
        echo "\tself::{$keyPrefix}{$keys[$i]} => '{$values[$i]}',\n";
    }

    echo "]\n";
}

function printAsConstants(string $inputString, string $keyPrefix = "")
{
    $keys = $values = [];
    convertAsKeysValues($inputString, $keys, $values);

    for ($i = 0, $count = count($values); $i < $count; $i++) {
        echo "public const {$keyPrefix}{$keys[$i]} = '{$values[$i]}';\n";
    }
}

function main(string $inputString)
{
    echo "Enumeration splitter\n\n";

    echo "Key prefix: ";
    $prefix = "";
    fscanf(STDIN, "%s\n", $prefix);

    echo "\n\nConstants:\n\n";
    printAsConstants($inputString, $prefix);
    
    echo "\nArray:\n\n";
    printAsArray($inputString, $prefix);
}

main("BOOLEAN, LIST, MULTI, TEXT, NUMBER");
