<?php

class GreyFactory extends AbstractFactory
{

    public function createText(): IText
    {
        return new GreyText();
    }

    public function createImage(): IImage
    {
        return new GreyImage();
    }
}