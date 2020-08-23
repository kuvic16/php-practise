<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use DI\ContainerBuilder;
use Kathamo\Core\{Router, Request};

$containerBuilder = new ContainerBuilder();
$containerBuilder->addDefinitions(__DIR__ . 'config/di.php');
$container = $containerBuilder->build();

var_dump($container);
die;


Router::load('app/routes.php')->direct(Request::uri(), Request::method());
