<?php

class RandSum extends SumOperation
{

    protected function sumAB(): void
    {
        $this->result = $this->a + rand($this->b, 10);
    }

    protected function hook(): void
    {
        // TODO: Implement hook() method.
    }
}