<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 26/02/17
 * Time: 21:49
 */

require_once ("InterfaceConn.php");
require_once ("Conn.php");
require_once ("InterfaceProduct.php");
require_once ("Product.php");
require_once ("ServiceProduct.php");

$db = new Conn("localhost", "teste_oo", "root", "root");