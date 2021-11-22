<?php

class Director
{
    private IBuilderWebsite  $builder;

    public function __construct(IBuilderWebsite $obj)
    {
        $this->setBuilder($obj);
    }

    public function setBuilder(IBuilderWebsite $builder):void
    {
        $this->builder = $builder;
    }

    public function lowMoneyWebSite():void
    {
        $this->builder->createTitle();

        $this->builder->getProduct();
    }

    public function manyMoneyWebSite():void
    {
        $this->builder->createTitle();
        $this->builder->createHead();
        $this->builder->createBody();

        $this->builder->getProduct();
    }

    /**
     * @return IBuilderWebsite
     */
    public function getBuilder(): IBuilderWebsite
    {
        return $this->builder;
    }
}