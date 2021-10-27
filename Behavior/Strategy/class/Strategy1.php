<?php

class Strategy1 implements AlgoInterface
{

    public function doAlgo(string $str = ''): string
    {
        if ($str === '') {
            return 'Пустая строка, обработка не возможна';
        } else {
            $str = ' Стратегия 1 '.$str;
            return "Строка обработа алгоритмом реализованом:" .__CLASS__. "<br>Строка после обработки:$str";
        }
    }
}