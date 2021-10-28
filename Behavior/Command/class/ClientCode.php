<?php
declare(strict_types=1);

class  ClientCode
{
    public static function businessCode():void
    {
        $testString = "AVADA MEDIA";

        $invoker = new User();

        $invoker->setCommandBoldText(new CommandBoldText($testString));
        echo '<div class="cls2">';
        echo $invoker->boldText();
        echo '</div>';

        echo '<br>';

        $invoker->setCommandItalic(new CommandItalic($testString));
        echo '<div class="cls2">';
        echo $invoker->italicText();
        echo '</div>';

        echo '<br>';

        $invoker->setCommandDBadd(new CommandDBadd($testString));
        echo '<div class="cls2">';
        echo $invoker->addDBToString();
        echo '</div>';
    }
}