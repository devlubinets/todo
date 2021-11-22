<?php
declare(strict_types=1);

class CommandDBadd implements CommandInterface
{
    private ReceiverDB $receiverDB;
    private string $str;

    /**
     * @param ReceiverDB|null $receiverDB
     * @param string $str
     */
    public function __construct(string $str = '')
    {
        $this->str = $str;
        $this->receiverDB = new ReceiverDB();
    }

    /**
     * @inheritDoc
     */
    public function execute(): string
    {
        return $this->receiverDB->addDBdata($this->str);
    }
}