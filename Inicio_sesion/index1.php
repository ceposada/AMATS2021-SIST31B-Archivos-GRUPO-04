<?php 

  @session_start();

  if (!(isset($_SESSION["admin"]))) 
  {
    header("location:login.php");
  }

 ?>


<head>
	<title>Inicio</title>
</head>
<link rel="stylesheet" type="text/css" href="css.css">
<body>
	<div id="cont">
		<header>
			<h1>Bienvenidos a nuestra pagina web!</h1>
		</header>
		<nav>
			<h1>Menu bar</h1>
		</nav>
		<section class="contenido">
			<article>
				<h1>Sobre nosotros</h1>
				<br>
				<div class="mision"><h3>Mision</h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
				<div class="vision"><h3>Vision</h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
			</article>
		</section>
		<aside>
			<h2>Cualquier cosa</h2>
		</aside>
		<footer>
			<h2>Pie de pagina</h2>
		</footer>
	</div>
</body>
</html>