<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


spl_autoload_register(function($class) {

    $fn = 'class/' . $class .'.php';

    if(file_exists($fn))
    {
        require $fn;
        echo '<b>autoload: ' . $class . '</b><br>';
    }
    else
        echo '<b>NOT autoload: ' . $class . '.php'. '</b><br>';

});



$obj1 = new ShapeA(1,2,"Square","Black");

$obj2 = new ShapeB(1,2,"Square","Black");

$clone_obj1 = $obj1->clone();
$clone_obj2 = $obj2->clone();

if($clone_obj1 !== $obj1 && $clone_obj2 !== $obj2)
    echo "Prototype created successfully!";
else
    echo "No prototype created!";

