<?php
declare(strict_types=1);

class Context
{
    private AlgoInterface $strategy;

    /**
     * @param AlgoInterface $strategy
     */
    public function __construct(AlgoInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @param AlgoInterface $strategy
     */
    public function setStrategy(AlgoInterface $strategy): void
    {
        $this->strategy = $strategy;
    }

    /**
     * @param string $str
     * @return string
     */
    public function doBusinessLogic(string $str = ''):string
    {
        return $this->strategy->doAlgo($str);
    }
}