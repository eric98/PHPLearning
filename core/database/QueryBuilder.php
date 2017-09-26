<?php

namespace ergareFramework\Database;

use PDO;

class QueryBuilder
{
    private $pdo;

    /**
     * QueryBuilder constructor.
     * @param $pdo
     */
    public function __construct( PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchAll($table) {
        $statement = $this->pdo->prepare("SELECT * from $table");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function where($table,$filters){

    }

    public function insert($table,$fields)
    {
        $columns = implode(',', array_keys($fields));
        $values = ":" . implode(', :', array_keys($fields));
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($fields);
        } catch (\Exception $e){
            die('Alguna cosa no funciona bé al fer els inserts');
        }

    }
}