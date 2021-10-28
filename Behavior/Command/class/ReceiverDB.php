<?php
declare(strict_types=1);

class ReceiverDB
{
    private string $dbData = " + DB data";

    public function addDBdata(string $str):string
    {
        return $str . $this->dbData;
    }
}