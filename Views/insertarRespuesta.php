<?php
include_once("conexionBD/conexion.php");
$boton=isset($_POST["enviarRespuesta"])?$_POST["enviarRespuesta"]:null;
$conexion= new Conexion();
$mensaje="";
if(!(is_null($boton))){
    $idUsuario=$_SESSION['id'];
    $texto=$_POST['texto'];
    $idPregunta=$_POST['idPregunta'];
    $mensaje=$conexion->insertarRespuesta($idPregunta,$idUsuario,$texto);


}