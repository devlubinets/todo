<?php

class  ClientCode
{
    public static function businessCode():void
    {
        $handlerSecLogPass = new HandlerSecLogPass;
        $userCredential = ['log' => "Kirill", 'pass' => "0000", 'gprs' => "52.83154712827312, 18.486236699945742"];

        echo $handlerSecLogPass->handleRequest($userCredential);
    }
}