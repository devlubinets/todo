<?php

class ProductWebSite
{
    private array $parts = ["title"=>'',"head"=>'',"body"=>''];

    public function __construct()
    {

    }

    public function view():string
    {
       $title = $this->parts["title"];
       $head = $this->parts["head"];
       $body = $this->parts["body"];

        return  "<!doctype html> <html lang=\"en\"> <head> $head $title</head>$body</html>";

    }

}