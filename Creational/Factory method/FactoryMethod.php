<?php

interface IIcon
{
    public function view():void;
    public function name():string;
}

abstract  class IconFactoryMethod
{
    protected string $icon = '';
    protected string $name = '';
    protected string $type = '';
    protected ?IIcon $obj = null;

    abstract protected function create(string $nameIcon):void;

    abstract public function view() : void;
}


class Icon extends IconFactoryMethod
{
    public function  __construct(string $name = '', string $icon = '', string $type = '')
    {
        $this->name = $name;
        $this->icon = $icon;
        $this->type = $type;

        $this->create($this->type);
    }

    protected function create(string $type): void
    {
        $icon = null;

        switch ($type) {
            case "vk":  $icon =  new CreateIconFB($this->name,$this->icon); break;
            case "fb":  $icon =  new CreateIconVK($this->name,$this->icon); break;
        }

        $this->obj = $icon;
    }

    public function view(): void
    {
        $this->obj->view();
    }

}


class CreateIconFB implements IIcon
{
    private string $name = '';
    private string $icon = '';

    public function __construct(string $name = '', string $icon = '')
    {
        $this->name = $name;
        $this->icon = $icon;
    }

    public function view(): void
    {
        $name = $this->name;
        $icon = $this->icon;
        echo "<h1>$name</h1><p>";
        echo "<img src=\"$icon\" width=\"255\" height=\"255\" alt=\"FB facebook\">";
    }

    public function name(): string
    {
        return $this->name;
    }


}

class CreateIconVK implements IIcon
{
    private string $name = '';
    private string $icon = '';

    public function __construct(string $name = '', string $icon = '')
    {
        $this->name = $name;
        $this->icon = $icon;
    }

    public function view(): void
    {
        $name = $this->name;
        $icon = $this->icon;
        echo "<h1>$name</h1><p>";
        echo "<img src=\"$icon\" width=\"255\" height=\"255\" alt=\"VK vkontakte\">";
    }

    public function name(): string
    {
       return  $this->name;
    }


}