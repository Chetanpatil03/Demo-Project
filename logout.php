<?php 
    include("connection.php");
    include("function.php");
    session_start();

    if (isset($_SESSION['id']))
    {
        unset($_SESSION['id']);
    }
    header("location: login.php");
    die;
?>