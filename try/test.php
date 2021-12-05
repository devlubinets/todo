<?php
$pages = [
    1 => ['title'=>'страница 1', 'text'=>'текст страницы 1'],
    2 => ['title'=>'страница 2', 'text'=>'текст страницы 2'],
    3 => ['title'=>'страница 3', 'text'=>'текст страницы 3'],
];

$size = "large";
$var_array = array("color" => "blue",
    "size"  => "medium",
    "shape" => "sphere");
extract($var_array, EXTR_PREFIX_SAME, "wddx");

echo "$color, $size, $shape, $wddx_size\n";


