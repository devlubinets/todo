<?php
declare(strict_types=1);

class  ClientCode
{
    public static function businessCode():void
    {
        $componentA = new ComponentA();
        $componentB = new ComponentB();
        $componentC = new ComponentC();

        $mediator = new Mediator($componentA, $componentB, $componentC);

        $componentA->operation();

        $componentB->operation();
    }
}