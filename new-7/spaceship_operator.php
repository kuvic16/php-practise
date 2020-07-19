<?php

$games = ['Mass Effect', 'Super Mario Bros', 'Zelda', 'Fallout', 'Metal Gear'];

sort($games);
//var_dump($games);

//reverse sort
rsort($games);
//var_dump($games);

usort($games, function ($a, $b) {
    var_dump("a: $a  b:$b");
    return $a <=> $b;
    // if a is less than b = -1
    // if a is equal b = 0
    // if a is greater than b = 1
    //return $b <=> $a; // -1, 0, 1
});
var_dump($games);
