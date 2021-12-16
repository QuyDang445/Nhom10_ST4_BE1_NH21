<?php
class Wishlist extends Db{
    public function addwish($user_name,$sp_id){
        $sql = self::$connection->prepare("INSERT INTO `wishlist`(`user_name`, `sp_id`) VALUES (?,?)");
        $sql->bind_param("si", $user_name,$sp_id);
        return $sql->execute(); //return an object
    }
    public function checkWish($user_name, $sp_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `wishlist` WHERE `user_name` = ? AND `sp_id` = ?");
        $sql->bind_param("si",$user_name, $sp_id);
        $sql->execute();
        //$items = array();
        $items = $sql->get_result()->num_rows;
        if ($items == 1){
           return true;
       }
       else {
           return false;
       }
    }
    public function getwishlist($user_name){
        $sql =self::$connection->prepare("SELECT * FROM wishlist 
        INNER JOIN products on wishlist.sp_id=products.id
        WHERE wishlist.user_name = ?");
        $sql->bind_param("s",$user_name);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function delWish($wish_id)
    {
        $sql = self::$connection->prepare("DELETE FROM `wishlist` WHERE `wish_id` = ?");
        $sql->bind_param("i", $wish_id);
        return $sql->execute(); //return an object
    }
}