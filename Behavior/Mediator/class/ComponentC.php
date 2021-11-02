<?php

class ComponentC implements ComponentInterface
{
    private MediatorInterface $mediator;

    public function operation(): void
    {
        $this->mediator->notify($this, "<br>Component C does something<br>");
    }

    public function setMediator(MediatorInterface $mediator):void
    {
        $this->mediator = $mediator;
    }
}