<?php
declare(strict_types=1);

interface CollectionInterface
{
    public function getIteretorNormal(): IteratorInterface;
    public function getIteretorReverse(): IteratorInterface;
}