<?php
declare(strict_types=1);

class CommandItalic implements CommandInterface
{
    private string $str;

    /**
     * @param string $str
     */
    public function __construct(string $str = '')
    {
        $this->str = $str;
    }

    /**
     * @inheritDoc
     */
    public function execute(): string
    {
        return "<i>$this->str</i>";
    }
}