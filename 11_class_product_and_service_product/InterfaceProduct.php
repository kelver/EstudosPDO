<?php

/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 26/02/17
 * Time: 23:24
 */
interface InterfaceProduct
{
    public function getId();
    public function setId($id);
    public function getName();
    public function setName($name);
    public function getDesc();
    public function setDesc($desc);

}