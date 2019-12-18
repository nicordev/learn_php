<?php

class EmptyBST implements TreeInterface
{
    public function emptyBST()
    {
        
    }
    
    /**
     * @return bool
     */
    public function isEmpty(): bool
    {
        return true;
    }

    /**
     * Get the size of the tree
     * @return int
     */
    public function cardinality(): int
    {
        return 0;
    }

    public function hasMember($element): bool
    {
        return false;
    }

    public function add($element)
    {
        return new NonEmptyBST($element);
    }

    public function compareTo($element): int
    {
        return 1;
    }
}
