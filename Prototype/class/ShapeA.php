<?php

class ShapeA extends AShape
{
    public function __construct($title, $firstName, $mainName, $price)
    {
        parent::__construct($title, $firstName, $mainName, $price);
    }

    public function clone(): IPrototype
    {
        $clone = new ShapeA(0,0,0,0);
        $clone->x = $this->x;
        $clone->y = $this->y;
        $clone->name = $this->name;
        $clone->property = $this->property;
        return $clone;
    }
}