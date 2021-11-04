<?php

interface SubscriberInterface
{
    public function update(int $state):void;
    public function getName(): string;
}