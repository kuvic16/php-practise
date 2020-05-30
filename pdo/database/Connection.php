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
    public static function make($config)
    {
        try {
            return new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
