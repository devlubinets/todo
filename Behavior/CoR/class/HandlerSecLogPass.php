<?php

class HandlerSecLogPass extends AbstractHandler
{
    public function handleRequest(array $request): ?string
    {
        if($request['log'] === "Kirill" and $request['pass'] === "1111") {
            echo "<br>Hi Kirill";
            return parent::handleRequest($request);
        } else {
            return "I don't know you";
        }
    }
}