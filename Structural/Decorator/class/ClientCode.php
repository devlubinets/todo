<?php

class  ClientCode
{
    public static function businessCode():void
    {
        $message = " Hi Decorator";
        $component = new NotifyComponent();

        $telegram = new TelegramDecorator($component);
        $viber = new ViberDecorator($component);

        print '<br>' . $telegram->sendNotify($message);
        print '<br>' . $viber->sendNotify($message);
    }
}