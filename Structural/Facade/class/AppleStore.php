<?php

class AppleStore
{
    private string $nameCustomer = '';
    private int $number = 0;
    private float $money = 0.0;

    public function __construct(string $nameCustomer, int $number, float $money)
    {
        $this->nameCustomer = $nameCustomer;
        $this->number = $number;
        $this->money = $money;
    }

    public function buyPhone():void
    {
        $bank = new Bank($this->nameCustomer,$this->money);
        $logistics = new Logistics($this->nameCustomer,$this->number);
        $warehouse = new Warehouse($this->number, $this->nameCustomer);

        echo '<div class="cls1">';
        $bank->paymentByCard();
        $logistics->delivery();
        $warehouse->transferOrderOnLogistic();
        echo '</div>';

        print "<br>Осталось телефонов {$warehouse->getNumberInStock()}";
    }
}