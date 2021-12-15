<?php
require "config.php";
require "models/db.php";
require "models/manufactures.php";
$manu = new Manufactures;

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    if($manu->addManu($name)==true){
        echo "đã thêm thành công ";
    }else{
        echo "thất bại";
    }
    header( 'location: manufacturess.php');
}