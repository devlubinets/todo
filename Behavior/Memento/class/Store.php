<?php

class Store
{
    private array $memento = [];
    private Product $product;

    /**
     * @param array $memento
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
        $this->memento[] = $this->product->saveState();
    }

    public function backup():void
    {
       $this->memento[] = $this->product->saveState();
    }

    public function restore():void
    {
        $lastState = array_pop($this->memento);
        $this->product->undoState($lastState);
    }

    public function showActualInfo():string
    {
        return $this->product->showActualInfo();
    }
}