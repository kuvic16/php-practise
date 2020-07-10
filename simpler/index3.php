<?php

class BankAccounts
{

    protected $accounts;

    function __construct($accounts)
    {
        $this->accounts = $accounts;
    }

    public function filterBy($accountType)
    {
        return array_filter($this->accounts, function ($account) use ($accountType) {
            return $account->isOfType($accountType);
        });
    }
}

class Account
{
    protected $type;

    function __construct($type)
    {
        $this->type = $type;
    }

    public static function open($type)
    {
        return new static($type);
    }

    private function type()
    {
        return $this->type;
    }

    private function isActive()
    {
        return true;
    }

    public function isOfType($accountType)
    {
        return $this->type() == $accountType && $this->isActive();
    }
}


$accounts = [
    Account::open('checking'),
    Account::open('savings'),
    Account::open('current'),
    Account::open('checking')
];

$accounts = new BankAccounts($accounts);
//var_dump($accounts);
$savings = $accounts->filterBy('savings');
var_dump($savings);
