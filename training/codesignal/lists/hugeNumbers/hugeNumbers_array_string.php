<?php

class ListNode
{
    public $value;
    public $next;

    public function __construct($value)
    {
        $this->value = $value;
        $this->next = null;
    }
}

function addTwoHugeNumbers($a, $b) {

    addZeros($a);
    addZeros($b);

    $strA = implode("", $a);
    $strB = implode("", $b);

    $result = (int) $strA + (int) $strB;

    return convertNumberToList((int) $result);
}

function addZeros(array &$arr)
{
    foreach ($arr as &$item) {
        $item = str_pad($item, 4, "0", STR_PAD_LEFT);
    }
}

function convertNumberToList(int $number)
{
    $number = (string) $number;
    $numberPart = "";
    $parts = [];
    $j = 0;

    for ($i = strlen($number) - 1; $i >= 0; $i--) {
        $j++;
        $numberPart .= $number[$i];

        if ($j >= 4 || $i === 0) {
            $numberPart = strrev($numberPart);
            $parts[] = (int) $numberPart;
            $numberPart = "";
            $j = 0;
        }
    }

    return array_reverse($parts);
}

//$a = [9876, 5432, 1999];
//$b = [1, 8001];

//$a = [123, 4, 5];
//$b = [100, 100, 100];

$a = [1];
$b = [9998, 9999, 9999, 9999, 9999, 9999];

print_r(addTwoHugeNumbers($a, $b));




/*
function convertNumberToList(int $number)
{
    $number = (string) $number;
    $numberPart = "";
    $parts = [];
    $j = 0;

    for ($i = strlen($number) - 1; $i >= 0; $i--) {
        $j++;
        $numberPart += $number[$i];

        if ($j > 4) {
            $parts[] = $numberPart;
            $numberPart = "";
            $j = 0;
        }
    }

    return $parts;
}
 */