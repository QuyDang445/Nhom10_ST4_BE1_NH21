<?php
class Manufactures extends Db
{
    public function getAllManus()
    {
        $sql = self::$connection->prepare("SELECT * FROM manufactures ORDER BY `manu_id` DESC");
        $sql->execute();
        $item = array();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getManufacturesById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM manufactures WHERE manu_id = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function addManu($name)
    {
        $sql = self::$connection->prepare("INSERT 
        INTO `manufactures` (`manu_name`)
        VALUES (?)");
        $sql->bind_param("s", $name);
        return $sql->execute(); //return an object
    }
    public function editManu($name, $id)
    {
        $sql = self::$connection->prepare("UPDATE `manufactures` SET `manu_name` = ? WHERE `manufactures`.`manu_id` = ?");
        $sql->bind_param("si", $name, $id);
        return $sql->execute(); //return an object
    }
    public function delManufactures($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `manufactures` WHERE `manufactures`.`manu_id` =?");
        $sql->bind_param("i", $id);
        return $sql->execute(); //return an object
    }
    public function getcountManus()
    {
        $sql = self::$connection->prepare("SELECT COUNT(*)AS `c_manu` FROM `manufactures`");
        $sql->execute(); //return an object       
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
