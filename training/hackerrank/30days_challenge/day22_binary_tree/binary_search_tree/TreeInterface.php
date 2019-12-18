<?php

interface TreeInterface
{
    /**
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * Get the size of the tree
     * @return int
     */
    public function cardinality(): int;

    public function hasMember($element): bool;

    public function add($element);

    public function compareTo($element): int;
}
