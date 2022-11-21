<?php

class NewExpense extends Controller
{
    public static function Post()
    {
        
    }

    public static function Get($param = null)
    {
        self::View('NewExpense',
            [
                'data' => $param
            ]
        );
    }
}