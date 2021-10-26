<?php

interface HandlerInterface
{
    public function setNext(HandlerInterface $handler):HandlerInterface;
    public function handleRequest(array $request): ?string;
}