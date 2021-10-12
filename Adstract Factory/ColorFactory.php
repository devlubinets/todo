<?php

class ColorFactory extends AbstractFactory
{

    public function createText(): IText
    {
       return new ColorText();
    }

    public function createImage(): IImage
    {
        return new ColorImage();
    }
}