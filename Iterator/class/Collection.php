<?php

class Collection implements CollectionInterface
{
    private ?IteratorNormal $iteratorNormal = null;
    private ?IteratorReverse $iteratorReverse = null;
    private array $collection;

    public function getIteretorNormal(CollectionInterface $col): IteratorInterface
    {
        return new IteratorNormal($this);
    }

    public function getIteretorReverse(CollectionInterface $col): IteratorInterface
    {
        return new IteratorReverse($this);
    }

    public function add(int $var = NAN):void
    {
        $this->collection[] = $var;
    }
}