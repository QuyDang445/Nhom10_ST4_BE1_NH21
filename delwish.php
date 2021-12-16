<?php
require "config.php";
require "models/db.php";
require "models/wishlist.php";
$wishlist = new Wishlist;
if(isset($_GET['id'])){
    $wishlist->delWish($_GET['id']);
    header('location: wishlist.php');
}
?>