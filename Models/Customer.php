<?php

class Customer
{
    public $name;
    public $lastname;
    public $email;
    public $account;
    public $cart;

    function __construct(string $name, string $lastname, string $email)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
    }
}
