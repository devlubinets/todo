<?php

class FlyweightFactory
{
    private $flyweights = [];

    /**
     * @param array $flyweights
     */
    public function __construct(array $flyweights)
    {
        foreach ($flyweights as $state) {
            $this->flyweights[$this->getKey($state)] = new Flyweight($state);
        }
        $this->flyweights = $flyweights;
    }

    private function getKey(array $state): string
    {
        ksort($state);
        return implode("+", $state);
    }

    public function getFlyweight(array $sharedState):Flyweight
    {
        $state = $this->getKey($sharedState);

        if(isset($this->flyweights[$state])) {
            echo "Flyweight object is ready!";
            return $this->flyweights[$state];
        } else {
            $this->flyweights[$state] = new Flyweight($sharedState);
            return $this->flyweights[$state];
        }
    }

    public function getListFlyweight():string
    {
        foreach($this->flyweights as $flyweight) {
            echo $flyweight;
        }

    }

    public function __toString():string
    {
        return "Hi, I'm flyweight factory object!";
    }
}