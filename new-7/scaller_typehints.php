<?php

declare(strict_types=1);

function setAge(int $age)
{
    var_dump($age);
}

function setIsValid(bool $valid){
    var_dump($valid);
}

//setAge("test"); // it will not work
setAge(123);
//setAge("1");
setIsValid(true);
//setIsValid("true");
//setIsValid("asds");