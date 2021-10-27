<?php
declare(strict_types=1);

class  ClientCode
{
    public static function businessCode():void
    {
        $context = new Context(new Strategy1());

        echo "<div class='cls1'>";
        echo $context->doBusinessLogic('Просто пример, эффективный пример!');

        echo "</div><br>";

        $context->setStrategy(new Strategy2());

        echo "<div class='cls1'>";
        echo $context->doBusinessLogic('Просто пример, эффективный пример!');
        echo "</div><br>";
    }
}