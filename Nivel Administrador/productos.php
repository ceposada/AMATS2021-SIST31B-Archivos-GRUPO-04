<?php
require_once("cnn.php");
$obj=new clsConexion();
if(isset($_POST["ok"])){  //si presionamos el boton para insertar
	$nuevosDatos[]=$_POST["NOMBREPRODUCTO"];
	$nuevosDatos[]=$_POST["TALLA"];
	$nuevosDatos[]=$_POST["CANTIDAD"];
	$nuevosDatos[]=$_POST["PRECIO"];
  	$nuevosDatos[] = $_FILES["IMG_PRODUCT"]["name"];
  	$tempimg = $_FILES["IMG_PRODUCT"]["tmp_name"];
  	$folder = "img/".$nuevosDatos[4];
	$campos=array("NOMBREPRODUCTO","TALLA","CANTIDAD","PRECIO","IMG_PRODUCT");
	$obj->insertarSQL("productos",$campos,$nuevosDatos);

	move_uploaded_file($tempimg, $folder);

}elseif(isset($_POST["okeliminar"])){
	$eliminar=$_POST["eliminar"];
	foreach($eliminar as $IDPRODUCTO){
		$rs=$obj->eliminarSQL("PRODUCTOS"," IDPRODUCTO = '$IDPRODUCTO'");
	}
}

?>
<div class="col-sm-8">
      <h2>PRODUCTOS</h2>
      <h5>fecha, <?php echo date("d-m-Y");?></h5>
      <form method="post" enctype="multipart/form-data">
      <div class="form-group">
    	<label for="NOMBREPRODUCTO">Nombre del producto</label>
    	<input type="text" class="form-control" name="NOMBREPRODUCTO" placeholder="Digite el nombre del producto" id="NOMBREPRODUCTO">
  	  </div>
      	
      <div class="form-group">
    	<label for="TALLA">Talla del Producto</label>
    	<input type="text" class="form-control" name="TALLA" placeholder="Digite la talla del producto" id="TALLA">
  	  <div class="form-group">
    	<label for="CANTIDAD">Cantidad</label>
    	<input type="number" class="form-control" name="CANTIDAD" placeholder="Digite la cantidad de productos existentes" id="CANTIDAD">
  	  <div class="form-group">
    	<label for="PRECIO">Precio</label>
    	<input type="text" class="form-control" name="PRECIO" placeholder="Digite el precio del producto" id="PRECIO">  
    	<div class="form-group">
    	<label for="IMG_PRODUCT">Imagen del producto</label>
    	<input type="file" class="form-control" name="IMG_PRODUCT" placeholder="Escoja la imagen" id="IMG_PRODUCT" value="<?php echo $fila["IMG_PRODUCT"];?>">
  	  </div>	
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
		<th>Producto</th>	
		<th>Talla</th>
		<th>Cantidad</th>
		<th>Precio</th>		
		<th>&nbsp;</th>
		<th>Imagen</th>
	</tr></thead>
	<?php
	$rs=$obj->consultaGeneral("productos","*");
	while($fila=$rs->fetch_assoc()){
		echo "<tr>";
		echo "<td><input type=checkbox name=eliminar[] value='$fila[IDPRODUCTO]'></td>";
		echo "<td>$fila[IDPRODUCTO]</td>";
		echo "<td>$fila[NOMBREPRODUCTO]</td>";
		echo "<td>$fila[TALLA]</td>";
		echo "<td>$fila[CANTIDAD]</td>";
		echo "<td>$fila[PRECIO]$</td>";
		echo "<td><a class='btn btn-warning' href='?pag=modificarproductos.php&IDPRODUCTO=$fila[IDPRODUCTO]'>Modificar</a></td>";
		echo "<td><img src= 'img/$fila[IMG_PRODUCT]' height='75px' width='150px'></td>";

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