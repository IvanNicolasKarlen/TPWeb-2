<?php
session_start();
include_once("conexionBD/conexion.php");
$boton=isset($_POST["enviarPregunta"])?$_POST["enviarPregunta"]:null;
$conexion= new Conexion();
$mensaje="";
if(!(is_null($boton))){
    $idComprador=$_SESSION['id'];
    $idVendedor=$_POST['idVendedor'];
    $idProducto=$_POST['idProducto'];
    $texto=$_POST['texto'];
    $mensaje=$conexion->insertarPregunta($idComprador,$idVendedor,$idProducto,$texto);
    $productoBuscado = $conexion->buscarProducto($idProducto);
	while($productoB=$productoBuscado->fetch_assoc()){
		$nombreProducto = $productoB['nombre'];
		$categoriaProducto = $productoB['categoria'];
	}
  
	header("location:detallesProducto.php?detalles=&Productoid=$idProducto&ProductoNombre=$nombreProducto&Categoria=$categoriaProducto");
	exit();
}

?>