<?php

class Node
{
    public $left, $right;
    public $data;

    function __construct($data)
    {
        $this->left = $this->right = null;
        $this->data = $data;
    }
}

class Solution
{
    public function insert($root, $data)
    {
        if ($root == null) {
            return new Node($data);
        } else {
            if ($data <= $root->data) {
                $cur = $this->insert($root->left, $data);
                $root->left = $cur;
            } else {
                $cur = $this->insert($root->right, $data);
                $root->right = $cur;
            }
            return $root;
        }
    }

    /**
     * Correction
     * @param $root
     * @return int|mixed
     */
    public function getHeight($root){
        if($root == null) {
            return -1;
        }

        return 1 + max($this->getHeight($root->left), $this->getHeight($root->right));
    }

    public function myGetHeight(Node $root)
    {
        return $this->goDeep($root) - 1;
    }

    private function goDeep(Node $root)
    {
        $height = 1;

        if ($root->left && $root->right) {
            $height += max([$this->goDeep($root->right), $this->goDeep($root->left)]);
        } elseif ($root->left) {
            $height += $this->goDeep($root->left);
        } elseif ($root->right) {
            $height += $this->goDeep($root->right);
        }

        return $height;
    }

}//End of Solution
