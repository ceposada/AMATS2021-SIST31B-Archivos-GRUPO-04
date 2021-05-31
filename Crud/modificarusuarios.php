

<?php

require_once("cn.php");





if(isset($_POST["ok"])){  //si presionamos el boton para insertar
	$Nombres=$_POST["NOMBRES"];
	$Apellidos=$_POST["APELLIDOS"];
	$usuario=$_POST["NOMBREUSUARIO"];
	$edad=$_POST["EDAD"];
	$sexo=$_POST["SEXO"];
	$contraseña=$_POST["CONTRASEÑA"];
	$sqlinsert="
	update usuario set 
	  
	  NOMBRES='$Nombres',
	  APELLIDOS='$Apellidos',
	  NOMBREUSUARIO='$usuario',
	  EDAD='$edad',
	  SEXO='$sexo',
	  CONTRASEÑA='$contraseña'

	  
	where IDUSUARIO='".$_GET["IDUSUARIO"]."'
	  ";
	
	$rs=$conn->query($sqlinsert);
	echo "<script>alert('Dato modificado');window.location='?pag=usuarios.php';	</script>";
	
}elseif(isset($_POST["okeliminar"])){
	$eliminar=$_POST["eliminar"];
	foreach($eliminar as $IDUSUARIO){
		$sqleliminar="DELETE
						FROM
						  usuario
						WHERE IDUSUARIO = '$IDUSUARIO';";
		$rs=$conn->query($sqleliminar);
		
	}
	
}



$sql="select * from usuario where IDUSUARIO='".$_GET["IDUSUARIO"]."'";
	$rs=$conn->query($sql);
	$fila=$rs->fetch_assoc();	
		
?>

<div class="col-sm-8">
      <h2>MODIFICAR USUARIOS</h2>
      <h5>fecha, <?php echo date("d-m-Y");?></h5>     
      <form method="post">
		
      <div class="form-group">
    	<label for="NOMBRES">Nombre de usuario</label>
    	
    	<input type="text" class="form-control" name="NOMBRES" placeholder="Digite el nombre del usuario" id="NOMBRES" value="<?php echo $fila["NOMBRES"];?>">
  	  </div>
      	
      <div class="form-group">
    	<label for="APELLIDOS">Apellidos de usuario</label>
    	<input type="text" class="form-control" name="APELLIDOS" placeholder="Digite el apellido del usuario" id="APELLIDOS" value="<?php echo $fila["APELLIDOS"];?>">
  	  </div>
  	  <div class="form-group">
    	<label for="NOMBREUSUARIO">Usuario</label>
    	<input type="text" class="form-control" name="NOMBREUSUARIO" placeholder="Digite el usuario" id="NOMBREUSUARIO" value="<?php echo $fila["NOMBREUSUARIO"];?>">
  	  </div>
  	  <div class="form-group">
    	<label for="EDAD">Edad</label>
    	<input type="number" class="form-control" name="EDAD" placeholder="Digite la edad" id="EDAD" value="<?php echo $fila["EDAD"];?>">
  	  </div>
  	  <div class="form-group">
    	<label for="SEXO">Sexo</label>
    	<input type="text" class="form-control" name="SEXO" placeholder="Digite el sexo" id="SEXO" value="<?php echo $fila["SEXO"];?>">
  	  </div>
  	  <div class="form-group">
    	<label for="CONTRASEÑA">Contraseña</label>
    	<input type="text" class="form-control" name="CONTRASEÑA" placeholder="Digite la contraseña" id="CONTRASEÑA" value="<?php echo $fila["CONTRASEÑA"];?>">
  	  </div>  	  
      	
      	<input type="submit" name="ok"  class="btn btn-primary" value="Guardar registro">
      	
      </form>
     
     
     <br>
     
	
      
    </div>



