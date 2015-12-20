<?php
/**
 * Created by PhpStorm.
 * User: Сергій
 * Date: 20.12.2015
 * Time: 14:03
 */
include_once("Cat.php");

$cat = new \Wildlife\Animal\Cat('garfield');
echo $cat->getName();
echo "\n";
echo $cat->meow();
echo "\n";
if($cat->getName() === 'garfield')
{
    echo "true\n";
}
if($cat->meow() === 'Cat garfield is saying meow')
{
    echo "true";
}