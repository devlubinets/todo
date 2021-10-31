<?php
declare(strict_types=1);

interface IteratorInterface
{
    public function getNext():CollectionInterface;
    public function getAll():CollectionInterface;
    public function getOne():CollectionInterface;
}