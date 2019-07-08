<?php

$usuario = "usuario";
$producto = "producto";

$ConsultaUsuarios = "SELECT * FROM usuario limit 10";
$ConsultaProducto = "SELECT * FROM producto";

$ConsultaUsuario = $conexion->realizarConsulta($ConsultaUsuarios);
$Usuario = $conexion->cantidadDeFilas($ConsultaUsuario);



 

$ConsultaProductos = $conexion->realizarConsulta($ConsultaProducto);
$Producto = $conexion->cantidadDeFilas($ConsultaProductos);

?>


