<?php

class Service implements ServiceInterface
{
    private string $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function operation():void
    {
        echo "<br>Данные сервиса:{$this->data}";
    }

    /**
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * @param string $data
     */
    public function setData(string $data): void
    {
        $this->data = $data;
    }



}