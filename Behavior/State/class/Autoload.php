<?php
declare(strict_types=1);

spl_autoload_register(function($class) {

    (string) $fn1 = 'class/' . $class .'.php';
    (string) $fn2 = 'interface/' . $class . '.php';

    if(file_exists($fn1))
    {
        require $fn1;
    }

    if(file_exists($fn2))
    {
        require $fn2;
    }
});