<?php
declare(strict_types=1);

class IteratorReverse implements IteratorInterface, \Iterator
{
    private Collection $collection;
    private int $position;

    public function __construct(CollectionInterface $collection)
    {
        $this->collection = $collection;
        $this->position = count($collection->getCollection()) - 1;
    }

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
        --$this->position;
    }
    // Метод должен поставить "указатель" на первый элемент
    public function rewind(): void
    {
        $this->position = count($this->collection->getItems()) - 1;
    }
    // Метод должен проверять - не вышел ли указатель за границы?
    public function valid(): bool
    {
        return count($this->collection->getItems()) > $this->position ? false : true;
    }
}