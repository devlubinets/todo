<?php
declare(strict_types=1);

class IteratorNormal implements IteratorInterface, Iterator
{

    public function getNext(): CollectionInterface
    {
        // TODO: Implement getNext() method.
    }

    public function getAll(): CollectionInterface
    {
        // TODO: Implement getAll() method.
    }

    public function getOne(): CollectionInterface
    {
        // TODO: Implement getOne() method.
    }

    // Метод должен вернуть значение текущего элемента
    public function current()
    {

    }
    // Метод должен вернуть ключ текущего элемента
    public function key()
    {

    }
    // Метод должен сдвинуть "указатель" на следующий элемент
    public function next(): void
    {

    }
    // Метод должен поставить "указатель" на первый элемент
    public function rewind(): void
    {

    }
    // Метод должен проверять - не вышел ли указатель за границы?
    public function valid(): bool
    {

    }
}