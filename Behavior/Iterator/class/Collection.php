<?php
declare(strict_types=1);

class Collection implements IteratorAggregate
{
    private array $collection;
    private string $nameIterator;
    private array $iterators = ["normal", "reverse"];

    public function selectIterator(string $nameIterator):void
    {
        foreach ($this->iterators as $value) {
            switch ($value)
            {
                case "normal":
                    $this->nameIterator = $nameIterator;
                    break;
                case "reverse":
                    $this->nameIterator = $nameIterator;
                    break;
            }
        }
    }

    public function getIterator():Iterator
    {
        $iterator =  0;
        switch ($this->nameIterator) {
            case "normal":
                $iterator = $this->getIteretorNormal();
                break;
            case "reverse":
                $iterator = $this->getIteretorReverse();
                break;
        }

        return $iterator;
    }

    private function getIteretorNormal(): Iterator
    {
        return new IteratorNormal($this);
    }

    private function getIteretorReverse(): Iterator
    {
        return new IteratorReverse($this);
    }

    public function add(int $var = NAN):void
    {
        $this->collection[] = $var;
    }

    public function getItems():array
    {
        return $this->collection;
    }

    public function getCollection():array
    {
        return $this->collection;
    }
}