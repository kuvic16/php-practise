<?php

$people = [
    ['Shaiful', 'Islam'],
    ['Romana', 'Kabir']
];

foreach($people as $person) {
    [$first, $last] = $person;
    var_dump("{$first} {$last}");   
}

foreach($people as [$first, $last]) {
    var_dump("{$first} {$last}");   
}

[$first, $last] = ["Shaiful", "Islam"];
var_dump("{$first} {$last}");

[, $last] = ["Shaiful", "Islam"];
var_dump("{$last}");

[$first,] = ["Shaiful", "Islam"];
var_dump("{$first}");

//[$user1, $user2, $user3] = factory('App\User', 3)->create();

preg_match('/\d{3}-\d{3}-(\d{4})/', '555-555-5555', $matches);
var_dump($matches);
[, $lastFour] = $matches;
var_dump($lastFour);