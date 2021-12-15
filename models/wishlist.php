<?php
class Wishlist extends Db{
    public function addwish($user_name,$sp_id){
        $sql=self::$connection->prepare("INSERT INTO 'wishlist'('user_name','sp_id') VALUES ('?,?')");
        $sql->bind_param("si",$user_name,$sp_id);
        return $sql->execute();
    }
    public function checkWish($user_name,$sp_id){
        $sql=self::$connection->prepare("SELECT * FROM wishlist WHERE 'user_name' =? and 'sp_id'= ?");
        $sql->bind_param("si",$user_name,$sp_id);
        $sql->execute();
        $item = $sql->get_result()->num_rows;
        if($item==1){
            return true;
        }
        else{
            return false;
        }
    }
    public function getwishlist($user_name){
        $sql =self::$connection->prepare("SELECT * FROM wishlist 
        INNER JOIN products on wishlist.sp_id=products.id
        INNER JOIN user ON wishlist.user_name=user.user_name
        WHERE wishlist.user_name = ?");
        $sql->bind_param("s",$user_name);
        $sql->execute();
    }
}