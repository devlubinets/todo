<?php

abstract class AbstractFactory
{
    abstract public function createShape() : IShape;

}