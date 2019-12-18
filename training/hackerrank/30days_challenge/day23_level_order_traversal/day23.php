<?php
class Node{
    public $left,$right;
    public $data;
    function __construct($data)
    {
        $this->left=$this->right=null;
        $this->data = $data;
    }
}
class Solution{
    public function insert($root,$data){
        if($root==null){
            return new Node($data);
        }
        else{
            if($data<=$root->data){
                $cur=$this->insert($root->left,$data);
                $root->left=$cur;
            }
            else{
                $cur=$this->insert($root->right,$data);
                $root->right=$cur;
            }
            return $root;
        }
    }

    public function levelOrder($root){

        if (null !== $root) {
            $queue[] = $root;

            while (!empty($queue)) {
                $node = array_pop($queue);
                echo "{$node->data} ";
                
                if ($node->left) {
                    array_unshift($queue, $node->left);
                }

                if ($node->right) {
                    array_unshift($queue, $node->right);
                }
            }
        }
    }

}//End of Solution
$myTree=new Solution();
$root=null;
$T=intval(fgets(STDIN));
while($T-->0){
    $data=intval(fgets(STDIN));
    $root=$myTree->insert($root,$data);
}
$myTree->levelOrder($root);
/*
this.levelOrder = function(root) {
    let queue = [root];

    while (queue.length > 0) {
        node = queue.pop();
        process.stdout.write(node.data + ' ')
        if (node.left) queue.unshift(node.left);
        if (node.right) queue.unshift(node.right);
    }
};

levelOrder(BinaryTree t) {
    if(t is not empty) {
        // enqueue current root
        queue.enqueue(t)

        // while there are nodes to process
        while( queue is not empty ) {
            // dequeue next node
            BinaryTree tree = queue.dequeue();

            process tree's root;

            // enqueue child elements from next level in order
            if( tree has non-empty left subtree ) {
                queue.enqueue( left subtree of t )
            }
            if( tree has non-empty right subtree ) {
                queue.enqueue( right subtree of t )
            }
        }
    }
}
 */
