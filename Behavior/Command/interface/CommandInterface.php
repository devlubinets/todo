<?php
declare(strict_types=1);

interface CommandInterface
{
    /**
     * @param string $str
     * @return string
     */
    public function execute():string;
}