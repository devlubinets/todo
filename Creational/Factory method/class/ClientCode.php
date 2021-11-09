<?php
declare(strict_types=1);

class  ClientCode
{
    public static function businessCode():void
    {
        $factory = new FactoryAB();

        $product = $factory->createLetter('A');
        $product->show();

        $product = $factory->createLetter('B');
        $product->show();
    }
}