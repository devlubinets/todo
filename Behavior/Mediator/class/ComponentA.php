<?php

class ComponentA implements ComponentInterface
{
    private MediatorInterface $mediator;

    public function operation():void
    {
        $this->mediator->notify($this, "<br>Component A does something<br>");
    }

    public function setMediator(MediatorInterface $mediator):void
    {
        $this->mediator = $mediator;
    }
}