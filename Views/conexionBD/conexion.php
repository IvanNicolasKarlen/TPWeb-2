<?php



class Conexion{

	private $host = "";
	private $usuario = "";
	private $clave="";
	private $bd = "";
	 private $msq="";


	public function __construct()
	 {
		 $archivoConfig = "config.ini"; //PARA CAMBIAR LOS DATOS DE ACCESO A LA BD, IR AHI
		 $confi = parse_ini_file($archivoConfig, true);
		 
		 $this->host = $confi["bd"]["host"];
		 $this->usuario = $confi["bd"]["usuario"];
		 $this->clave=$confi["bd"]["clave"];
		 $this->bd = $confi["bd"]["bd"];
		$this->msq = new mysqli($this->host, $this->usuario, $this->clave, $this->bd);  
	
	 }
	 
	 
	
	 public function loguearUsuario($consulta){
 if(!$resultado = $this->msq->query($consulta) )
 {
	 echo "Ha ocurrido un error al ejecutar la consulta   ";
 }else{
	 
	 return $resultado; //muestra las filas afectadas
	 //return $this->msq->query($consulta);

	   }
 }
	 
	 
	 

	
}


?>	