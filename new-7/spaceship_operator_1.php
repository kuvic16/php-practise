<?php

class User
{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }

    public function name()
    {
        return $this->name;
    }

    public function age()
    {
        return $this->age;
    }
}

class UserCollection
{
    protected $users;

    public function __construct(array $users)
    {
        $this->users = $users;
    }

    public function users()
    {
        return $this->users;
    }

    public function sortBy($property)
    {
        usort($this->users, function ($userOne, $userTwo) use ($property) {
            return $userOne->$property() <=> $userTwo->$property();
        });
    }
}

$collection = new UserCollection([
    new User('Jeff', 30),
    new User('Taylor', 29),
    new User('Jane', 50),
    new User('Susie', 10)
]);

$collection->sortBy('name');
var_dump($collection->users());
