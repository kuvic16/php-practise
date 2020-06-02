<?php

/**
 * Query builder class
 */
class QueryBuilder
{
    /**
     * @var PDO
     */
    protected $pdo;

    /**
     * Initialize the class
     * 
     * @param PDO
     */
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * select rows from a table
     * 
     * @param $table | string
     * 
     * @return array
     */
    function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}
