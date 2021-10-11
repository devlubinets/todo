<?php

interface IBuilderWebsite
{
    public function createTitle():void;
    public function createHead():void;
    public function createBody():void;
    public function getProduct();
}