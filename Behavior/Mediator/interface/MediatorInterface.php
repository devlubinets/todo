<?php

interface MediatorInterface
{
   public function notify(ComponentInterface $component, string $event):void;
}