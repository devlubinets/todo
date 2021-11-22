<?php

class Proxy implements ServiceInterface
{
    private ServiceInterface $service;
    private string $data;

    public function __construct(ServiceInterface $service)
    {
        $this->service = $service;
        $this->data = $service->getData();
    }

    public function operation():void
    {
        if($this->checkData($this->data)) {
            echo "<br>Доступ к сервису осуществляется через заместителя  " . get_class($this->service);
            echo "<br>Данные сервиса: $this->data";
        } else {
            echo "<br>Обновление данных \$data: {$this->data} не актуальны";
            $this->data = $this->service->getData();
            echo "<br>Данные обновленны \$data: {$this->data}";
        }
    }

    private function checkData($data):bool
    {
        if ($data === $this->service->getData())
            return true;
        else
            return false;
    }
}