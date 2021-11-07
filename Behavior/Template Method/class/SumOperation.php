<?php

abstract class SumOperation
{
    protected int $a;
    protected int $b;
    protected int $result = 0;

    /**
     * @param int $a
     * @param int $b
     */
    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    final public function templateMethod():void
    {
        $this->initStep();
        $this->sumAB();
        $this->hook();
        $this->showResult();
    }

    final protected function initStep():void
    {
        echo "<br>Welcome to:" . __CLASS__;
    }

    final protected function showResult():void
    {
        echo "<pre><br><div class='cls1'>Result sum operation: $this->result</div></pre>";
    }

    abstract protected function sumAB():void;
    abstract protected function hook():void;
}