<?php

class Subject
{
    private int $state;
    /** @var SubscriberInterface[] */
    private array $subscribers;

    /**
     * @param int $state
     */
    public function __construct()
    {
        $this->state = rand(0,7);
    }

    public function subscribe(SubscriberInterface $subscriber):void
    {
        $this->subscribers[] = $subscriber;
        $name = $subscriber->getName();

        echo "<br><div class='cls1'>Новый подписчик $name подписался на издателя</div>";
    }

    public function unsubscribe(SubscriberInterface $subscriber):void
    {
        $i = array_search($subscriber, $this->subscribers);
        $name = $subscriber->getName();
        unset($this->subscribers[$i]);

        echo "<br><div class='cls1'>Подписчик $name отписался от издателя</div>";
    }

    public function someDo():void
    {
        $this->state = rand(0,7);
        $this->notify();
    }

    public function notify():void
    {
        echo "<br>Издатель: Уведомляет подписчиков...";
        foreach ($this->subscribers as $subscriber) {
            $subscriber->update($this->state);
        }
    }
}