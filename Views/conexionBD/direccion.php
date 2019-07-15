<?php


class Direccion
{



    public function carpRaiz($pag)
    {
        return "location:$pag.php";
    }
    public function errorLogin($error){
        return "location:login.php?error=$error";
    }
	public function errorAgregarCarrito($error)
	{
		return "location:detallesProducto.php?error=$error";
	}
	public function errorProductoRepetido($error)
	{
		return "location:CarritoDetalles.php?error=$error";
	}
	    public function index($msj){
        return "location:index.php?info=$msj";
    }
	
	
}
