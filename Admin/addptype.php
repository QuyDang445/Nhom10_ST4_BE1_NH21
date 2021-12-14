<?php
require "config.php";
require "models/db.php";
require "models/protype.php";
$protype = new Protype;

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    if($protype->addProType($name)==true){
        echo "đã thêm thành công ";
    }else{
        echo "thất bại";
    }
}