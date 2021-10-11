<?php

class Director
{
    public  $builder;

    public function __constructor()
    {
        #$this->setBuilder();
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
        $this->builder->createHeader();
        $this->builder->createBody();

        $this->builder->getProduct();
    }



}