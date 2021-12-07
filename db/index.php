<?php

use engine\Db;

require_once "./vendor/autoload.php";
require_once "./engine/Db.php";

const HOST = 'localhost'; //сервер
const USER = 'root'; //пользователь
const PASS = '12345678Ee!'; //пароль
const DBNAME = 'shop'; //база

$test = Db::getInstance();
$test->query('user', 'num_goods');



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
