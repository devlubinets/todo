<?php

interface CollectionInterface
{
    public function getIteretorNormal(CollectionInterface $col): IteratorInterface;
    public function getIteretorReverse(CollectionInterface $col): IteratorInterface;
}