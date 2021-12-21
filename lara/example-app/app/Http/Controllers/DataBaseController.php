<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Product;
use App\Models\Shopcart;
use Illuminate\Http\Request;
use \PDO;
use Illuminate\Support\Facades\DB;

class DataBaseController extends Controller
{
    public function orm()
    {

//        -- SELECT id_shopcart, sum(price_product) FROM shopcarts
//    -- INNER JOIN products ON products.id = id_product
//    -- GROUP BY id_shopcart;
//
//

        #Клиент который купил больше всего товаров
//        $shopcurt = DB::table('shopcarts')
//                                          ->max('shop.products.price_product')
//                                          ->join('products','products.id ','=','id_product')
//                                          ->select('id_shopcar')
//                                          ->groupBy('id_shopcart');

//-- SELECT name_product, MAX(price_product) FROM products
//    -- GROUP BY name_product
//    -- LIMIT 10;
//


        #Топ 10 самых дорогих товаров
//        $product = Product::select('name_product')->max('price_product')->groupBy('name_product')->limit(10);
        $product = Product::select('name_product, price_product')->orderBy('name_product');

        dd($product->get());

//        foreach ($product->sortBy('price_product') as $prod) {
//          echo $prod->price_product;
//          echo '<br>';
//        }
    }

    public function sql()
    {
        //ПЕРЕПИСАТЬ НА ФАСАДЕ DB
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
        $stmt1 = $pdo->query('SELECT * FROM orders');
        $obj1 =  $stmt1->fetch(PDO::FETCH_LAZY);
        while ($row = $stmt1->fetch(PDO::FETCH_LAZY))
        {
            echo '<br>'.$row->id . " = " . $row->shopcart_order;
        }


//        #2.Top 10 самых дорогих товаров
//        $stmt2 = $pdo->query('SELECT  MAX(price) AS price FROM products');
//        while ($row = $stmt2->fetch(PDO::FETCH_LAZY))
//        {
//            echo $row['name_product'] . "\n";
//            echo $row['price_product'] . "\n";
//        }
    }
}
