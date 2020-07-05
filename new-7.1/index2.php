<?php

class User1
{

    public function subscribe(?callable $callback = null)
    {
        var_dump("subscribe here");
        if ($callback) $callback();
    }

    public function make(): void
    {
        var_dump("We are not returning anything from here");
    }
}

// (new User1)->subscribe(function () {
//     var_dump('respond here');
// });

// still allowable if we are not set as callable
//(new User1)->subscribe([]);

//(new User1)->subscribe(null);
//(new User1)->subscribe();

// void type
(new User1)->make();
