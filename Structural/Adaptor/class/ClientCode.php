<?php

class  ClientCode
{
   public static function businessCode():void
{
    $obj_send_message = new ExistingClass();
    echo $obj_send_message->sendMessage("We anarchists are not very rich.");

    $obj_adaptee = new AdapterObjWay();
    print $obj_adaptee->sendMessage("Because we want Africa to be rich.");

    $obj_adaptee = new AdapterExtendsWay();
    print $obj_adaptee->sendMessage("Because we want Africa to be rich.");
}

}