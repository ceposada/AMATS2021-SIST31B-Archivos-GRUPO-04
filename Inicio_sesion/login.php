<?php 
/* Esto se debe poner en cada página para que no se metan desde la URL
<?php 

  @session_start();

  if (!(isset($_SESSION["admin"]))) 
  {
    header("location:login.php");
  }

 ?>
*/
/*echo $variable = $obj -> encriptar_desencriptar("encriptar", "");
echo "<br>";
echo $obj -> encriptar_desencriptar("desencriptar", $variable);*/

@session_start();

require_once("cnn.php");
$obj = new clsConexion(); 




if (@$_SESSION["intentos"] > 3)
	{
		header("location: numero_intentos.php");
	}

if (isset($_POST["enviar"])) 
{
	$passwrd = $obj -> encriptar_desencriptar("encriptar", $_POST["passwrd"]);
	$usuario = $_POST["usuario"];

	$rs = $obj -> consulta("usuario", "*" ,"usuario = '$usuario' AND passwrd = '$passwrd'");
	$fila = $rs -> fetch_assoc();
	$total = $rs -> num_rows;

	if ($total < 1) 
	{	
		if (isset($_SESSION["intentos"])) 
		{
			$_SESSION["intentos"]++;
		}
		else
		{
			$_SESSION["intentos"] = 1;
		}

		echo "Verificar los datos";
		
	}
	else
	{	
		
		if ($fila["cargo"] == "admin") 
		{	
			$_SESSION["admin"] = "ok";
			header("location:index1.php");	
		}
		elseif ($fila["cargo"] == "user")
		{

			header("location:numero_intentos.php");	
		}
	}

	
}




?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="cssinicio.css">
</head>
<body background="imagenes/neon.png">
	<form method="post">
		 <h1>Sistema de login</h1>

		<label>Usuario</label><input type="text" name="usuario" required="" placeholder="Ingrese su nombre de usuario"><br>

		<label>Contraseña</label><input type="password" name="passwrd" required="" placeholder="Ingrese su contraseña"><br>

		<input type="submit" name="enviar"> <!--<a href="borrar.php">Borrar</a> -->
		<a href="registro.php"><input type="button" value="Registrarse"></a>

	</form>
</body>


	  

	   
   
 

