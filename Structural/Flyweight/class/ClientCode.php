<?php

class  ClientCode
{
    public static function businessCode():void
    {
       # $wareHouseFlyweight = new FlyweightFactory(['iPhon','$1199'], ['LG','$299'], ['Xiaomi','$499']);
//         $wareHouseFlyweight = new FlyweightFactory( ["Chevrolet", "Camaro2018", "pink"],
//             ["Mercedes Benz", "C300", "black"],
//             ["Mercedes Benz", "C500", "red"],
//             ["BMW", "M5", "red"],
//             ["BMW", "X6", "white"]);

        $wareHouseFlyweight = new FlyweightFactory();
        $wareHouseFlyweight->getFlyweight(['iPhon','$1199']);
        $wareHouseFlyweight->getFlyweight(['LG','$299']);
        $wareHouseFlyweight->getFlyweight(['Xiaomi','$499']);

        $wareHouseFlyweight->getListFlyweight();

        $wareHouseFlyweight->getFlyweight(["UAphone","$10199"]);
        $wareHouseFlyweight->getFlyweight(["LG","$299"]);

        $wareHouseFlyweight->getListFlyweight();
    }
}