<?php
class Product extends Db
{
public function getAllProducts()
{
$sql = self::$connection->prepare("SELECT * FROM products");
$sql->execute();
$item=array();
$item=array();$item=$sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $item;
}
public function getProductById($id)
{
$sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
$sql->bind_param("i",$id);
$sql->execute();
$item=array();$item=$sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items;
}
public function getNew10Products(){
    $sql=self::$connection->prepare("SELECT * FROM products ORDER BY id desc limit 10");
    $sql->execute();
    $item=array();
    $item=array();$item=$sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items;
}
public function search($keyword)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `name` LIKE ?");
        $keyword = "%$keyword%";
        $sql->bind_param("s", $keyword);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}