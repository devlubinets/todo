<?php

class Bank
{
    private string $name = '';
    private float  $money = 0.0;

    public function __construct(string $name, string $money)
    {
        $this->name = $name;
        $this->money = $money;
    }

    public function paymentByCard():void
    {
        echo "<br>{$this->name} оплатил картой товар на сумму {$this->money}";
    }
}