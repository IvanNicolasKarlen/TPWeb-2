<?php
include_once("verificacionSesion.php");
include_once("conexionBD/conexion.php");
include_once("conexionBD/direccion.php");
$idUsuario=$_SESSION['id'];
$idVendedor=$_POST['idVendedor'];
$comentario=$_POST['comentario'];
$puntaje=$_POST['puntaje'];

$conexion = new Conexion();
$mensaje=$conexion->insertarValoracion($idUsuario,$idVendedor,$comentario,$puntaje);

$loc = new Direccion();
header($loc->index($mensaje));
exit();
?>

