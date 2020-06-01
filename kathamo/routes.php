<?php

$router->get('', 'controllers/index.php');
$router->get('contact', 'controllers/contact.php');
$router->get('about', 'controllers/about.php');
$router->get('about/culture', 'controllers/about-culture.php');
$router->post('name', 'controllers/add-name.php');
