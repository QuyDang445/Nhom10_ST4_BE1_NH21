<?php
    class Manufactures extends Db{
    public function getAllManus()
    {
        $sql = self::$connection->prepare("SELECT * FROM manufactures");
        $sql->execute();
        $item = array();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
}