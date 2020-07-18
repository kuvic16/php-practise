<?php

class User{}

function getUser() : User {
    //return []; // will give an error
    return new User;
}

var_dump(getUser());

interface SomeInterface {
    public function getUser(): User;
}

class SomeClass implements SomeInterface {
    public function getUser() : User
    {
        // return []; // will give an error
        return new User;
    }
}

(new SomeClass)->getUser();
