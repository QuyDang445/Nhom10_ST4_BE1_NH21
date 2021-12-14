<?php
require "config.php";
require "models/db.php";
require "models/manufactures.php";
$manu = new Manufactures;

if (isset($_POST['submit'])) {
    if (isset($_GET['id'])) {
        $name = $_POST['name'];
        if ($manu->editManu($name, $_GET['id']) == true) {
            echo "Đã sửa thành công";
        } else {
            echo "thất bại";
        }
    }
    header('location: manufacturess.php');            

}
