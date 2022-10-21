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
        
        

        if (!isset($_SESSION['router']) || !$_SESSION['router']) {
            http_response_code(404);
        } else {
            $_SESSION['router'] = false;
        }
    }
}