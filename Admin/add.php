<?php
require "config.php";
require "models/db.php";
require "models/product.php";
$product = new Product;
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $manu_id = $_POST['manuid'];
    $type_id = $_POST['typeid'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $desc = $_POST['desc'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_name = $_FILES['image']['name'];
    if($product->addProduct($name, $manu_id, $type_id, $price, $image, $desc)==true){
        echo "đã thêm thành công ";
    }else{
        echo "thất bại";
    }
    $target_dir = "../img/";
    move_uploaded_file($file_tmp, $target_dir.$file_name);
}