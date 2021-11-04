<?php
declare(strict_types=1);

class  ClientCode
{
    public static function businessCode():void
    {
        $subject = new Subject;
        $subscriberA = new SubscriberA("Mike");
        $subscriberB = new SubscriberB("Boris");

        $subject->subscribe($subscriberA);
        $subject->subscribe($subscriberB);

        echo "<br>С рынком акций что-то произошло";
        $subject->someDo();
        echo "<br>С рынком акций что-то произошло";
        $subject->someDo();
        echo "<br>С рынком акций что-то произошло";
        $subject->someDo();

        $subject->unsubscribe($subscriberB);
        $subject->someDo();
        $subject->someDo();
        $subject->someDo();
    }
}