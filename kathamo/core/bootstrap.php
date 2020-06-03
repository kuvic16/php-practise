<?php

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

/**
 * Set view page
 * 
 * @param string $name page name
 * @param array $data
 * 
 * @return require
 */
function view($name, $data = [])
{
    extract($data);
    return require "views/{$name}.view.php";
}
