<?php
class Product extends Db
{
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM `products`,`manufactures`,`protypes`
        WHERE `products`.`manu_id` = `manufactures`.`manu_id`
        AND `products`.`type_id` = `protypes`.`type_id`");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getProductById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function addProduct($name, $manu_id, $type_id, $price, $image, $desc)
    {

        $sql = self::$connection->prepare("INSERT 
        INTO `products`(`name`, `manu_id`, `type_id`, `price`, `pro_image`, `description`) 
        VALUES (?,?,?,?,?,?)");
        $sql->bind_param("siiiss", $name, $manu_id, $type_id, $price, $image, $desc);
        var_dump("INSERT 
        INTO `products`(`name`, `manu_id`, `type_id`, `price`, `pro_image`, `description`) 
        VALUES ('$name', '$manu_id', '$type_id', '$price', '$image, $desc)");
        return $sql->execute(); //return an object
    }
    public function delProduct($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `products` WHERE `products`.`id` =?");
        $sql->bind_param("i", $id);
        return $sql->execute(); //return an object
    }
    public function editProduct($name,$image,$price,$manu_id,$type_id,$desc,$fea,$crat,$id)
    {
        $sql = self::$connection->prepare("UPDATE `products` SET `name` = ?,`type_id` = ?,`price` = ?,`manu_id` = ?,`pro_image` = ?,`description` = ?,`feature` = ?,`created_at` = ? 
        WHERE `id` = ?");
        var_dump("UPDATE `products` SET `name` = '$name',`type_id` = '$type_id',`price` = $price,`manu_id` = $manu_id,`pro_image` = $image,`description` = '$desc',`feature` = $fea,`created_at` = '$crat'
        WHERE `id` = $id");
        $sql->bind_param("siiissisi", $name,$type_id,$price,$manu_id,$image,$desc,$fea,$crat,$id);
        return $sql->execute(); //return an object
    }
}
