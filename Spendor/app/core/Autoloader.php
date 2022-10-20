<?php

spl_autoload_register('AutoLoader_core');
spl_autoload_register('AutoLoader_controllers');
spl_autoload_register('AutoLoader_models');


function AutoLoader_core($className) {
    $path = 'core/';
    $extension = '.php';
    $fullPath = $path . $className . $extension;

    if (is_readable('../app/' . $fullPath)){
        include_once '../app/'.$fullPath;
    }

}

function AutoLoader_controllers($className) {
    $path = 'controllers/';
    $extension = '.php';
    $fullPath = $path . $className . $extension;

    if (is_readable('../app/' . $fullPath)){
        include_once '../app/'.$fullPath;
    }

}

function AutoLoader_models($className) {
    $path = 'models/';
    $extension = '.php';
    $fullPath = $path . $className . $extension;

    if (is_readable('../app/' . $fullPath)){
        include_once '../app/'.$fullPath;
    }

}