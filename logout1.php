<?php
    session_start();
    require "config.php";
    require "models/db.php";
    require "models/user.php";
    if (isset($_SESSION['username1'])) {
        unset($_SESSION['username1']);
        session_unset();
    }   
    header('location: index.php');                   
?>