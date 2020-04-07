<?php

// Decode JSON

$rawJson = file_get_contents("data/dashboard.json");

// Build objects from the json string
$content = json_decode($rawJson);

var_dump($content);

// Encode JSON

$myObject = new class
{
    public $arrayAttribute = [1, 2, 3];
    public $publicAttribute = "public attribute";
    protected $protectedAttribute = "protected attribute";
    private $privateAttribute = "private attribute";
};

$jsonEncoded = json_encode($myObject); // Only public attributes are kept

var_dump($jsonEncoded);