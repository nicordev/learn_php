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

function printArray(array $array, string $glue = " ")
{
    echo implode($glue, $array) . "\n";
}

function convertListToArray(ListNode $firstNode)
{
    $node = $firstNode;
    $convertedList = [];

    while ($node !== null) {
        $convertedList[] = $node->value;
        $node = $node->next;
    }

    return $convertedList;
}

function sumOfConvertedListsToArrays(array $arr1, array $arr2)
{
    $number1 = array_reverse($arr1);
    $number2 = array_reverse($arr2);
    $result = [];
    $a = $b = $surplus = $i = 0;
    $count1 = count($number1);
    $count2 = count($number2);

    do {
        $a = $number1[$i] ?? 0;
        $b = $number2[$i] ?? 0;
        $i++;
        $currentSum = $a + $b + $surplus;
        $result[] = getSumAndRefreshSurplus($currentSum, $surplus);
    } while ($i < $count1 || $i < $count2 || $surplus !== 0);

    return array_reverse($result);
}

function getSumAndRefreshSurplus(int $sum, int &$surplus)
{
    $strSum = (string) $sum;
    $size = strlen($strSum);
    $surplus = 0;
    $strSurplus = "";

    if ($size > 4) {
        for ($i = 0; $i < $size - 4; $i++) {
            $strSurplus .= $strSum[$i];
        }
        $surplus = (int) $strSurplus;

        return (int) substr($strSum, 1, 4);
    }

    return $sum;
}

//printArray([9876, 5434, 0]);
//printArray(sumOfConvertedListsToArrays([9876, 5432, 1999], [1, 8001]));

//printArray([223, 104, 105]);
//printArray(sumOfConvertedListsToArrays([123, 4, 5], [100, 100, 100]));

printArray([6933, 8443, 5132, 6809, 8520, 8761]);
printArray(sumOfConvertedListsToArrays([9665], [6933, 8443, 5132, 6809, 8519, 9096]));