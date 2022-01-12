<?php

require_once __DIR__.'/get_connection.php';

function getColumnsByTable(PDO $connection) {
    $getColumnsStatement = $connection->prepare("SELECT table_name, column_name FROM INFORMATION_SCHEMA.COLUMNS");
    $getColumnsStatement->execute();
    $getColumnsStatement->setFetchMode(PDO::FETCH_NUM);

    foreach ($getColumnsStatement->fetchAll() as $record) {
        $records[$record[0]][] = $record[1];
    }

    return $records;
}

$connection = getConnectionFromIniFile(__DIR__ . '/database_parameters.ini');

print_r(getColumnsByTable($connection));