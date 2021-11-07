<?php

interface ElementInterface
{
    public function action(VisitorInterface $visitor):int;
    public function getState():int;
}