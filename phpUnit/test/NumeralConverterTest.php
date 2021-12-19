<?php
declare(strict_types=1);

require __DIR__."/../src/NumeralConverter.php";

use PHPUnit\Framework\TestCase;

class NumeralConverterTest extends TestCase
{



    public function dataSetForTest():array
    {
        return [
            [2,'II'],
            [3,'III'],
            [1,'I'],
            [4,'IV'],
            [5,'V'],
            [6,'VI'],
            [7,'VII'],
            [8,'VIII'],
            [9,'IX'],
        ];
    }

  /**
   * @dataProvider dataSetForTest
   * @test
   */
    public function convert2and3ToRomanNumeral(int $value, string $expected)
    {
        //Подготовка
        #Обработка неверных входных значений
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('This method converts positive integer only');
        #создание зависимости для тестирования связанной с ней поведения
        $nc = new NumeralConverter();

        //Действие
        $result = $nc->arabicToRoman($value);

        //Проверка
        $this->assertEquals($result, $expected);

    }



}
