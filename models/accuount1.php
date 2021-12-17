<?php
class Account1 extends Db
{
    public function addAccount1($user_name)
    {
        $sql = self::$connection->prepare("INSERT INTO `wishlist` ( `user_name`) VALUES (?)");
        $sql->bind_param("s", $user_name);
        //$items = array();
        //$sql->execute(); //return an object
        return  $sql->execute(); //return an object

    }
}