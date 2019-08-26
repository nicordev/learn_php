<?php

namespace App\Helper;


use PDO;
use PDOException;

class DatabaseHandler
{
    private static $instance;
    private $pdo;

    private function __construct()
    {}

    /**
     * Get the single instance of the database handler
     *
     * @param string|null $host
     * @param string|null $database
     * @param string|null $user
     * @param string $password
     * @return DatabaseHandler
     */
    public static function getInstance(string $host = null, string $database = null, string $user = null, string $password = "")
    {
        if(is_null(self::$instance)) {
            self::$instance = new DatabaseHandler();
            if ($host && $database && $user) {
                self::$instance->connect($host, $database, $user, $password);
            }
        }

        return self::$instance;
    }

    /**
     * Connect to the database with PDO
     *
     * @param string $host
     * @param string $database
     * @param string $user
     * @param string $password
     * @return PDO
     */
    public function connect(string $host, string $database, string $user, string $password)
    {
        $dsn = "$host:dbname=$database";
        if (!$this->pdo) {
            try {
                $this->pdo = new PDO($dsn, $user, $password);
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
        }

        return $this->pdo;
    }

    /**
     * Delete some rows in a table
     *
     * @param string $table
     * @param string $where
     */
    public function delete(string $table, string $where)
    {
        $this->pdo->query("DELETE FROM {$table} WHERE {$where}");
    }

    /**
     * Guess the table name from the entity class name
     *
     * @param $entity
     * @return mixed
     * @throws \Exception
     */
    public function getTableNameFromEntity($entity)
    {
        $fullClassName = get_class($entity);
        $classNameParts = explode("\\", $fullClassName);
        $table = strtolower(end($classNameParts));
        $query = "SHOW TABLES LIKE '{$table}'";
        $request = $this->pdo->query($query);
        $result = $request->fetch(PDO::FETCH_NUM);

        if ($result) {
            return $table;
        }

        throw new \Exception("No table has been found for the entity {$fullClassName}.");
    }
}