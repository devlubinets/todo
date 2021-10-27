<?php

class Strategy2 implements AlgoInterface
{

    public function doAlgo(string $str = ''): string
    {
        if ($str === '') {
            return 'Пустая строка, обработка не возможна';
        } else {
            $str = ' Стратегия 2 '.$str;
            return "Строка обработа алгоритмом реализованом:" .__CLASS__. "<br>Строка после обработки:$str";
        }
    }
}