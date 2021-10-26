<?php

class  ClientCode
{
    public static function businessCode():void
    {
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