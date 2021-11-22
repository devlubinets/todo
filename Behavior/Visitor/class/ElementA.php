<?php

class ElementA implements ElementInterface
{
    private int $state = 10;

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