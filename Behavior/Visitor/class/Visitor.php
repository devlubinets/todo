<?php

class Visitor implements VisitorInterface
{

    public function processingA(ElementInterface $elementA): int
    {
        return $elementA->getState()*100;
    }

    public function processingB(ElementInterface $elementB): int
    {
        return $elementB->getState()*200;
    }
}