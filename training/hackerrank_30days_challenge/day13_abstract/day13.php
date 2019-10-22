<?php
abstract class Book
{

    protected $title;
    protected  $author;

    function __construct($t,$a){
        $this->title=$t;
        $this->author=$a;
    }
    abstract protected function display();
}

//Write MyBook class
class MyBook extends Book
{
    private $price;

    public function __contruct(string $title, string $author, int $price)
    {
        parent::__construct($title, $author);
        $this->price = $price;
    }

    public function display()
    {
        echo "Title: {$this->title}";
        echo "Author: {$this->author}";
        echo "Price: {$this->price}";
    }
}

$title=fgets(STDIN);
