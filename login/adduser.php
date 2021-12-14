<?php
require "../Admin/config.php";
require "../Admin/models/db.php";
require "../Admin/models/account.php";
$account = new Account;

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role_id = $_POST['roleid'];
    if($account->addAccount($username,$password,$role_id)==true){
        echo "Đăng ký thành công";
    }else{
        echo "Đăng ký thất bại";
    }
    header('Location: index.php');
}
