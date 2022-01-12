<?php

require_once __DIR__.'/get_connection.php';

function getTables(PDO $connection) {
    $getTablesStatement = $connection->prepare("SELECT table_name FROM information_schema.tables WHERE table_schema='public' AND table_type='BASE TABLE';");
    $getTablesStatement->execute();

    return array_map(function ($record) {
        return $record[0];
    }, $getTablesStatement->fetchAll());
}

function getTableColumns(PDO $connection, string $tableName) {
    $getColumnsStatement = $connection->prepare("SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :tableName");
    $getColumnsStatement->bindParam(':tableName', $tableName);
    $getColumnsStatement->execute();
    $getColumnsStatement->setFetchMode(PDO::FETCH_NUM);

    return array_map(function ($record) {
        return $record[0];
    }, $getColumnsStatement->fetchAll());
}

$connection = getConnectionFromIniFile(__DIR__ . '/database_parameters.ini');
$tables = getTables($connection);

foreach ($tables as $table) {
    $columns[$table] = getTableColumns($connection, $table);
}

print_r($columns);
