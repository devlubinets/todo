<?php


class SetStyle
{
    private static ?SetStyle  $instance = null;
    private string  $background_color = '';
    private string  $main_text = '';

    private function __construct(string $background_color = 'black', string $main_text = 'AVADA MEDIA') {

        $this->background_color = $background_color;
        $this->main_text = $main_text;

    }

    public static function getInstance(): SetStyle
    {

        if (!isset(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;

    }

    public static function test_singleton(SetStyle $obj1, SetStyle $obj2): bool
    {
        return $obj1 === $obj2 ? true:false;
    }

    public  function setBackGroudColor(string $color):void
    {
       $this->background_color= $color;
    }

    public  function getBackgroundColor():string
    {
      return $this->background_color;
    }

    public  function setMainText(string $text):void
    {
        $this->main_text = $text;
    }

    public  function getMainText():string
    {
        return $this->main_text;
    }

    public function __sleep()
    {
        throw new \Exception("Cannot serialize Singleton");
    }

    private function __wakeup()
    {
        throw new \Exception("Cannot unserialize Singleton");
    }

    private function __clone()
    {
        throw new \Exception("Cannot clone Singleton");
    }
}







