<?php

spl_autoload_register(function($class) {

    $fn1 = 'class/' . $class .'.php';
    $fn2 = 'interface/' . $class . '.php';

    if(file_exists($fn1))
    {
        require $fn1;
       # echo '<b>Autoload class: ' . $class . '</b><br>';
    }
    else
       # echo '<b>Not autoload class: ' . $class . '.php'. '</b><br>';


    if(file_exists($fn2))
    {
        require $fn2;
       # echo '<b>Autoload interface: ' . $class . '</b><br>';
    }
    else
        echo "";
       # echo '<b>Not autoload interface: ' . $class . '.php'. '</b><br>';

});