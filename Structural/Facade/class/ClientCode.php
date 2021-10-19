<?php

class  ClientCode
{
    public static function businessCode():void
    {
        $customer1 = new AppleStore("Kirill", 2,799.0);
        $customer2 = new AppleStore("Olga", 1,1099.0);

        $customer1->buyPhone();
        $customer2->buyPhone();
    }
}