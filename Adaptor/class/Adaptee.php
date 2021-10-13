<?php

class Adaptee implements IAnotherInterface
{
    public string $telegramma = '';

    public function sendTelegramma(string $telegramma): string
    {
        return "<div class='cls1'><br>" . "Telegramma number #86 received ".$telegramma."<p>" . __METHOD__ . "<br></div>";
    }
}