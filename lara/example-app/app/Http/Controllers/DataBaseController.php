<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \PDO;

class DataBaseController extends Controller
{
    public function orm()
    {

    }

    public function sql()
    {
        #Настройка подключения
        $host = '127.0.0.1';
        $db   = 'shop';
        $user = 'root';
        $pass = '12345678Ee!';
        $charset = 'utf8';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $pdo = new PDO($dsn, $user, $pass, $opt);

        #1.SQL запрос Клиент который купил больше всего товаров
     #  $stmt1 = $pdo->query('SELECT user_order FROM orders WHERE MAX(total_price_order)');
        $stmt1 = $pdo->query('SELECT user_order FROM orders');
        $obj1 =  $stmt1->fetch(PDO::FETCH_LAZY);
        echo $obj1->user_order;


//        #2.Top 10 самых дорогих товаров
//        $stmt2 = $pdo->query('SELECT  MAX(price) AS price FROM products');
//        while ($row = $stmt2->fetch(PDO::FETCH_LAZY))
//        {
//            echo $row['name_product'] . "\n";
//            echo $row['price_product'] . "\n";
//        }
    }
}
