<?php
declare(strict_types=1);

class Collection implements CollectionInterface, IteratorAggregate
{
    private array $collection;

    public function getIteretorNormal(): IteratorInterface
    {
        return new IteratorNormal($this);
    }

    public function getIteretorReverse(): IteratorInterface
    {
        return new IteratorReverse($this);
    }

    public function add(int $var = NAN):void
    {
        $this->collection[] = $var;
    }

    /**
     * @return array
     */
    public function getCollection(): array
    {
        return $this->collection;
    }

    public function getItems():array
    {
        return $this->collection;
    }

}