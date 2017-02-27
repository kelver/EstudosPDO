<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 26/02/17
 * Time: 21:49
 */
try {
    $conn = new \PDO("mysql:host=localhost;dbname=tste_oo;", "root", "root");
}catch(\PDOException $e) {
    echo "Error! Message: " . $e->getMessage() . " Code: " . $e->getCode();
}