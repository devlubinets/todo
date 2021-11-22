<?php

interface VisitorInterface
{
    public function processingA(ElementInterface $elementA):int;
    public function processingB(ElementInterface $elementB):int;
}