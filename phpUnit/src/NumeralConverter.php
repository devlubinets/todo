<?php
declare(strict_types=1);

class NumeralConverter
{

    public function arabicToRoman(int $value = 0):string
    {
        $result = '';

        switch ($value) {
            case 1: $result = 'I'; break;
            case 2: $result = 'II'; break;
            case 3: $result = 'III'; break;
        }

        return $result;
    }

}