<?php

abstract class AbstractBookItem
{
    protected array $child = [];
    protected string $name = '';
    protected float $price = -1.0;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function add(AbstractBookItem $addObject):void
    {
        $this->child[] = $addObject;
    }

    public function remove(int $numberInArray):void
    {
        unset($this->child[$numberInArray]);
    }

    public function getName():string
    {
        return "<br><div class='cls1'> $this->name</div><br>";
    }

    public function getListName():array
    {

        $result = [];

        if  ($this->hasComposite()) {
            foreach ($this->child as $item => $value ) {
                $result[] = "<br><div class='cls1'> $this->name" . '->' . "{$this->child[$item]->name}</div><br>";

                $this->child[$item]->getListName();
            }  } else {
            $result[] = $this->getName();
        }
        unset($value);
        return $result;
    }




    public function hasComposite():bool
    {
        return (bool)(count($this->child) > 0 );
    }
}