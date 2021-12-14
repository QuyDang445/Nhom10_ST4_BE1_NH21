<?php
    session_start();
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
        session_unset();
    }   
    header('location: index.php');                   
?>