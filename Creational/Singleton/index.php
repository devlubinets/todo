<?php
require 'SetStyle.php';

$singleton_obj = SetStyle::getInstance();

echo "<br>".$singleton_obj->getBackgroundColor();
echo "<br>".$singleton_obj->getMainText();

$singleton_obj->setBackGroudColor('ultra marine');
$singleton_obj->setMainText('URA URA URA');

echo "<br>".$singleton_obj->getBackgroundColor();
echo "<br>".$singleton_obj->getMainText();


$obj1 = SetStyle::getInstance();
$obj2 = SetStyle::getInstance();

if(SetStyle::test_singleton($obj1,$obj2))
    echo "Даннный объект синглтон";
    else
    echo "Даннный НЕ объект синглтон";
