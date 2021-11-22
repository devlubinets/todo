<?php

class CorrectSum extends SumOperation
{

    protected function sumAB(): void
    {
        $this->result = $this->a + $this->b;
    }

    protected function hook(): void
    {
        // TODO: Implement hook() method.
    }
}