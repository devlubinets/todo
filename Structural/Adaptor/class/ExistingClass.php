<?php

class ExistingClass implements IExistingInterface
{
    public string $message = '';

    public function sendMessage(string $message): string
    {
        return "<div class='cls1'><br>" . "Message number #46 received ".$message."<p>" . __METHOD__ . "<br></div>";
    }
}