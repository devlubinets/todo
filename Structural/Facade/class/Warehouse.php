<?php

class Warehouse
{
    static private int $numberInStock = 10;
    private int $number = 0;
    private string $customer = '';

    public function __construct(int $number, string $customer)
    {
        $this->customer = $customer;
        $this->number = $number;
    }

    public function transferOrderOnLogistic():void
    {
        --self::$numberInStock;
        echo "<br>Заказ заказчика {$this->customer} в количестве {$this->number} передан в службу доставки";
    }

    public function getNumberInStock():int
    {
        return self::$numberInStock;
    }
}