<?php
class Account1 extends Db
{
    public function addAccount1($user_name)
    {
        $sql = self::$connection->prepare("INSERT INTO `wishlish` `user_name` 
        VALUES ?");
        $sql->bind_param("s", $user_name);
        $items = array();
        $sql->execute(); //return an object
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array

    }
}