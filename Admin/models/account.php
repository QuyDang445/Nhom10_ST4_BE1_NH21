<?php
class Account extends Db
{
    public function addAccount($username,$password,$role_id)
    {
        $password = md5( $password); 
        $sql = self::$connection->prepare("INSERT INTO `users` (`username`, `password`, `role_id`) 
        VALUES (?,?,?)");
        $sql->bind_param("ssi", $username,$password,$role_id);
        return $sql->execute(); //return an object

    }
}