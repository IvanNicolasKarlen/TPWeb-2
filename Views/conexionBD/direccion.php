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
}