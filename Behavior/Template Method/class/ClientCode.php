<?php
declare(strict_types=1);

class  ClientCode
{
    public static function businessCode():void
    {
        $templateWrong = new WrongSum(2,2);
        $templateCorrect = new CorrectSum(2,2);
        $templateRand = new RandSum(2,2);

        $templateWrong->templateMethod();
        $templateCorrect->templateMethod();
        $templateRand->templateMethod();
    }
}