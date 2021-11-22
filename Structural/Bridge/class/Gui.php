<?php

class Gui
{
    private ?IOperation $obj =  null;

    public function __construct(IOperation $obj)
    {
        $this->obj = $obj;
    }

    public function createText(string $str):string
    {
        return $this->obj->operationPrintSomeText($str);
    }

    public function createColorBox(string $str):string
    {
        return $this->obj->operationColorDiv($str);
    }
}