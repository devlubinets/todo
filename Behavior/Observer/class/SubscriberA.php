<?php

class SubscriberA implements SubscriberInterface
{
    public string $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(int $state): void
    {
        if ($state > 1)
            echo "<br><div class='cls2'>".__CLASS__." отреагировал на изменение цены акций Apple</div>";
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}