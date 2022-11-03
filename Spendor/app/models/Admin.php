<?php

class Admin extends User
{
    public function __construct(string $password, string $email)
    {
        parent::__construct($password, $email, "Admin", new DateTime());
    }
}