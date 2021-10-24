<?php

class  ClientCode
{
    public static function businessCode():void
    {
        $wareHouseFlyweight = new FlyweightFactory([],
            ["iPhone","$1199"],
            ["LG","$299"],
            ["Xiaomi","$499"]);

        $wareHouseFlyweight->getFlyweight(["UAphone","$10199"]);
        $wareHouseFlyweight->getFlyweight(["LG","$299"]);

        $wareHouseFlyweight->getListFlyweight();
    }
}