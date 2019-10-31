<?php

class NonEmptyBST implements TreeInterface
{
    public $data;
    /**
     * @var TreeInterface
     */
    public $left;
    /**
     * @var TreeInterface
     */
    public $right;

    public function __construct(
        $element,
        ?TreeInterface $left = null,
        ?TreeInterface $right = null
    ) {
        $this->data = $element;
        $this->left = $left ?? new EmptyBST();
        $this->right = $right ?? new EmptyBST();
    }

    /**
     * @return bool
     */
    public function isEmpty(): bool
    {
        return false;
    }

    /**
     * Get the size of the tree
     * @return int
     */
    public function cardinality(): int
    {
        return 1 + $this->left->cardinality() + $this->right->cardinality();
    }

    public function hasMember($element): bool
    {
        if ($this->data === $element) {
            return true;
        }
        if ($this->compareTo($element) < 0) {
            return $this->left->hasMember($element); // $element < $this->data so we check the left child
        }

        return $this->right->hasMember($element); // $element > $this->data so we check the right child
    }

    public function add($element)
    {
        if ($this->data === $element) {
            return $this;
        }

        if ($this->compareTo($element) < 0) {
            $this->left = new NonEmptyBST(
                $this->data,
                $this->left->add($element),
                $this->right
            );
            return $this->left;
        }

        if ($this->compareTo($element) > 0) {
            $this->right = new NonEmptyBST(
                $element,
                $this->left,
                $this->right->add($element)
            );
            return $this->right;
        }
    }

    public function compareTo($element): int
    {
        if ($element > $this->data) {
            return 1;
        }

        if ($element < $this->data) {
            return -1;
        }

        return 0;
    }
}
