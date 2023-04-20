<?php
session_start();

if (isset($_SESSION['xRttpHo0greL39'])){

    $_SESSION['xRttpHo0greL39'] = array();

    session_destroy();

    header("Location: ../Acceuil.php");
}else{
    session_destroy();

    header("Location: ../Acceuil.php");
}

?>