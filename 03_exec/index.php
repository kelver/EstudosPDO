<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 26/02/17
 * Time: 21:49
 */
try {
    $conn = new \PDO("mysql:host=localhost;dbname=teste_oo;", "root", "root");
//    $query = "select * from products";
    $query = "insert INTO products (name, `desc`) VALUE ('eBook', 'Learn JavaScript')";

    $return = $conn->exec($query);

    print_r($return);

}catch(\PDOException $e) {
    echo "Error! Message: " . $e->getMessage() . " Code: " . $e->getCode();
}