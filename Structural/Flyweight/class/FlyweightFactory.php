<?php

class FlyweightFactory
{
    private $flyweights = [];

    private function getKey(array $state): string
    {
        ksort($state);
        return implode("+", $state);
    }

    public function getFlyweight(array $sharedState):Flyweight
    {
        $state = $this->getKey($sharedState);

        if(isset($this->flyweights[$state])) {
            echo "<br><div class='cls1'>Flyweight object: ${sharedState['0']} is ready!</div>";
            return $this->flyweights[$state];
        } else {
            $this->flyweights[$state] = new Flyweight($sharedState);
            echo "<br><div class='cls1'>Flyweight object: ${sharedState['0']} creat!</div>";
            return $this->flyweights[$state];
        }
    }

    public function getListFlyweight():void
    {
        $array = $this->flyweights;

        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

    public function __toString():string
    {
        return "Hi, I'm flyweight factory object!";
    }
}