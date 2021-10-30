<?php

class  ClientCode
{
    public static function businessCode():void
    {
        $collection = new Collection();

        $collection->add(1);
        $collection->add(2);
        $collection->add(3);
        $collection->add(4);
        $collection->add(5);
        $collection->add(6);

        $collection->getIteretorNormal();
    }
}