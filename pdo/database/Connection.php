<?php

/**
 * Database connection class
 */
class Connection
{
    /**
     * Make database connection
     * 
     * @return PDO
     */
    public static function make()
    {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '1234');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
