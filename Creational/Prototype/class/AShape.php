<?php

abstract class AShape implements IPrototype
{
    public int $x = 0;
    public int $y = 0;
    public string $name = '';
    protected string $property;

    public function __construct(int $x, int $y, string $name, string $property)
    {
        $this->x =  $x;
        $this->y =  $y;
        $this->name =  $name;
        $this->property =  $property;
    }
}