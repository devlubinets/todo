<?php

class ShapeA extends AShape
{
    public function __construct(int $x, int $y, string $name, string $property)
    {
        parent::__construct($x, $y, $name, $property);
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