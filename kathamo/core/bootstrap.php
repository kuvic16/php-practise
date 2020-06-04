<?php

namespace Kathamo\Core;

use Kathamo\Core\App;
use Kathamo\Core\Database\QueryBuilder;
use Kathamo\Core\Database\Connection;

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

/**
 * Redirect to specific page
 * 
 * @param string $path
 * 
 * @return void
 */
function redirect($path)
{
    header("Location: /{$path}");
}
