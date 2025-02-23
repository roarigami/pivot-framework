<?php

spl_autoload_register(function ($class_name){

    $extension = '.php';
    $file_path = ROOT_PATH . str_replace('\\', '/', $class_name) . $extension;

    if(file_exists($file_path)) {
        require $file_path;
    }

});
