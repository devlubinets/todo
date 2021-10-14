<?php

interface IOperation
{
    public function operationPrintSomeText(string $str):string;
    public function operationColorDiv(string $color_name):string;
}