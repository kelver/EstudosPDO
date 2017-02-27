<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 26/02/17
 * Time: 21:49
 */
try {
    $conn = new \PDO("mysql:host=localhost;dbname=teste_oo;", "root", "root");
    $query = "select * from products where id=1";
//    $query = "insert INTO products (name, `desc`) VALUE ('eBook', 'Learn JavaScript')";

    $stmt = $conn->query($query);
    $list = $stmt->fetch(PDO::FETCH_OBJ);
//    echo $list->name;
    print_r($list);

}catch(\PDOException $e) {
    echo "Error! Message: " . $e->getMessage() . " Code: " . $e->getCode();
}