<?php

require 'functions.php';
require 'Task.php';

$pdo = connectToDb();
$tasks = fetchAllTask($pdo);

require 'index.view.php';
