<?php
require "config.php";
require "models/db.php";
require "models/product.php";
$product = new Product;
require "models/manufactures.php";
require "models/protype.php";
$protype = new Protype;
if(isset($_POST['submit'])){
    if(isset($_GET['id'])){
        $name = $_POST['name'];
        $manu_id = $_POST['manu'];
        $type_id = $_POST['type'];
        $price = $_POST['price'];
        $desc =  $_POST['desc'];
        $image = $_FILES['image']['name'];
        $fea = $_POST['feature'];
        $crat = $_POST['Created_at'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_name = $_FILES['image']['name'];
        if($product->editProduct($name,$image,$price,$manu_id,$type_id,$desc,$fea,$crat,$_GET['id'])){
            echo "Sua thanh cong";
        }
        else{
            echo "Sua khong duoc";
        }
        $target_dir = "../img/";
        move_uploaded_file($file_tmp, $target_dir.$file_name);
    }
    //header('Location: products.php');
}