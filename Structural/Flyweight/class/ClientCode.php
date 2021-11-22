<?php

class  ClientCode
{
    public static function businessCode():void
    {

        $wareHouseFlyweight = new FlyweightFactory();

        echo "<br><div class='cls2'>Add smartphone!</div>";
        $product1 = new Product(0,$wareHouseFlyweight->getFlyweight(['iPhon','$1199']));
        $product3 = new Product(2, $wareHouseFlyweight->getFlyweight(['Xiaomi','$499']));

        $product4 = new Product(3,$wareHouseFlyweight->getFlyweight(['iPhon','$1199']));
        $product5 = new Product(4,$wareHouseFlyweight->getFlyweight(['iPhon','$1199']));
        $product6 = new Product(5,$wareHouseFlyweight->getFlyweight(['iPhon','$1199']));

        $wareHouseFlyweight->getListFlyweight();

        echo "<br><div class='cls2'>Add smartphone!</div>";
        $wareHouseFlyweight->getFlyweight(["UAphone","$10199"]);
        $wareHouseFlyweight->getFlyweight(["LG","$299"]);

        $wareHouseFlyweight->getListFlyweight();
    }
}