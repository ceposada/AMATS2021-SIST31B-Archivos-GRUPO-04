<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD ADMIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>CRUD ADMIN</h1>
  <p></p> 
</div>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <a class="navbar-brand" href="index.php">INICIO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      
      <li class="nav-item">
        <a class="nav-link" href="?pag=usuarios.php">USUARIOS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?pag=productos.php">PRODUCTOS</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="#">...</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">...</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">...</a>
      </li>
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    
    <!--cargar aqui el cuerpo de la pagina//-->
    
    <?php
    
    if(isset($_GET["pag"])){
    	require_once($_GET["pag"]);
    }else{
    	$fecha=date("d-m-Y");
    	echo "<div class='col-sm-8'>
      	<h2>BIENVENIDOS</h2>
      	<h5>fecha, $fecha </h5>
      	
    	</div>";
    }
    ?>
    
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>