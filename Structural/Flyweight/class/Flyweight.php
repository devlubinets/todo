<?php

class Flyweight
{
    private array $sharedState;

    /**
     * @param array $sharedState
     */
    public function __construct(array $sharedState)
    {
        $this->sharedState = $sharedState;
    }

    public function __toString():string
    {
        return "Hi, I'm flyweight object {$this->sharedState}";
    }
}