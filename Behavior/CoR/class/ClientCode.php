<?php

class  ClientCode
{
    public static function businessCode():void
    {
        $handlerSecLogPass = new HandlerSecLogPass;
        $handlerSecPermissions = new HandlerSecPermissions;
        $handlerSecGPS = new HandlerSecGPS;

        $userCredential = ['log' => "Oleg", 'pass' => "0000", 'gps' => "52.83154712827312, 18.486236699945742", 'permissions' => "root"];

        echo 'User Oleg tries to connect<br>';
        echo '<div class="cls1">';
        echo $handlerSecLogPass->handleRequest($userCredential);
        echo '</div>';
        echo '<br><br>';

        #New user credential
        $userCredential = ['log' => "Kirill", 'pass' => "1111", 'gps' => "52.83154712827312, 18.486236699945742", 'permissions' => "root"];

        echo 'User Kirill tries to connect<br>';
        echo '<div class="cls1">';
        $handlerSecLogPass->setNext($handlerSecPermissions)->setNext($handlerSecGPS);
        $handlerSecLogPass->handleRequest($userCredential);
        echo '</div>';

    }
}