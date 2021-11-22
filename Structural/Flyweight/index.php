<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


spl_autoload_register(function($class) {

    $fn1 = 'class/' . $class .'.php';
    $fn2 = 'interface/' . $class . '.php';

    if(file_exists($fn1))
        require $fn1;

    if(file_exists($fn2))
        require $fn2;

});

ClientCode::businessCode();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Flyweight</title>
</head>
<body>

</body>
</html>
