<?php

class Mediator implements MediatorInterface
{
    private ComponentInterface $componentA;
    private ComponentInterface $componentB;
    private ComponentInterface $componentC;

    /**
     * @param ComponentInterface $componentA
     * @param ComponentInterface $componentB
     * @param ComponentInterface $componentC
     */
    public function __construct(ComponentInterface $componentA, ComponentInterface $componentB, ComponentInterface $componentC)
    {
        $this->componentA = $componentA;
        $this->componentA->setMediator($this);

        $this->componentB = $componentB;
        $this->componentB->setMediator($this);

        $this->componentC = $componentC;
        $this->componentC->setMediator($this);
    }

    public function notify(ComponentInterface $component, string $event): void
    {
        if ($component instanceof ComponentA) {
            echo "$event";
        } elseif ($component instanceof ComponentB) {
            echo "$event";
            $this->componentC->operation();
        } elseif ($component instanceof ComponentC) {
            echo "$event";
        }
    }
}