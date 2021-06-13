<?php 
require_once("cnn.php");
$obj = new clsConexion(); 

if (isset($_POST["enviar"])) 
{
      $datos[] = $_POST["usuario"];
      $datos[] = $_POST["nombres"];
      $datos[] = $_POST["apellidos"];
      $datos[] = $obj -> encriptar_desencriptar("encriptar", $_POST["passwrd"]);
      $datos[] = $_POST["edad"];
      $datos[] = $_POST["sexo"];
      $datos[] = "user";

  $campos = array('usuario', 'nombres', 'apellidos', 'passwrd', 'edad', 'sexo', 'cargo');
  $obj -> insertarSQL('usuario', $campos, $datos);
} 


?>

 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="cssinicio.css">
</head>
<body background="imagenes/neon.png">
   <form method="post" action="index1.php">
     <h1>Sistema de login</h1>
     <label>Usuario</label> <input type="text" placeholder="ingrese su nombre" name="usuario">
     <label>Nombres</label><input type="text" placeholder="Ingrese sus nombres" name="nombres">
     <label>Apellidos</label><input type="text" placeholder="Ingrese sus apellidos" name="apellidos">
     <label>Contraseña</label> <input type="password" placeholder="ingrese su contraseña" name="contraseña">
     <label>Edad</label><input type="numb" placeholder="Ingrese su edad" name="edad">
     <label>Sexo</label> <select name="sexo"> <option value="m">Masculino</option> <option value="f">Femenino</option></select>
    

     <input type="submit" name="enviar">
   
  </form> 
</body>
</html>
