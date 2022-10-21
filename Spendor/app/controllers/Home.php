<?php

class Home extends Controller
{

    public static function Start($param = null)
    {

        self::View('Home',
            [
                'teszt' => 'Data to Frontend'
            ]
        );
    }
}