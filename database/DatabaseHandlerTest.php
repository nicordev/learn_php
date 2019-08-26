<?php

namespace App\Tests\Service;


use App\Entity\Product;
use App\Helper\DatabaseHandler;
use PHPUnit\Framework\TestCase;

class DatabaseHandlerTest extends TestCase
{
    private $database;

    public function setUp()
    {
        $this->database = DatabaseHandler::getInstance("mysql", "ocp7_bilemo_api", "root", "");
    }

    public function testGetTableNameFromEntity()
    {
        $product = new Product();
        $table = $this->database->getTableNameFromEntity($product);
        $this->assertEquals("product", $table);
        $this->expectException(\Exception::class);
        $table = $this->database->getTableNameFromEntity($this);
    }
}