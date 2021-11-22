<?php

class Product
{
    private string $name;
    private float $price;

    /**
     * @param string $name
     * @param float $price
     */
    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function saveState():Memento
    {
        return new Memento($this->name, $this->price);
    }

    public function undoState(Memento $memento):void
    {
        $this->name = $memento->getName();
        $this->price = $memento->getPrice();
    }

    public function changePrice(float $price):void
    {
        $this->price = $price;
    }

    public function showActualInfo():string
    {
        return "<br>Имя продукта: $this->name, цена продукта: $this->price<br>";
    }

}