<?php

class Product
{
    private int $id;
    private Flyweight $shared_state;

    public function __construct(int $id, Flyweight $shared_state)
    {
        $this->name_product = $id;
        $this->shared_state = $shared_state;
    }

}