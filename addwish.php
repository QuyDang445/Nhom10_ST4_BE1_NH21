<?php
session_start();
?>
<?php
require "config.php";
require "models/db.php";
//require "models/product.php";
require "models/wishlist.php";
//$product =new Product();
$wishlist =new Wishlist;
?>
<?php
    if(isset ($_SESSION['username1'])){
        $user_name = $_SESSION['username1'];
        $sp_id = $_GET['id'];
        var_dump($user_name,$sp_id);
        if ($wishlist -> checkWish($user_name, $sp_id)){
            echo '<script language="javascript">alert("Sản phần này đã nằm trong mục yêu thích!"); window.location="index.php";</script>';
        }else{
            $addwish = $wishlist -> addWish($user_name, $sp_id);
            header ("Location: wishlist.php");
        }
    }
    else{
        header ("Location: wishlist.php");
    }
    ?>
