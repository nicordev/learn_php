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

    function removeDuplicates($head){
        //Write your code here
        if ($head !== null) {
            $current = $previous = $head;

            while (null !== $current = $current->next) {
                if ($current->data === $previous->data) {
                    while (null !== $current && $current->data === $previous->data) {
                        $current = $current->next;
                    }
                    $previous->next = $current;
                    $current = $previous;
                }
                $previous = $current;
            }
        }

        return $head;
    }

    function insert($head,$data){
        //complete this method
        $p=new Node($data);
        if($head==null){
            $head=$p;
        }
        else if($head->next==null){
            $head->next=$p;
        }
        else{
            $start=$head;
            while($start->next!=null){
                $start=$start->next;
            }
            $start->next=$p;
        }
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
$data = [1, 1, 1, 1, 1, 1, 1];
$head=null;
$mylist=new Solution();

foreach ($data as $datum) {
    $head=$mylist->insert($head,$datum);
}
$head=$mylist->removeDuplicates($head);
$mylist->display($head);
