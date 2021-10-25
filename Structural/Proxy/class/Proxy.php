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
            echo "Доступ к сервису осуществляется через заместителя  {$this->service}";
            echo "<br> {$this->operation()} ";
        } else {
            echo "Обновление данных \$data: {$this->data} не актуальны";
            $this->data = $this->service->getData();
            echo "Данные обновленны \$data: {$this->data}";
        }
    }

    private function checkData($data):bool
    {
        if ($this->data === $this->service->getData())
            return true;
        else
            return false;
    }
}