<?php

use RefactoringGuru\State\Conceptual\State;

class Article
{
    private StateInterface $state;

    /**
     * @param StateInterface $state
     */
    public function __construct(StateInterface $state)
    {
        $this->changeState($state);
    }

    /**
     * @param StateInterface $state
     */
    public function changeState(StateInterface $state): void
    {
        echo "<br>Статья: Перешла на состояние: " . get_class($state).".";
        $this->state = $state;
        $this->state->setContext($this);
    }

    public function publish():void
    {
        $this->state->publish();
    }

}