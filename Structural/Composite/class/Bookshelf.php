<?php

class Bookshelf extends AbstractBookItem
{
    public function __construct(float $price = 0.0, string $name = 'Книжная полка')
    {
        $this->name = $name;
        $this->price = $price;
    }
}