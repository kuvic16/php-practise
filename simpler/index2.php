<?php

use Illuminate\Contracts\Validation\Validator;

class Test
{
    // general code
    public function Xstore()
    {
        $input = Request::all();
        $validation = Validator::make($input, ['username' => 'required']);

        if (date('l') !== 'Friday') {
            if ($validation->passes()) {
                Post::create($input);

                return Redirect::home();
            } else {
                return Redirect::back()->withInput()->withErrors($validation);
            }
        } else {
            throw new Exception('we do not work on Fridays!!');
        }
    }

    // more optimize code
    public function store()
    {
        $input = Request::all();
        $validation = Validator::make($input, ['username' => 'required']);

        if (date('l') == 'Friday') {
            throw new Exception('we do not work on Fridays!!');
        }
        if (!$validation->passes()) {
            return Redirect::back()->withInput()->withErrors($validation);
        }
        Post::create($input);
        return Redirect::home();
    }

    // general code
    public function XsugnUp($subscription)
    {
        if ($subscription == 'monthly') {
            $this->createMonthlySubscription();
        } elseif ($subscription == 'forever') {
            $this->createForeverSubscription();
        }
    }

    // better code with polymorphism
    public function sugnUp(Subscription $subscription)
    {
        $subscription->create(); // 
    }

    function getSubscriptionType($type)
    {
        if ($type == 'forever') {
            return new ForeverSubscription;
        }
        return new MonthlySubscription;
    }
}

$subscription = getSubscriptionType($type);
signup($subscription);
