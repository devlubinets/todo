<?php

class UNIXbackEnd implements IOperation
{
    public function operationPrintSomeText(string $str): string
    {
        return "UNIX SYSTEM<br><br>".$str;
    }

    public function operationColorDiv(string $color_name): string
    {
        return "<div class='cls2'>UNIX BOX<br><br>".$color_name."</div>";
    }
}