<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


spl_autoload_register(function($class) {

    $fn = 'class/' . $class .'.php';

    if(file_exists($fn))
    {
        require $fn;
        echo '<b>Autoload class: ' . $class . '</b><br>';
    }
    else
        echo '<b>Not autoload class: ' . $class . '.php'. '</b><br>';


    $fn = 'interface/' . $class . '.php';

    if(file_exists($fn))
    {
        require $fn;
        echo '<b>Autoload interface: ' . $class . '</b><br>';
    }
    else
        echo '<b>Not autoload interface: ' . $class . '.php'. '</b><br>';

});