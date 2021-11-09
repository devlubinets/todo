<?php

class FactoryAB
{
    public function createLetter(string $letter):ProductInterface
    {
        switch ($letter)
        {
            case 'A':
                return new LetterA();
                break;
            case 'B':
                return new LetterB();
                break;
        }
    }
}