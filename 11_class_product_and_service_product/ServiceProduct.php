<?php

/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 26/02/17
 * Time: 23:28
 */
class ServiceProduct
{
    private $db;
    private $product;

    public function __construct(InterfaceConn $db, InterfaceProduct $product)
    {
        $this->db = $db->connect();
        $this->product = $product;
    }

    public function list()
    {

    }

    public function save()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}