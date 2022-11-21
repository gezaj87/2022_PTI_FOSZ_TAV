<?php

class App
{
    private array $url;

    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();

        $url = '/'.$_GET['url'];
        $this->url = explode('/', $url);

        $Router = new Router($this->url);

        //útvonalak definiálása ezen sor altt
        $Router->Get('/', [Home::class, 'Start']);
        $Router->Get('/register', [Register::class, 'Get']);
        $Router->Post('/register', [Register::class, 'Post']);
        $Router->Get('/login', [Login::class, 'Get']);
        $Router->Post('/login', [Login::class, 'Post']);
        $Router->Post('/logout', [Logout::class, 'Post']);
        $Router->Get('/newexpense', [NewExpense::class, 'Get']);
        $Router->Post('/newexpense', [NewExpense::class, 'Post']);

        if (!isset($_SESSION['router']) || !$_SESSION['router'])
        {
            http_response_code(404);
        } 
        else
        {
            $_SESSION['router'] = false;
        }
    }
}