<?php

class User
{
    protected $age;

    public function __construct($age)
    {
        $this->age = $age;
    }

    public function age(): ?int
    {
        return $this->age;
    }
}

$age = (new User(123))->age();
var_dump($age);
