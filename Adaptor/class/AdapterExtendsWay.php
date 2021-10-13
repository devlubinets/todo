<?php

class AdapterExtendsWay extends Adaptee
{

    public function sendMessage($message):string
    {
        return $this->sendTelegramma($message);
    }
}