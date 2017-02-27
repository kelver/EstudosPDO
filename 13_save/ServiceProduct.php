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

    public function lists()
    {
        $query = "select * from products";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function save()
    {
        $query = "insert into products (name, `desc`) values(:name, :desc)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue('name', $this->product->getName());
        $stmt->bindValue('desc', $this->product->getDesc());

        $stmt->execute();

        return $this->db->lastInsertId();
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}