<?php

class WINbackEnd implements IOperation
{
    public function operationPrintSomeText(string $str): string
    {
        return "WINDOWS SYSTEM<br><br>".$str;
    }

    public function operationColorDiv(string $color_name): string
    {
        return "<div class='cls1'>WINDOWS BOX<br><br>".$color_name."</div>";
    }
}