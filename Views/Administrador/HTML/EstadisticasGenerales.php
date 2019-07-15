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

//Cantidad de comentarios hechos
$ConsultaCompras = "SELECT * FROM valoracion";
$ConsultaProductos = $conexion->realizarConsulta($ConsultaCompras);
$Comentarios = $conexion->cantidadDeFilas($ConsultaProductos);


//Cantidad de compras hechos
$ConsultaCompras = "SELECT * FROM compra";
$ConsultaProductos = $conexion->realizarConsulta($ConsultaCompras);
$Compras = $conexion->cantidadDeFilas($ConsultaProductos);

//Cantidad de ingresos
$ConsultaCompras = "SELECT * FROM transaccion";
$ConsultaProductos = $conexion->realizarConsulta($ConsultaCompras);
$transaccion = $conexion->cantidadDeFilas($ConsultaProductos);



//Comentarios publicos
$ConsultaCompras = "SELECT *
					FROM valoracion as val
					inner join usuario as user on val.idUsuario = user.id limit 3";
$ComentariosPublicos = $conexion->realizarConsulta($ConsultaCompras);


//Comentarios Generales
$ConsultaCompras = "SELECT *
					FROM valoracion as val
					inner join usuario as user on val.idUsuario = user.id";
$ComentariosGenerales = $conexion->realizarConsulta($ConsultaCompras);

?>


