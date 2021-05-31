<?php
require_once("cnn.php");
$obj=new clsConexion();
if(isset($_POST["ok"])){  //si presionamos el boton para insertar
	$nuevosDatos[]=$_POST["Nombres"];
	$nuevosDatos[]=$_POST["Apellidos"];
	$nuevosDatos[]=$_POST["NOMBREUSUARIO"];
	$nuevosDatos[]=$_POST["EDAD"];
	$nuevosDatos[]=$_POST["SEXO"];
	$nuevosDatos[]=$_POST["CONTRASEÑA"];
	$campos=array("Nombres","Apellidos","NOMBREUSUARIO","EDAD","SEXO","CONTRASEÑA");
	$obj->insertarSQL("usuario",$campos,$nuevosDatos);
}elseif(isset($_POST["okeliminar"])){
	$eliminar=$_POST["eliminar"];
	foreach($eliminar as $IDUSUARIO){
		$rs=$obj->eliminarSQL("usuario"," IDUSUARIO = '$IDUSUARIO'");
	}
}

?>
<div class="col-sm-8">
      <h2>USUARIOS</h2>
      <h5>fecha, <?php echo date("d-m-Y");?></h5>
      <form method="post">
      <div class="form-group">
    	<label for="Nombres">Nombres del usuario</label>
    	<input type="text" class="form-control" name="Nombres" placeholder="Digite el nombre del usuario" id="Nombres">
  	  </div>
      	
      <div class="form-group">
    	<label for="Apellidos">Apellidos del usuario</label>
    	<input type="text" class="form-control" name="Apellidos" placeholder="Digite los apellidos del usuario" id="Apellidos">
  	  </div>
  	  <div class="form-group">
    	<label for="usuario">Usuario</label>
    	<input type="text" class="form-control" name="NOMBREUSUARIO" placeholder="Digite el usuario" id="NOMBREUSUARIO">
  	  </div>
  	  <div class="form-group">
    	<label for="edad">Edad</label>
    	<input type="number" class="form-control" name="EDAD" placeholder="Ingrese su edad" id="EDAD">
    	<div class="form-group">
    	<label for="sexo">Sexo</label>
    	<input type="text" class="form-control" name="SEXO" placeholder="Escoja su sexo" id="SEXO">
    	<div class="form-group">
    	<label for="contraseña">Contraseña</label>
    	<input type="password" class="form-control" name="CONTRASEÑA" placeholder="Digite su contraseña" id="CONTRASEÑA">
  	  </div>
  	  </div>
  	  </div>
      	<input type="submit" name="ok"  class="btn btn-primary" value="Guardar registro">  	
      </form>
     <br>
     <form method="post">
      <table class="table table-dark table-hover">
		<thead>
		<tr>
		<th>&nbsp;</th>
		<th>ID</th>
		<th>Usuario</th>	
		<th>Apellidos</th>
		<th>Usuario</th>
		<th>Edad</th>
		<th>Sexo</th>
		<th>Contraseña</th>
		<th>&nbsp;</th>
	</tr></thead>
	<?php
	$rs=$obj->consultaGeneral("usuario","*");
	while($fila=$rs->fetch_assoc()){
		echo "<tr>";
		echo "<td><input type=checkbox name=eliminar[] value='$fila[IDUSUARIO]'></td>";
		echo "<td>$fila[IDUSUARIO]</td>";
		echo "<td>$fila[NOMBRES]</td>";
		echo "<td>$fila[APELLIDOS]</td>";
		echo "<td>$fila[NOMBREUSUARIO]</td>";
		echo "<td>$fila[EDAD]</td>";
		echo "<td>$fila[SEXO]</td>";
		echo "<td>$fila[CONTRASEÑA]</td>";
		echo "<td><a class='btn btn-warning' href='?pag=modificarusuarios.php&IDUSUARIO=$fila[IDUSUARIO]'>Modificar</a></td>";
		echo "</tr>";
	}
	?>
	<tr>
		<td colspan="4" align="center"	>
		<input class="btn btn-danger"  type="submit" name="okeliminar" value="Eliminar"/></td>
	</tr>
</table>
</form>
</div>



