<?php
require "config.php";
require "models/db.php";
require "models/manufactures.php";
$manu = new Manufactures;

if(isset($_GET['manu_id'])){
    $manu->delManufactures($_GET['manu_id']);
}
header('location:manufacturess.php');