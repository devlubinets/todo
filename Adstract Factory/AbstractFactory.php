<?php

abstract class AbstractFactory
{
   abstract public function createText(): IText;
   abstract public function createImage(): IImage;
}