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

/**
 * Print a list
 *
 * @param ListNode $node
 */
function printList(ListNode $node)
{
    echo $node->value . " ";

    if (null === $node->next) {
        echo "\n";
        return;
    }

    printList($node->next);
}

// CODE TO SEND
// ------------

/**
 * Convert an array to a list and return the first node
 *
 * @param array $array
 * @return ListNode
 */
function convertArrayToList(array $array)
{
    $count = count($array);
    $firstNode = new ListNode($array[0]);
    addNodeFromArray($firstNode, $array, $count);
    return $firstNode;
}

/**
 * Add a node from an array
 *
 * @param ListNode $node
 * @param $array
 * @param int $count
 * @param int $i
 * @return ListNode
 */
function addNodeFromArray(ListNode $node, &$array, int $count, int &$i = 1)
{
    if ($i >= $count) {
        return $node;
    }

    $newNode = new ListNode($array[$i]);
    $node->next = $newNode;
    $i++;

    addNodeFromArray($newNode, $array, $count, $i);
}

/**
 * Revert a list
 *
 * @param ListNode $node
 * @return ListNode
 */
function revertList(ListNode $node)
{

    $current = clone $node;
    $array = [];

    while ($current !== null) {
        $array[] = $current->value;
        $current = $current->next;
    }

    $array = array_reverse($array);

    return convertArrayToList($array);
}

function addTwoHugeNumbers(ListNode $number1, ListNode $number2)
{
    $number1 = revertList($number1);
    $number2 = revertList($number2);

    return revertList(recursiveSum($number1, $number2));
}

function recursiveSum(
    ?ListNode $number1,
    ?ListNode $number2,
    ?ListNode $result = null,
    ?ListNode $previous = null,
    int $surplus = 0
) {
    if (null === $number1 && null === $number2 && $surplus === 0) {
        return $result;
    }

    $current = new ListNode(0);
    $value1 = 0;
    $value2 = 0;

    if (null !== $number1) {
        $value1 = $number1->value;
        $number1 = $number1->next;
    }

    if (null !== $number2) {
        $value2 = $number2->value;
        $number2 = $number2->next;
    }

    $subTotal = $value1 + $value2 + $surplus;
    $surplus = 0;

    if ($subTotal > 9999) {
        $surplus = $subTotal - 9999;
        $current->value = 0;
    } else {
        $current->value = $subTotal;
    }

    if (null === $result) {
        $result = $previous = $current;
    } else {
        $previous->next = $current;
    }

    return recursiveSum($number1, $number2, $result, $current, $surplus);
}

// END OF CODE
// -----------

function testAdd(array $number1, array $number2, array $result = [])
{
    echo "Number 1: ";
    echo implode(" ", $number1);
    echo "\nNumber 2: ";
    echo implode(" ", $number2);
    echo "\n";

    $number1 = convertArrayToList($number1);
    $number2 = convertArrayToList($number2);
    $sum = addTwoHugeNumbers($number1, $number2);
    printList($sum);
    echo "\nExpected result: ";
    echo implode(" ", $result);
    echo "\n\n";
}

$number1 = [1, 9999];
$number2 = [1];
$result = [2, 0];

testAdd($number1, $number2, $result);
testAdd([9876, 5432, 1999], [1, 8001], [9876, 5434, 0]);
testAdd([123, 4, 5], [100, 100, 100], [223, 104, 105]);




/*
function revertList(ListNode $node) {

    $previous = null;
    $current = clone $node;
    $next = null;

    while ($current !== null) {
        $next = $current->next;
        $current->next = $previous;
        $current = $next;
        $previous = $current;
    }

    return $previous;
}
 */
