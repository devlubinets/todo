<?php
declare(strict_types=1);

class IteratorNormal implements Iterator
{
    private IteratorAggregate $collection;
    private int $position;

    public function __construct(IteratorAggregate $collection)
    {
        $this->collection = $collection;
        $this->position = count($collection->getCollection()) - 1;
    }

    // Метод должен вернуть значение текущего элемента
    public function current()
    {
        return $this->collection->getItems()[$this->position];
    }
    // Метод должен вернуть ключ текущего элемента
    public function key()
    {
        return $this->position;
    }
    // Метод должен сдвинуть "указатель" на следующий элемент
    public function next(): void
    {
        ++$this->position;
    }
    // Метод должен поставить "указатель" на первый элемент
    public function rewind(): void
    {
        $this->position = 0;
    }
    // Метод должен проверять - не вышел ли указатель за границы?
    public function valid(): bool
    {
        return isset($this->collection->getItems()[$this->position]);
    }
}