<!DOCTYPE html>
<html>
<head>
	<title>Catalogo de productos</title>
</head>
<link rel="stylesheet" type="text/css" href="../shop/css/css.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
<style>
	footer{
	width: 100%;
	margin-top: 100px;
	background: black;
	color: white;
}

.container{
width: 100%;
display: flex;
}

.container-parrafo{
width: 100%;
text-align: right;
margin-top: -7px;
}

.container-parrafo h1{
	font-size: 15px;
}

/*
.container-parrafo h2{
	font-size: 15px;
	text-align: center;
	margin-left: 1100px;
}
*/

.columna1{
	max-width: 240px;
}

.columna2{
	max-width: 240px;
	margin-left: 100px;
	margin-top: 35px;
}

.columna3{
	max-width: 240px;
	margin-left: 700px;
	margin-top: 35px;
}

.columna4{
	max-width: 240px;
	margin-left: 50px;
	margin-top: 35px;
}

.columna5{
	max-width: 240px;
	margin-left: 50px;
	margin-top: 35px;
}

.columna1 img{
  width: 150px;
  height: 150px;
}

.columna2 h1{
	font-size: 30px;
	width: 500px;
}

.columna2 h3{
	font-size: 25px;
	margin-left: 45px;
}

footer img{
  width: 50px;
  height: 50px;
}
h1 {
	margin-left: auto;
	margin-right: auto;
	text-transform: uppercase;
}

.name {
	width: 100%;
	height: 50px;
	align-content: center;
	margin-top: 10px;
	margin-bottom: 0px;
	margin-top: 100px;
}

.name h1 {
	text-align: center;
	text-transform: uppercase;
}

.paginacion {
	margin: 20px 0;
	background: white;
	height: 20px;
	margin-top: 100px;
}

.paginacion ul {
	list-style: none;
	text-align: center;
}

.paginacion ul li {
	display: inline-block;
	margin-right: 10px;
}

.paginacion ul li a{
	display: inline-block;
	padding: 10px 20px;
	color: #fff;
	background: #024959;
	text-decoration: none;
}

.paginacion ul li a:hover {
	background: #037E8C;
}

.paginacion ul li .active {
	background: #037E8C;
	font-weight: bold;
}



.paginacion 
</style>
<body>
	<nav>
		<label class="logo">Shop Online</label>
			<ul>
				<li><a class="active" href="">Home</a></li>
				<li><a href="">Servicios</a></li>
				<li><a href="">Contactos</a></li>
				<li><a href="sobre.php">Sobre nosotros</a></li>
				<li><a href="">Feedback</a></li>
			</ul>
	</nav>
	<div class="name">
		<h1>Catalogo de Mujeres</h1>
	</div>
	<div class="cont3">
		
		<div class="prodcont">
			<h3>Nombre</h3>
			<img src="imagenes/11.jpg">
			<h1>$50</h1>
			<button class="button-add">Agregar</button>
		</div>
		<div class="prodcont">
			<h3>Nombre</h3>
			<img src="imagenes/12.jpg">
			<h1>$50</h1>
			<button class="button-add">Agregar</button>
		</div>
		<div class="prodcont">
			<h3>Nombre</h3>
			<img src="imagenes/13.jpg">
			<h1>$50</h1>
			<button class="button-add">Agregar</button>
		</div>
		<div class="prodcont">
			<h3>Nombre</h3>
			<img src="imagenes/14.jpg">
			<h1>$50</h1>
			<button class="button-add">Agregar</button>
		</div>
		<div class="prodcont">
			<h3>Nombre</h3>
			<img src="imagenes/15.jpg">
			<h1>$50</h1>
			<button class="button-add">Agregar</button>
		</div>
		<div class="prodcont">
			<h3>Nombre</h3>
			<img src="imagenes/16.jpg">
			<h1>$50</h1>
			<button class="button-add">Agregar</button>
		</div>
		<div class="prodcont">
			<h3>Nombre</h3>
			<img src="imagenes/17.jpg">
			<h1>$50</h1>
			<button class="button-add">Agregar</button>
		</div>
		<div class="prodcont">
			<h3>Nombre</h3>
			<img src="imagenes/18.jpg">
			<h1>$50</h1>
			<button class="button-add">Agregar</button>
		</div>
		<div class="prodcont">
			<h3>Nombre</h3>
			<img src="imagenes/19.jpg">
			<h1>$50</h1>
			<button class="button-add">Agregar</button>
		</div>
		<div class="prodcont">
			<h3>Nombre</h3>
			<img src="imagenes/20.jpg">
			<h1>$50</h1>
			<button class="button-add">Agregar</button>
		</div>
	</div>
	<div class="pay">
		<button class="button-chek">Pagar</button>
	</div>

	<div class="paginacion">
		<ul>
			<li ><a href="catalogomen.php">1</a></li>
			<li><a href="#" class="active">2</a></li>
		</ul>
	</div>
	<footer>    
		<hr color="purple" size=6>  
		<div class="container">
			<div class="columna1">
				<img src="../piepagina/Iconos/Logo.png">
        </div>
        <div class="columna2">
          <h1>O N L I N E</h1>
          <h3>SHOP</h3>
        </div>
        <div class="columna3">
          <img src="../piepagina/Iconos/facebook.png">
        </div>
        <div class="columna4">
          <img src="../piepagina/Iconos/twitter.png">
        
        </div>
        <div class="columna5">
          <img src="../piepagina/Iconos/whatsapp.png">
        </div>

    </div>
    <div class="container-parrafo">
    	<h1>© 2021 Online Shop todos los derechos reservados.</h1>
    </div>
	</footer>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>