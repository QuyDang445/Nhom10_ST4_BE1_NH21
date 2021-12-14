<?php
require "config.php";
require "models/db.php";
require "models/protype.php";
$protype = new Protype;

if (isset($_POST['submit'])) {
    if (isset($_GET['id'])) {
        $name = $_POST['name'];
        if ($protype->editProType($name, $_GET['id']) == true) {
            echo "Đã sửa thành công";
        } else {
            echo "thất bại";
        }
    }
}
header('location: protypes.php');            
