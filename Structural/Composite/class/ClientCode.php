<?php

class  ClientCode
{
    public static function businessCode():void
    {
        $firstShelf = new Bookshelf;
        $firstBook = new Book("Коммедиант",2.2);
        $secondBook = new Book("Финансист", 7.4);
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

    }
}