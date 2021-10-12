<?php

abstract class AShape implements IPrototype
{
    public $x;
    public $y;
    public $name;

    protected $property;

    public function __construct($a, $b, $c, $d)
    {
        $this->x =  $a;
        $this->y =  $b;
        $this->name =  $c;
        $this->property =  $d;
    }
}