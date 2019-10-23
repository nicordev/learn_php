<?php

function findRow(int $index, int $width)
{
    if ($index % $width === 0) {
        return $index / $width;
    }

    return floor($index / $width) + 1;
}

echo "Enter the width: ";
$width = (int) rtrim(fgets(STDIN));
echo "Enter the index: ";

while ("" !== $index = rtrim(fgets(STDIN))) {
    echo "Row: " . findRow($index, $width) . "\n";
}
