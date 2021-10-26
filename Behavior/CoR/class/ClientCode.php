<?php

class  ClientCode
{
    public static function businessCode():void
    {
        $handlerSecLogPass = new HandlerSecLogPass;
        $handlerSecPermissions = new HandlerSecPermissions;
        $handlerSecGPS = new HandlerSecGPS;

        $userCredential = ['log' => "Oleg", 'pass' => "0000", 'gps' => "52.83154712827312, 18.486236699945742", 'permissions' => "root"];

        echo $handlerSecLogPass->handleRequest($userCredential);

        $userCredential = ['log' => "Kirill", 'pass' => "0000", 'gps' => "52.83154712827312, 18.486236699945742", 'permissions' => "root"];

        $handlerSecLogPass->setNext($handlerSecPermissions)->setNext($handlerSecGPS);
        $handlerSecLogPass->handleRequest($userCredential);

    }
}