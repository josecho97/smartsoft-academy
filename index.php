<?php
	include("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SmartSoft Academy</title>
	<link rel="shortcut icon" href="images/Logo.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/estilosLogin.css">

</head>
<body>
<header id="cabecera">
		<h1>SmartSoft Academy</h1>
		<img src="images/Logo.png" id="logo" >
</header>
<main>
    <div class="container">
		<h2 class="label">Inicia Sesión con tu Cuenta</h2>
		<form class="login_form" action="conectarUsuario.php" method="post" name="form" onsubmit="return validated()">
			
			<div class="font">Nombre de Usuario:</div>
			<input autocomplete="off" type="text" name="login-usuario">
			<div id="email_error">Por favor escribe tu nombre de Usuario</div>
			
			<div class="font font2">Contraseña:</div>
			
			<input type="password" name="login-contraseña">
			<div id="pass_error">Por favor escribe Contraseña</div>
			<button type="submit">Iniciar Sesión</button>
		</form>
	</div>	
    <script src="js/valid.js"></script>
</main>
</body>
</html>