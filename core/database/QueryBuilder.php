<?php
/**
 * Class QueryBuilder.
 */

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

        return $statement->fetchAll(PDO::FETCH_CLASS,'Task');
    }

    public function where($table,$filters){

    }
}