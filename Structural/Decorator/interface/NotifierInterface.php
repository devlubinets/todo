<?php

interface NotifierInterface
{
    public function sendNotify(string $message):string;
}