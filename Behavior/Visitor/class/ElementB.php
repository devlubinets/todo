<?php

class ElementB implements ElementInterface
{
    private int $state = 20;

    public function action(VisitorInterface $visitor): int
    {
        return $visitor->processingB($this);
    }

    /**
     * @return int
     */
    public function getState(): int
    {
        return $this->state;
    }


}