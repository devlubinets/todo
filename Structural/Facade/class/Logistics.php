<?php

class Logistics
{
    private string $customer = '';
    private int $number = 0;

    public function __construct(string $customer, int $number)
    {
        $this->customer = $customer;
        $this->number = $number;
    }

    public function delivery():void
    {
        echo "<br>Заказ доставлен {$this->customer} в количестве {$this->number}. <br> Спасибо за заказ&hearts;.";
    }

}