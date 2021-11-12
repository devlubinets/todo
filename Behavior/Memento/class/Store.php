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
        if (!count($this->memento)) {
            return;
        }

        $lastState = array_pop($this->memento);

        try {
        $this->product->undoState($lastState);
        } catch (\Exception $e) {
            $this->restore();
        }
    }

    public function showActualInfo():string
    {
        return $this->product->showActualInfo();
    }
}