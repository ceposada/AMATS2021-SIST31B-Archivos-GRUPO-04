<?php
$servidor="localhost";
$usuario="root";
$clave="";
$basedeDatos="tienda_online";
@$conn=new mysqli($servidor,$usuario,$clave,$basedeDatos);
if($conn->connect_error){
	die("Error reportar al administrador ");
}


?>



