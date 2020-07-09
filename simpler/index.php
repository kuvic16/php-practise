<?php

// don't do that
class trnslter
{
}

class Translator
{
}

$peoples = [];
// don't do that
foreach ($peoples as $x) {
}

foreach ($peoples as $people) {
}

class UserRepository
{
    // not recommeneded
    public function fetch($billingId)
    {
    }

    // this recommeneded
    public function fetchByBiilingById($id)
    {
    }
}

$userRepository->fetch($id);

class Order
{
    // not recommended
    public function prepAndShipAndNotifyUser()
    {
    }

    // recommeneded
    public function process()
    {
    }
}

class Order
{
    // not recommened
    public function shipOrder()
    {
    }

    // recommened
    public function ship()
    {
    }
}

$oder->shipOder();

// much cleaner
$oder->ship();
