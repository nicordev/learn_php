<?php

require_once __DIR__.'/get_connection.php';

function findColumns(PDO $connection, string $columnsHint) {
    $hint = "%$columnsHint%";
    $getColumnsStatement = $connection->prepare("SELECT table_name, column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE column_name LIKE :hint");
    $getColumnsStatement->bindParam(':hint', $hint);
    $getColumnsStatement->execute();
    $getColumnsStatement->setFetchMode(PDO::FETCH_NUM);

    foreach ($getColumnsStatement->fetchAll() as $record) {
        $records[$record[0]][] = $record[1];
    }

    return $records;
}

$connection = getConnectionFromIniFile(__DIR__ . '/database_parameters.ini');

print_r(findColumns($connection, $argv[1]));
