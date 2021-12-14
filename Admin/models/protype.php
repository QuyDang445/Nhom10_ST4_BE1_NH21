<?php
class Protype extends Db
{
    public function getAllProtype()
    {
        $sql = self::$connection->prepare("SELECT * FROM protypes");
        $sql->execute();
        $item = array();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function addProType($name)
    {
        $sql = self::$connection->prepare("INSERT 
        INTO `protypes` (`type_name`)
        VALUES (?)");
        $sql->bind_param("s", $name);
        return $sql->execute(); //return an object
    }
    public function editProType($name, $id)
    {
        $sql = self::$connection->prepare("UPDATE `protypes` SET `type_name` = ? WHERE `protypes`.`type_id` = ?");
        $sql->bind_param("si", $name, $id);
        return $sql->execute(); //return an object
    }
    public function getProtypeById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM protypes WHERE type_id = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
}
?>
