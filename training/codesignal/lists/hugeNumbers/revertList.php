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

    if (!$node->next) {
        echo "\n";
        return;
    }

    printList($node->next);
}

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
function revertList(ListNode $node) {

    $current = clone $node;
    $array = [];

    while ($current !== null) {
        $array[] = $current->value;
        $current = $current->next;
    }

    $array = array_reverse($array);

    return convertArrayToList($array);
}

$values = [1, 2, 3, 4, 5];

$list = convertArrayToList($values);

printList($list);

$reversedList = revertList($list);

printList($reversedList);


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