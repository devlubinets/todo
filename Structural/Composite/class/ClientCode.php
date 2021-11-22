<?php

class  ClientCode
{
    public static function businessCode():void
    {
        $firstShelf = new Bookshelf;
        $firstBook = new Book("Коммедиант",2.2);
        $secondBook = new Book("Финансист", 7.4);
        $tempObj1 = new Book("Горе от ума", 10.0);
        $tempObj2 = new Book("Гаррип Поттер и ЧБ", 12.2);
        $secondBook->add($tempObj1);
        $secondBook->add($tempObj2);
        $thirdBook = new Book( "Сетевой маркейтинг", 1.1);

        echo '<br><b>Вывод с отдельных объектов:</b>';
        echo $firstBook->getName();
        echo $secondBook->getName();
        echo $thirdBook->getName();

        echo '<br><b>Вывод с дочерних объектов:</b>';
        foreach ($firstBook->getListName() as $value) {
            echo $value;
        }
        foreach ($secondBook->getListName() as $value) {
            echo $value;
        }
        foreach ($thirdBook->getListName() as $value) {
            echo $value;
        }

        echo '<br><b>Вывод с дочерних объектов объекта который их поглотил:</b><br>';
        $firstShelf->add($firstBook);
        $firstShelf->add($secondBook);
        $firstShelf->add($thirdBook);

        foreach ($firstShelf->getListName() as $value) {
            echo $value;
        }

        echo '<br><b>Удаление дочернего элемента объекта $firstShelf->Коммендант</b><br>';
        $firstShelf->remove(0);
        foreach ($firstShelf->getListName() as $value) {
            echo $value;
        }

    }
}