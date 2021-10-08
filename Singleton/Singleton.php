<?php


class Singleton {

    protected static Singleton  $instance;

    public static function getInstance(): Singleton
    {

        if (!isset(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;

    }

    public static function test_singleton($obj1,$obj2): bool
    {
        return $obj1 === $obj2 ? true:false;
    }

    protected function __construct(){}

    protected function __sleep(){

        throw new \Exception("Cannot serialize Singleton");
    }

    protected function __wakeup(){

        throw new \Exception("Cannot unserialize Singleton");
    }

    protected function __clone(){

        throw new \Exception("Cannot clone Singleton");
    }


}