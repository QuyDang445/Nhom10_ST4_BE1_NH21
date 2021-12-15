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
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_dir.$file_name,PATHINFO_EXTENSION));
}
  // Check if file already exists
  if (file_exists($target_dir.$file_name)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  
  // Check file size
  if ($_FILES["image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($file_tmp, $target_dir.$file_name)) {
      echo "The file ". htmlspecialchars( basename($file_name)). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
    header( 'location: products.php');
}
?>