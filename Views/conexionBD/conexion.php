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
	 //return $this->msq->query($consulta);

	   }
 }

	public function buscarUser($email){
			/*Preparamos la consulta. El "(?)" es donde queremos poner nuestro parametro*/
		$consultaID=$this->msq->prepare("SELECT id FROM usuario WHERE email=(?)");
			/*Definimos los parametros, la "s" es por String y el $email Es lo q va a
			reemplazarse en "(?)"*/
		$consultaID->bind_param("s",$email);
			/*ejecutamos la consulta*/
		$consultaID->execute();
			/*decimos q nos traiga los resultados de la ultima consulta*/
		$consultaID->store_result();
		$id=""; //variable pa guardar los resultados
		$consultaID->bind_result($id); //asignamos la variable donde guardar el resultado
		$consultaID->fetch(); //los trae y guarda en la variable asignada arriba ($id)
		return $id; //retornamos

	}
	 
	 public function controlLogin($email,$password){
		$consulta=$this->msq->prepare("SELECT email,password FROM usuario WHERE email=? AND password=?");
		$consulta->bind_param("ss",$email,$password);
		$consulta->execute();
		$consulta->store_result();
		$em="";
		$pass="";
		$consulta->bind_result($em,$pass); //asignamos la variable donde guardar el resultado
		$consulta->num_rows();
		return $consulta->fetch(); //los trae y guarda en la variable asignada arriba ($id)
		
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

	
}


?>	