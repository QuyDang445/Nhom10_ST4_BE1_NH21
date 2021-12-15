<?php
    session_start();
    require "../config.php";
    require "../models/db.php";
    require "../models/user.php";
    if (isset($_SESSION['username'])) {
        unset($_SESSION['username']);
        session_unset();
    }   
    header('location: index.php');                   
?>