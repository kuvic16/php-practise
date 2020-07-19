<?php

$_GET['name'] = 'Joe';
$name = isset($_GET['name']) ? $_GET['name'] : 'nothing';
var_dump($name);

$name = $_GET['name'] ?? 'nothing';
var_dump($name);
