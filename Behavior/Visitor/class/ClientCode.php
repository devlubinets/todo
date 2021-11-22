<?php
declare(strict_types=1);

class  ClientCode
{
    public static function businessCode():void
    {
        $visitor = new Visitor;
        $elementA = new ElementA;
        $elementB = new ElementB;

        echo $elementA->action($visitor);

        echo "<br>";

        echo $elementB->action($visitor);
    }
}