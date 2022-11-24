<?php

class Controller extends Auth
{

    protected static function View($view, $data = [])
    {
        require_once '../app/views/' . 'Index' . '.php';
    }
}