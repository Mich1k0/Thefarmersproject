<?php
    session_start();
    if(!isset($_SESSION["root"])) {
        header("Location: login.php");
        exit();
    }
?>