<?php

class Decorator implements NotifierInterface
{
    private ?NotifierInterface $notifier = null;

    public function __construct(NotifierInterface $notifier)
    {
        $this->notifier = $notifier;
    }

    public function sendNotify(string $message): string
    {
        return $this->notifier->sendNotify($message);
    }
}