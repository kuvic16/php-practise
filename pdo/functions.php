<?php

/**
 * Logging and die
 */
function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

/**
 * Connect to mysql database
 * 
 * @return PDO
 */
function connectToDb()
{
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '1234');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function fetchAllTask($pdo)
{
    $statement = $pdo->prepare('select * from todos');
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}
