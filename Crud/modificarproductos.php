<?php

require_once("cn.php");





if(isset($_POST["ok"])){  //si presionamos el boton para insertar
	$Nombre=$_POST["NOMBREPRODUCTO"];
	$talla=$_POST["TALLA"];
	$cantidad=$_POST["CANTIDAD"];
	$precio=$_POST["PRECIO"];
	
	$sqlinsert="
	update productos set 
	  
	  NOMBREPRODUCTO='$Nombre',
	  TALLA='$talla',
	  CANTIDAD='$cantidad',
	  PRECIO='$precio'
	  
	where IDPRODUCTO='".$_GET["IDPRODUCTO"]."'
	    
	 
	";
	
	$rs=$conn->query($sqlinsert);
	echo "<script>alert('Dato modificado');window.location='?pag=productos.php';	</script>";
	
}elseif(isset($_POST["okeliminar"])){
	$eliminar=$_POST["eliminar"];
	foreach($eliminar as $IDPRODUCTO){
		$sqleliminar="DELETE
						FROM
						  productos
						WHERE IDPRODUCTO = '$IDPRODUCTO';";
		$rs=$conn->query($sqleliminar);		
	}
	
}



$sql="select * from productos where IDPRODUCTO='".$_GET["IDPRODUCTO"]."'";
	$rs=$conn->query($sql);
	$fila=$rs->fetch_assoc();	
		
?>

<div class="col-sm-8">
      <h2>MODIFICAR PRODUCTO</h2>
      <h5>fecha, <?php echo date("d-m-Y");?></h5>     
      <form method="post">
		
      <div class="form-group">
    	<label for="NOMBREPRODUCTO">Nombre del producto</label>
    	<input type="text" class="form-control" name="NOMBREPRODUCTO" placeholder="Digite el nombre del producto" id="NOMBREPRODUCTO" value="<?php echo $fila["NOMBREPRODUCTO"];?>">
  	  </div>
      	
      <div class="form-group">
    	<label for="TALLA">Talla</label>
    	<input type="text" class="form-control" name="TALLA" placeholder="Digite la talla del producto" id="TALLA" value="<?php echo $fila["TALLA"];?>">
  	  </div>
  	  <div class="form-group">
    	<label for="CANTIDAD">Cantidad </label>
    	<input type="number" class="form-control" name="CANTIDAD" placeholder="Digite la cantidad del productos existentes" id="CANTIDAD" value="<?php echo $fila["CANTIDAD"];?>">
  	  </div>
  	  <div class="form-group">
    	<label for="PRECIO">Precio</label>
    	<input type="number" class="form-control" name="PRECIO" placeholder="Digite el precio" id="PRECIO" value="<?php echo $fila["PRECIO"];?>">
  	  </div>
  	  	       	      	
     	<input type="submit" name="ok"  class="btn btn-primary" value="Guardar registro">
      	
      </form>
         
     <br>  	
      
    </div>

