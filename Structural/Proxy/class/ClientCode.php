<?php

class  ClientCode
{
    public static function businessCode():void
    {
        $service = new Service("String data: 1010001110");
        $proxy = new Proxy($service);

        $proxy->operation();

        $service->setData("String data: 9909090009990990");
        $proxy->operation();
    }
}