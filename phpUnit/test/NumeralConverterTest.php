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
            [1,'11']
        ];
    }
    /**
     * @test
     */
    public function converts1ToRomanNumeral():void
    {
        //Подготовка
        $nc = new NumeralConverter();
        $input = 1;
        $output = 'I';

        //Действие
        $result = $nc->arabicToRoman($input);

        //Проверка
        $this->assertEquals($output, $result);
    }

    /**
     * @test
     */
    public function converts1ToRomanNumeral2():void
    {
        //Подготовка
        $nc = new NumeralConverter();
        $input = 2;
        $output = 'II';

        //Действие
        $result = $nc->arabicToRoman($input);

        //Проверка
        $this->assertEquals($output, $result);
    }

    /**
     * @test
     */
    public function converts1ToRomanNumeral3():void
    {
        //Подготовка
        $nc = new NumeralConverter();
        $input = 3;
        $output = 'III';

        //Действие
        $result = $nc->arabicToRoman($input);

        //Проверка
        $this->assertEquals($output, $result);
    }

  /**
   * @dataProvider dataSetForTest
  * @test
  */
    public function convert2and3ToRomanNumeral(int $value, string $expected)
    {
        //Подготовка
        $nc = new NumeralConverter();

        //Действие
        $result = $nc->arabicToRoman($value);

        //Проверка
        $this->assertEquals($result, $expected);

    }

    public function badDataSet()
    {
        return [
            [4,'IV'],
            [5,'V'],
            [9,'IX']
        ];
    }

    /**
     * @dataProvider badDataSet
     * @test
     */

}
