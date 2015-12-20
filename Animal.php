<?php
/**
 * Created by PhpStorm.
 * User: Сергій
 * Date: 20.12.2015
 * Time: 13:09
 */

namespace Wildlife;


class Animal
{
    protected $name;

    function __construct($name){
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

}