<?php
require "config.php";
require "models/db.php";
require "models/accuount1.php";
$account1 = new Account1;

if(isset($_POST['submit2'])){
    $user_name = $_POST['username2'];
    if($account1->addAccount1($user_name)==true){
        echo "Đăng ký thành công";
    }else{
        echo "Đăng ký thất bại";
    }
    header('Location: login1.php');
}