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

    abstract protected function create():IIcon;

    public function view() :void
{
    $concreate =  $this->create();
    $concreate->view();
    $concreate->name();
}

}


class IconFB extends IconFactoryMethod
{


    public function  __construct(string $name, string $icon)
    {
        $this->name = $name;
        $this->icon = $icon;

    }

    public function create(): IIcon
    {
        return new CreateIconFB($this->name,$this->icon);
    }

}

class IconVK extends IconFactoryMethod
{
    public function  __construct(string $name, string $icon)
    {
        $this->name = $name;
        $this->icon = $icon;

    }

    public function create(): IIcon
    {
        return new CreateIconVK($this->name,$this->icon);
    }

}

class CreateIconFB implements IIcon
{
    private string $name = '';
    private string $icon = '';

    public function __construct(string $name, string $icon)
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

    public function __construct(string $name, string $icon)
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