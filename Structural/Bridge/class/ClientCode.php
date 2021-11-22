<?php

class  ClientCode
{

    public static function businessCode():void
{
        $win_os = new WINbackEnd();
        $obj_gui_windows = new Gui($win_os);
        print $obj_gui_windows->createText("The player can acquire up to three stars.");
        print $obj_gui_windows->createColorBox("green");

        $unix_os = new UNIXbackEnd();
        $obj_gui_unix = new Gui($unix_os);
        print $obj_gui_unix->createText("Jordan neither possesses nor intends to acquire such weapons.");
        print $obj_gui_unix->createColorBox("orange");

}

}