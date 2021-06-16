<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<link rel="stylesheet" type="text/css" href="../shop/css/css.css">
<style>
html {
  font-family: 'Montserrat', Arial, sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}

body {
  background: #F2F3EB;
}

button {
  overflow: visible;
}

button, select {
  text-transform: none;
}

button, input, select {
  color: #5A5A5A;
  font: inherit;
  margin: 0;
}

input {
  line-height: normal;
}

#container {
  border: solid 3px #474544;
  max-width: 768px;
  margin: 60px auto;
  position: relative;
}

form {
  padding: 37.5px;
  margin: 50px 0;
}

h1 {
  color: #474544;
  font-size: 32px;
  font-weight: 700;
  letter-spacing: 7px;
  text-align: center;
  text-transform: uppercase;
}

.underline {
  border-bottom: solid 2px #474544;
  margin: -0.512em auto;
  width: 80px;
}

.email {
	float: right;
	width: 45%;
}

input[type='text'], [type='email']{
	background: none;
  border: none;
  border-bottom: solid 2px #474544;
  color: #474544;
  font-size: 1.000em;
  font-weight: 400;
  letter-spacing: 1px;
  margin: 0em 0 1.875em 0;
  padding: 0 0 0.875em 0;
  text-transform: uppercase;
  width: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -ms-box-sizing: border-box;
  -o-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
}

input[type='text']:focus, [type='email']:focus {
	outline: none;
	padding: 0 0 0.875em 0;
}

.message {
	float: none;
}

.name {
	float: left;
	width: 45%;
}

select {
  background: url('https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-arrow-down-32.png') no-repeat right;
  outline: none;
  -moz-appearance: none;
  -webkit-appearance: none;
}

select::-ms-expand {
  display: none;
}

.subject {
  width: 100%;
}

.telephone {
  width: 100%;
}

::-webkit-input-placeholder {
	color: #474544;
}

:-moz-placeholder { 
	color: #474544;
	opacity: 1;
}

::-moz-placeholder {
	color: #474544;
	opacity: 1;
}

:-ms-input-placeholder {
	color: #474544;
}

#form_button {
  background: none;
  border: solid 2px #474544;
  color: #474544;
  cursor: pointer;
  display: inline-block;
  font-family: 'Helvetica', Arial, sans-serif;
  font-size: 0.875em;
  font-weight: bold;
  outline: none;
  padding: 20px 35px;
  text-transform: uppercase;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
}

#form_button:hover {
  background: #474544;
  color: #F2F3EB;
}

@media screen and (max-width: 768px) {
  #container {
    margin: 20px auto;
    width: 95%;
  }
}

@media screen and (max-width: 480px) {
  h1 {
    font-size: 26px;
  }
  
  .underline {
    width: 68px;
  }
  
  #form_button {
    padding: 15px 25px;
  }
}

@media screen and (max-width: 420px) {
h1 {
    font-size: 18px;
  }
  
.icon {
    height: 35px;
    width: 35px;
  }
  
.underline {
    width: 53px;
  }
  
input[type='text'], [type='email'], select {
    font-size: 0.875em;
  }
}

.productos {
	margin-top: 100px;
}

/*contenido*/

.cont3{
	border: 1px solid black;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-evenly;
	width: 90%;
	height: auto;
	margin-right: auto;
	margin-left: auto;
	margin-bottom: 30px;

}

.prodcont img {
	margin: auto;
}

.prodcont{
	margin: 15px;
	padding: 2px 16px;
	position: relative;
	box-shadow: 0 2pc 8px 0 rgba(0,0,0,0.2);
	background-color: white;
}

.prodcont:hover {
	box-shadow: 0 3pc 8px 0 rgba(0,0,0,0.2); 
}

.prodcont img{
	width: 300px;
}

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
	<div id="container">
		<h1>&bull; Formulario de compra &bull;</h1>
		<div class="underline">
			
		</div>
		<form action="#" method="post" id="contact_form">
			<div class="name">
				<label for="name"></label>
				<input type="text" placeholder="Introduzca su Usermame" name="name" id="name_input" required>
			</div>
			<div class="email">
				<label for="email"></label>
				<input type="email" placeholder="Introduzca su E-mail" name="email" id="email_input" required>
			</div>
			<div class="telephone">
				<label for="name"></label>
				<input type="text" placeholder="Introduzca su numero de telefono" name="telephone" id="telephone_input" required>
			</div>
			<div class="telephone">
				<label for="name"></label>
				<input type="text" placeholder="Introduzca su Direccion" name="telephone" id="telephone_input" required>
			</div>
			<div class="cont3">
				<div class="prodcont">
					<h3>Nombre</h3>
					<img src="../shop/imagenes/1.jpg">
					<h1>$50</h1>
				</div>
			</div>
			<div class="message">
			<div class="submit">
				<input type="submit" value="Realizar pedido" id="form_button" />
			</div>

		</form>
	</div>

</body>
</html>