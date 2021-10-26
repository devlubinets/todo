<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factory Method</title>
</head>
<body>


<?php

require 'FactoryMethod.php';

$obj1 = new Icon("FB number one","source/fb.png", "vk");
$obj1->view();

$obj2 = new Icon("VK number one","source/vk.png", "vk");
$obj2->view();
?>


</body>
</html>


