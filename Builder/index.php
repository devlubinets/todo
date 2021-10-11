<?php

require_once  'BuilderWebSite.php';
require_once  'Builder.php';
require_once  'Director.php';
require_once  'ProductWebSite.php';

error_reporting(E_ALL);

$webprogrammer = new BuilderWebSite();
$director = new Director();
$director->setBuilder($webprogrammer);
$director->manyMoneyWebSite();
$product = $webprogrammer->getProduct();

$product->view();

?>


