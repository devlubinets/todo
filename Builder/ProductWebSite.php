<?php

class ProductWebSite
{
    public array $parts = ["title"=>0,"head"=>0,"body"=>0];

    public function __construct()
    {

    }

    public function view():string
    {
       $title = $this->parts["title"];
       $head = $this->parts["head"];
       $body = $this->parts["body"];

        return  " <!doctype html>
                   <html lang=\"en\">
                        <head>
                        $head  
                 <title>$title</title>
                        </head>
                           $body
                        </html>
                                        ";

    }

}