<?php

/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 26/02/17
 * Time: 23:21
 */
class Product implements InterfaceProduct
{
    private $id;
    private $name;
    private $desc;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getDesc()
    {
        return $this->desc;
    }

    public function setDesc($desc)
    {
        $this->desc = $desc;
        return $this;
    }
}