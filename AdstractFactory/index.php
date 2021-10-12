<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


spl_autoload_register(function($class) {

    $fn = 'class/' . $class .'.php';

    if(file_exists($fn))
    {
        require $fn;
       # echo '<b>autoload: ' . $class . '</b><br>';
    }
    else
        echo '<b>NOT autoload: ' . $class . '.php'. '</b><br>';

});


$factory_1 = new ColorFactory();
$factory_2 = new GreyFactory();

$product_1_img = $factory_1->createImage()->view();
$product_1_text = $factory_1->createText()->print();

$product_2_img = $factory_2->createImage()->view();
$product_2_text = $factory_2->createText()->print();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abstract Factory</title>
</head>
<body>


<h1>ColorFactory</h1>
<div>
<img src="<?php echo $product_1_img ?>">
<?php echo $product_1_text ?>
</div>

<div>
<h1>GreyFactory</h1>
<img src="<?php echo $product_2_img ?>">
<?php echo $product_2_text ?>
</div>

</body>
</html>
