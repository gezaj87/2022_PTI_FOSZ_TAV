<?php

class Home extends Controller
{

    public static function Start($param = null)
    {
        $go_to = 'Login';
        $data_to_frontend = '';

        if (isset($_SESSION['token']))
        {
            $go_to = 'Home';
            $data_to_frontend = $_SESSION['user'];
        }

        self::View($go_to,
            [
                'data' => $data_to_frontend
            ]
        );
    }
}