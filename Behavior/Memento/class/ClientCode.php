<?php
declare(strict_types=1);

class  ClientCode
{
    public static function businessCode():void
    {
        $product = new Product("iPhone", 899.0);
        $store = new Store($product);

        print $product->showActualInfo();

        $store->backup();
        $store->showActualInfo();
        $product->changePrice(599.0);
        print $product->showActualInfo();

        $store->backup();
        $store->showActualInfo();
        $product->changePrice(299.0);
        print $product->showActualInfo();

        $store->backup();
        $store->showActualInfo();
        $product->changePrice(99.0);
        print $product->showActualInfo();

        $store->restore();
        print $product->showActualInfo();

        $store->restore();
        print $product->showActualInfo();

        $store->restore();
        print $product->showActualInfo();
    }
}