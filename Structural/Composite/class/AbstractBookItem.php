<?php

abstract class AbstractBookItem
{
    protected ?AbstractBookItem $parent = null;
    protected array $child = [];
    protected string $name = '';
    protected float $price = -1.0;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
        $this->setParent($name);
    }

    public function add(AbstractBookItem $addObject):void
    {
        $this->child[] = $addObject;
        $addObject->parent = $addObject;
    }

    public function remove(AbstractBookItem $removeObject):void
    {
        $removeObject->parent = null;
        unset($removeObject);
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getListName():array
    {
        $parent = $this->parent->name;
        $result = [];
        foreach ($this->child as $item) {
            $result[] = "<br><div class='cls1'> $parent ".'->'. $item->getName() . '</div><br>';
        }

        return $result;
    }

    public function setParent($name):void
    {
        $this->parent->name = $name;
    }

}