<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 26/02/17
 * Time: 21:49
 */
try {
    $conn = new \PDO("mysql:host=localhost;dbname=teste_oo;", "root", "root");
    $query = "select * from products where id = {$_GET['id']}";
//    $query = "insert INTO products (name, `desc`) VALUE ('eBook', 'Learn JavaScript')";

    foreach($conn->query($query) as $product) {
        echo $product['id'];
        echo "<br/>";
        echo $product['name'];
        echo "<br/>";
        echo $product['desc'];
        echo "<br/>";
    }

}catch(\PDOException $e) {
    echo "Error! Message: " . $e->getMessage() . " Code: " . $e->getCode();
}