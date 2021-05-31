<?php
//ahora
date_default_timezone_set("America/El_Salvador");
define("SERVIDOR","localhost");
define("USUARIO","root");
define("CLAVE","");
define("BASEDATOS","tienda_online");
class clsConexion{
	private $conn;
	public function __construct(){
		try{
			$this->conn=new mysqli(SERVIDOR,USUARIO,CLAVE,BASEDATOS);
		}catch(Exception $e){
			echo $e->errorMessage();
		}
	}
	
	public function consultaGeneral($tabla,$campos){
		$sql="select $campos from $tabla  ";
		$respuesta=$this->conn->query($sql);
		return $respuesta;
	}
	
	public function insertarSQL($tabla,$cam,$val){
		$campos=implode(",",$cam);
		$valores="'".implode("','",$val)."'";
		$sql="INSERT INTO $tabla ($campos)VALUES ($valores)";
		$respuesta=$this->conn->query($sql);
		return 1;
	}
	
	public function eliminarSQL($tabla,$condicion){
		$sql="delete from $tabla where $condicion ";
		$respuesta=$this->conn->query($sql);
		return 1;
	}
	
} 

?>