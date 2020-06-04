<?php

$router->get('', 'PagesController@home');
$router->get('contact', 'PagesController@contact');
$router->get('about', 'PagesController@about');
$router->get('about/culture', 'PagesController@culture');

$router->get('tasks', 'TaskController@index');
$router->post('tasks', 'TaskController@store');
