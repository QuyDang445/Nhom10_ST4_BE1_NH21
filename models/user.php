<?php
class User extends Db
{

public function checkLogin($username, $password)
{
   $sql = self::$connection->prepare("SELECT * FROM users
   WHERE `username`=? AND `password`=?");
   $password = md5( $password);
   $sql->bind_param("ss", $username, $password);
   $sql->execute(); //return an object
   //$items = array();
   $items = $sql->get_result()->num_rows;
   if($items ==1){
       return true;
   }
   else{
       return false;
   }
}
public function checkLogin1($user_name)
{
   $sql = self::$connection->prepare("SELECT * FROM wishlist
   WHERE `user_name`=? ");
   $sql->bind_param("s", $user_name);
   $sql->execute(); //return an object
   //$items = array();
   $items = $sql->get_result()->num_rows;
   if($items ==1){
       return true;
   }
   else{
       return false;
   }
}
}
?>