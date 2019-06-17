<?php
session_start();

$usuario = $_SESSION['username'];
$id = $_SESSION['id'];
if(!isset($usuario)) {
    header("location:login.php");
}
    ?>