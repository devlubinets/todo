<?php


final class SetStyle extends Singleton
{

    private string  $background_color ="";
    private string  $main_text = "";

    protected function __construct() {
        $this->background_color = "black";
        $this->main_text = "AVADA MEDIA";
    }

    public  function setBackGroudColor($color) {

       $this->background_color= $color;
        return null;
    }

    public  function getBackgroundColor():string {

      return $this->background_color;

    }

    public  function setMainText($text) {

        $this->main_text = $text;
        return null;
    }

    public  function getMainText():string {

        return $this->main_text;
    }
}