<?php

class HandlerSecGPS extends AbstractHandler
{
    public function handleRequest(array $request): ?string
    {
        if($request['gps'] === "52.83154712827312, 18.486236699945742") {
            echo "Hi, root user from Zagajewice.";
            return parent::handleRequest($request);
        } else {
            return "I don't know where you";
        }
    }
}