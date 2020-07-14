<?php

//$test['test'] = "hello workd";
//var_dump($test);

class Second
{
    protected $seconds;

    public function __construct($seconds)
    {
        $this->seconds = $seconds;
    }
}

function cache($data, Second $sceonds)
{
}

cache([], new Second(50));

1. Does it bring clarity
2. Is there behavior?
3. Consistency
4. Important domain concept? 


class EmailAddress {
    public function __construct($email)
    {
        if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new InvalidArgumentException;
        }
        $this->email = $email;
    }
}


class Location {
    public function __construct($latitude, $longitude)
    {

    }
}

class Weight{
    protected $weight;

    public function __construct($weight){
        $this->weight = $weight;
    }

    public function gain($pounds)
    {
        //$this->weight += $pounds; // immutable
        return new static($this->weight + $pounds); // mutable - use will not change
    }

    public function lose($pounds)
    {
        return new static($this->weight + $pounds); // mutable
    }
}

class WorkoutPlaceMember {
    public function __construct($name, Weight $weight)
    {

    }
}

new WorkoutPlaceMember('Jon Doe', new Weight(160));