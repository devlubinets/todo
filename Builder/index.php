<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once  'BuilderWebSite.php';
require_once  'Builder.php';
require_once  'Director.php';
require_once  'ProductWebSite.php';

error_reporting(E_ALL);

$product = new ProductWebSite();
$webprogrammer = new BuilderWebSite($product);
$director = new Director($webprogrammer);
//#$director->setBuilder($webprogrammer);
$director->manyMoneyWebSite();
$product = $webprogrammer->getProduct();

echo $product->view();

?>


