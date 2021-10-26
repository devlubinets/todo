<?php

abstract class AbstractHandler implements HandlerInterface
{
    private static int $numberHandler = 0;
    private ?HandlerInterface $nextHandler = null;

    public function __construct()
    {
        ++static::$numberHandler;
    }

    public function setNext(HandlerInterface $handler): HandlerInterface
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handleRequest(array $request): ?string
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handleRequest($request);
        } else {
            return null;
        }
    }
}