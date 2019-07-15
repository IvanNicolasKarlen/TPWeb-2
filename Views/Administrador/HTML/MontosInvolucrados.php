<?php


$ConsultaGeneral = "SELECT * 
					FROM transaccion as trans
					inner join usuario as user on trans.idUsuario = user.id limit 9";
$ConsultaUsuario = $conexion->realizarConsulta($ConsultaGeneral);

$ConsultaGeneral = "SELECT * 
					FROM transaccion as trans
					inner join usuario as user on trans.idUsuario = user.id";
$ConsultaTodosLosUsuario = $conexion->realizarConsulta($ConsultaGeneral);



?>