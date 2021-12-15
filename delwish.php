<?php
require "config.php";
require "models/db.php"
require "models/wislist.php";
$wislist = new Wislist;
if(isset($_GET['id'])){
    $wislist->delWish($_GET['id']);
    header('location: wishlist.php')
}
?>