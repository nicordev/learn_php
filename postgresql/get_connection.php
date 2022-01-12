<?php

function getConnection($host, $port, $database, $user, $password) {
    $connectionParameters = sprintf(
        "pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s",
        $host,
        $port,
        $database,
        $user,
        $password
    );

    return new PDO($connectionParameters);
}

function getConnectionFromIniFile($iniFilePath) {
    $parameters = parse_ini_file($iniFilePath);
    $connectionParameters = sprintf(
        "pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s",
        $parameters['host'],
        $parameters['port'],
        $parameters['database'],
        $parameters['user'],
        $parameters['password']
    );

    return new PDO($connectionParameters);
}
