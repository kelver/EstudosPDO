<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 26/02/17
 * Time: 21:49
 */

ini_set("display_errors",1);
ini_set("display_startup_erros",1);
error_reporting(E_ALL);
require_once ("InterfaceConn.php");
require_once ("Conn.php");
require_once ("InterfaceProduct.php");
require_once ("Product.php");
require_once ("ServiceProduct.php");

$db = new Conn("localhost", "teste_oo", "root", "root");
$product = new Product();

//inserindo
$product->setId(1)
        ->setName("MySql Course")
        ->setDesc("Course MySql of School of Net");


$service = new ServiceProduct($db, $product);

print_r($service->update());