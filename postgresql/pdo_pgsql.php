<?php

require_once __DIR__.'/get_connection.php';

$connection = getConnectionFromIniFile(__DIR__.'/database_parameters.ini');

$statement = $connection->prepare('select 3');
$result = $statement->execute();

var_dump($statement->fetchAll());

$sentence = "hello world!";

$statement = $connection->prepare("select :myParameter as greetings");
$statement->bindParam(':myParameter', $sentence, PDO::PARAM_STR);
$statement->execute();

var_dump($statement->fetchAll());
