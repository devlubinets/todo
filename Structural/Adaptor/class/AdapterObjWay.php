<?php

class AdapterObjWay
{
    private Adaptee $adaptee_obj;

    public function sendMessage(string $message):string
    {
        $this->adaptee_obj = new Adaptee();
        return $this->adaptee_obj->sendTelegramma($message);
    }
}