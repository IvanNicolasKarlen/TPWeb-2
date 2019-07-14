<?php

$usuario = "usuario";
$producto = "producto";

$ConsultaUsuarios = "SELECT * FROM usuario limit 9";
$ConsultaProducto = "SELECT * FROM producto";

$ConsultaUsuario = $conexion->realizarConsulta($ConsultaUsuarios);
$Usuario = $conexion->cantidadDeFilas($ConsultaUsuario);

$Consultausuarios = "SELECT * FROM usuario limit 1";
$Consultausuario = $conexion->realizarConsulta($Consultausuarios);

$ConsultaProductos = $conexion->realizarConsulta($ConsultaProducto);
$Producto = $conexion->cantidadDeFilas($ConsultaProductos);

$ConsultaCompras = "SELECT * FROM compra";
$ConsultaProductos = $conexion->realizarConsulta($ConsultaCompras);
$Compras = $conexion->cantidadDeFilas($ConsultaProductos);

?>


