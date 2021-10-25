<?php

class Product
{
    private string $name_product;
    private Flyweight $shared_state;

    public function __construct(string $name_product = "", Flyweight $shared_state = null)
    {
        $this->name_product = $name_product;
        $this->shared_state = new Flyweight();
    }

}