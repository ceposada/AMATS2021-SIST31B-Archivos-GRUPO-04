<?php
//ahora
date_default_timezone_set("America/El_Salvador");
define("SERVIDOR","localhost");
define("USUARIO","root");
define("CLAVE","");
define("BASEDATOS","inicio_sesion");

class clsConexion
{
	private $conn;
	public function __construct()
	{
		try
		{
			$this->conn=new mysqli(SERVIDOR,USUARIO,CLAVE,BASEDATOS);
		}
		catch(Exception $e)
		{
			echo $e->errorMessage();
		}
	}
	
	public function consulta($tabla, $campos, $condicion = null)
	{	
		$condicionB = "";

		if (!(is_null($condicion))) 
		{
			$condicionB = " where $condicion ";
		}

		$sql = "select $campos from $tabla $condicionB";
		$respuesta = $this->conn->query($sql);

		return $respuesta;
	}
	
	public function insertarSQL($tabla, $cam, $val)
	{
		$campos = implode(",",$cam);
		$valores = "'".implode("','",$val)."'";

		$sql = "INSERT INTO $tabla ($campos)VALUES ($valores)";
		$respuesta = $this->conn->query($sql);

		return 1;
	}
	
	public function eliminarSQL($tabla, $condicion)
	{
		$sql="delete from $tabla where $condicion ";
		$respuesta=$this->conn->query($sql);
		
		return 1;
	}
	
	public function encriptar_desencriptar($action, $string)
	{
		$output = false;
		$encriptar_metodo = "AES-256-CBC";
		$keyword = "karmicava";
		$iv='EASFfgIjas65d4165ass/*as1==*/';
		$key = hash('sha256', $keyword);
		$key_iv = substr(hash('sha256', $iv), 0, 16);

		if ($action == "encriptar") 
		{
			$salida = openssl_encrypt($string, $encriptar_metodo, $key, 0, $key_iv);
			$salida = base64_encode($salida);

		}
		elseif ($action == "desencriptar") 
		{
			$salida = openssl_decrypt(base64_decode($string), $encriptar_metodo, $key, 0, $key_iv);
		}

		return $salida;

	}
} 

?>