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

    /**
     * Insert data into a table
     * 
     * @param $table | string
     * @param $parameters | array
     */
    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(',', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $ex) {
            die('Whoops, something went wrong' . $ex->getMessage());
        }
    }
}
