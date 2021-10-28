<?php
declare(strict_types=1);

class CommandBoldText implements CommandInterface
{
    private string $str;

    public function __construct(string $str = '')
    {
        $this->str = $str;
    }

    /**
     * @inheritDoc
     */
    public function execute(): string
    {
        return "<b>$this->str</b>";
    }
}