<?php
/**
 * Created by PhpStorm.
 * User: Сергій
 * Date: 20.12.2015
 * Time: 13:58
 */
namespace Wildlife\Animal;
include_once("Animal.php");

use Wildlife\Animal;

class Cat extends Animal
{
    /**
     * @return string
     */
    function meow(){
        $catName = $this->getName();
        return "Cat $catName is saying meow";
    }
}