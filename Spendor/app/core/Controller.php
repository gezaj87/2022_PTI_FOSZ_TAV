<?php

class Controller
{

    protected static function View($view, $data = [])
    {
        require_once '../app/views/' . 'Index' . '.php';
    }
}