<?php

class Director
{
    public IBuilderWebsite  $builder;

    public function __construct(IBuilderWebsite $obj)
    {
        $this->setBuilder($obj);
    }

    public function setBuilder(IBuilderWebsite $builder)
    {
        $this->builder = $builder;
    }

    public function lowMoneyWebSite()
    {
        $this->builder->createTitle();

        $this->builder->getProduct();
    }

    public function manyMoneyWebSite()
    {
        $this->builder->createTitle();
        $this->builder->createHead();
        $this->builder->createBody();

        $this->builder->getProduct();
    }



}