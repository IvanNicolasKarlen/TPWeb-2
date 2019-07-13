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
	 
	 
	
	 public function realizarConsulta($consulta){
 if(!$resultado = $this->msq->query($consulta) )
 {
	 echo "Ha ocurrido un error al ejecutar la consulta   ";
 }else{
	 
	 return $resultado; //muestra las filas afectadas


	   }
 }

	 
		 public function controlLogin($email,$password){
		$consulta=$this->msq->prepare("SELECT email,password,rol,Nombre,id FROM usuario WHERE email=? AND password=?");
		$consulta->bind_param("ss",$email,$password);
		$consulta->execute();
		$consulta->store_result();
		$em="";
		$pass="";
		$rol="";
		$nom="";
		$id="";
		$consulta->bind_result($em,$pass,$rol,$nom,$id); //asignamos la variable donde guardar
			 // el resultado
	    	$consulta->fetch();//los trae y guarda en la variable asignada arriba
		// guardo los resultados en un array
		$array=array(
				"rol" => $rol,
				"nom" =>$nom,
				"id" =>$id
					);
				 return $array;
			 }
	 public function controlRegistrar($email){
		$consulta=$this->msq->prepare("SELECT email FROM usuario WHERE email=?");
		$consulta->bind_param("s",$email);
		$consulta->execute();
		$consulta->store_result();
		$em="";
		$consulta->bind_result($em); //asignamos la variable donde guardar el resultado
		$consulta->num_rows();
		return $consulta->fetch(); //los trae y guarda en la variable asignada arriba ($id)
		
	 }

	  public function cantidadDeFilas($resultado)
	 {
		 return $resultado->num_rows;
		 
	 }

	public function consultarIdUser($idP){
	$consulta=$this->msq->prepare("SELECT idUsuario FROM Producto WHERE id=?");
	$consulta->bind_param("i",$idP);
	$consulta->execute();
	$consulta->store_result();
	$user="";
	$consulta->bind_result($user);
	$consulta->fetch();
	return $user;
}
	public function consultarTipoUser($user){
		$consulta2=$this->msq->prepare("SELECT tipo FROM tipoUser WHERE id=?");
		$consulta2->bind_param("i",$user);
		$consulta2->execute();
		$consulta2->store_result();
		$tipo="";
		$consulta2->bind_result($tipo);
		$consulta2->fetch();
		return $tipo;
	}

	public function traerValoraciones($idU){
		$consulta=$this->msq->prepare("SELECT id, comentario, puntaje, idUsuario FROM valoracion WHERE idVendedor=?");
		$consulta->bind_param("i",$idU);
		$consulta->execute();
		/* $consulta->store_result();
		 $comentario="";$puntaje="";$idusuario="";$id="";
		$consulta->bind_result($id,$comentario,$puntaje,$idusuario);
		$consulta->fetch();
		 $array=array(
			"id" => $id,
			"comentario" => $comentario,
			"puntaje" =>$puntaje,
			"idUsuario" =>$idusuario
		); */
		$r = $consulta->get_result();
		return $r;
	}
	public function traerUsuarioQueValora($idUser){
		$consulta=$this->msq->prepare("SELECT nombre FROM usuario WHERE id=?");
		$consulta->bind_param("i",$idUser);
		$consulta->execute();
		$nombreu="";
		$consulta->bind_result($nombreu);
		$consulta->fetch();
		return $nombreu;

	}

	
}


?>	
