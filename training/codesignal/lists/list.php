<?php

class ListNodeBuilder
{
    public static function build(array $values)
    {
        $size = count($values);

        if ($size === 0) {
            return null;
        }

        $startingNode = new ListNode($values[0]);
        $index = 1;

        self::addNextNode($startingNode, $values, $index);

        return $startingNode;
    }

    private static function addNextNode($node, $values, &$index)
    {
        if (isset($values[$index])) {
            $node->next = new ListNode($values[$index]);
            $index++;
            self::addNextNode($node->next, $values, $index);
        }
    }
}

class ListNodePrinter
{
    public static function printList(?ListNode $node) {


        echo '<ul>';
        self::printANode($node);
        echo '</ul>';
    }

    private static function printANode(?ListNode $node)
    {
        if ($node !== null) {
            echo '<li>' . $node->value . '</li>';
            $node = $node->next;
            self::printANode($node);
        }
    }
}

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

// Official code
// *************

function removeKFromList($l, $k) {

    $params = [];

    return removeValues($l, $k, $params);
}

function removeValues(?ListNode $node, int $valueToRemove, array &$params) {

    if (!isset($params['index'])) {
        $params['index'] = 0;
    } else {
        $params['index']++;
    }

    if ($node !== null) {

        $nextNode = $node->next;
        if ($node->value === $valueToRemove) {
            removeANode($node, $params['parentNode'] ?? null);

            // Debug
            isset($params['deletedCounter']) ? $params['deletedCounter']++ : $params['deletedCounter'] = 0;

        } else {
            $params['parentNode'] = $node;
            if (!isset($params['startingNode'])) {
                $params['startingNode'] = $node;
            }
        }
        removeValues($nextNode, $valueToRemove, $params);
    }
    return $params['startingNode'] ?? null;
}

function removeANode(ListNode $node, ?ListNode $parentNode) {
    $nextNode = $node->next;
    unset($node);
    if ($parentNode) {
        $parentNode->next = $nextNode;
    }
}

// Tests

$values = [3, 1, 2, 3, 4, 5];
$k = 3;

$l = ListNodeBuilder::build($values);

ListNodePrinter::printList($l);

$l = removeKFromList($l, $k);

echo '<hr>';
ListNodePrinter::printList($l);


/*


function removeNode($node, $value)
{
    $nextNode = $node->next;

    if ($node->value === $value) {
        unset($node);
    }

    return $nextNode;
}
 */