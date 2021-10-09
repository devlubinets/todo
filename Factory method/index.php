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

</body>
</html>


<?php

require 'FactoryMethod.php';

$obj1 = new IconFB("FB number one","source/fb.png");
$obj1->create();
$obj1->view();

$obj2 = new IconVK("VK number one","source/vk.png");
$obj2->create();
$obj2->view();
?>