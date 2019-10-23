<?php
class Node{
    public $data;
    public $next;
    function __construct($d)
    {
        $this->data = $d;
        $this->next = NULL;
    }
}
class Solution{

    function insert($head,$data){
        
        if (null === $data) {
            return $head;
        }

        $newNode = new Node($data);

        if (null === $head) {
            return $newNode;
        }

        $tail = $head->next;

        if (null === $tail) {
            $head->next = $newNode;
            return $head;
        }

        while (null !== $next = $tail->next) {
            $tail = $next;
        }
        
        $tail->next = $newNode;


        return $head;
    }

    function display($head){
        $start=$head;
        while($start){
            echo $start->data,' ';
            $start=$start->next;
        }
    }
}
$T=intval(fgets(STDIN));
$head=null;
$mylist=new Solution();
while($T-->0){
    $data=intval(fgets(STDIN));
    $head=$mylist->insert($head,$data);
}
$mylist->display($head);
?>
