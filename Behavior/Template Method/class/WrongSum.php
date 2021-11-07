<?php

class WrongSum extends SumOperation
{

    protected function sumAB(): void
    {
        $this->result = $this->a + $this->b - 1;
    }

    protected function hook(): void
    {
        // TODO: Implement hook() method.
    }

}