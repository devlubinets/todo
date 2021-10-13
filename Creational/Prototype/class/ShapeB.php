<?php

class ShapeB extends AShape
{
    public function __construct($title, $firstName, $mainName, $price)
    {
        parent::__construct($title, $firstName, $mainName, $price);
    }

    public function clone(): IPrototype
    {
        $clone = new ShapeB(0,0,0,0);
        $clone->x = $this->x;
        $clone->y = $this->y;
        $clone->name = $this->name;
        $clone->property = $this->property;
        return $clone;
    }
}