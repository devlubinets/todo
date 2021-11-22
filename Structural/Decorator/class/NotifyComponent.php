<?php

class NotifyComponent implements NotifierInterface
{

    public function sendNotify(string $message): string
    {
        return $message;
    }
}