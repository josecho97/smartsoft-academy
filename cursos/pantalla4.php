<?php 
	include("../php/conexion.php");
	include("../php/sesionIniciada.php");


	$C = 'HTML';
	$ID = $nomUsuario.'-'.$C.'-'.'4';
	$USU = $nomUsuario.'-'.$C;

	$sql = "INSERT INTO html VALUES('$ID','4','$USU')";

	if(mysqli_query($conexion,$sql)){
		echo("si");
	}else{
		echo("no");
	}
	mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="es">
  
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    
    <title>SmartSoft Academy</title>
    <link rel="shortcut icon" href="images/Logo.ico">

 <script src ="https://code.jquery.com/jquery-3.6.0.min.js"></script>	
      <script src="../js/verificarSesion2.js"></script>	

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="../css/navbar.css" />
    <link rel="stylesheet" href="../css/html.css" />
    <script defer src="../js/menu.js"></script>
  </head>
  



  <body>
    <header class="topheader">
      <nav class="topnav">
        <a href="#" class="logo">
          <img
	    class = "imgLogo";
            height="60"
            width="53"
            src="../images/Logo.png"
            alt="logo"
          />
          <div class="logotype">SMARTSOFT ACADEMY</div>
        </a>

        <button class="open-menu" aria-label="Abrir menú">
          <img src="../images/hamburger-icon.svg" alt="abrir menú" />
        </button>

        <ul class="menu">
          <button class="close-menu" aria-label="Cerrar menú">
            <img src="../images/close-icon.svg" alt="cerrar menú" />
          </button>
                   <li><a href="../catalogo.html">Inicio</a></li>
          <li><a href="../misCursos.html">Mis Cursos</a></li>
          <li><a href="../perfil.php">Mi Perfil</a></li>
          <li><a href="../php/cerrarSesion.php">Cerrar Sesión</a></li>
        </ul>
      </nav>
    </header>


    <section class="contenido">
      <div class="pagina">

		<h2 > CURSO BASICO DE HTML</h2>

		<h3 class="descripcionCurso">2.3: LISTAS</h3>
		
	   
		<li>
			Las listas en HTML nos permite crear conjuntos de elementos en forma de lista dentro de una página, todos los cuales irán precedidos, generalmente, por un guión o número.
			<br>
			Los tipos de listas en HTML son los siguientes:
			<br>
			* Listas ordenadas
			<br>
			* Listas desordenadas
			<br><br>
			<strong>Listas Ordenadas</strong>
			<br><br>
			Las listas en HTML ordenadas son aquellas que nos muestran los elementos 
			de la lista en orden. Para representar el orden tendremos los elementos 
			numerados. Es decir, cada uno de los elementos irá precedido de un número 
			o letra que establezca su orden.
			<br>
			Las listas en HTML ordenadas se representan mediante el elemento OL.
			<br><strong>&lt;ol&gt;</strong> ... <strong>&lt;/ol&gt;</strong>
			<br>Cada uno de los elementos de la lista ordenada se representará mediante el elemento LI.
			<br><strong>&lt;ol&gt;</strong>
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&lt;li&gt;</strong>Elemento 1<strong>&lt;/li&gt;</strong>
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&lt;li&gt;</strong>Elemento 2<strong>&lt;/li&gt;</strong>
				  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
				  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&lt;li&gt;</strong>Elemento N<strong>&lt;/li&gt;</strong>
			<br><strong>&lt;/ol&gt;</strong>
			<br>Un ejemplo de lista ordenada sería el siguiente:
			<br><strong>&lt;ol&gt;</strong>
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&lt;li&gt;</strong>Julio<strong>&lt;/li&gt;</strong>
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&lt;li&gt;</strong>Carmen<strong>&lt;/li&gt;</strong>
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&lt;li&gt;</strong>Ignacio<strong>&lt;/li&gt;</strong>
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&lt;li&gt;</strong>Elena<strong>&lt;/li&gt;</strong>
			<br><strong>&lt;/ol&gt;</strong>
			<br>Que produciría el siguiente efecto:
			<br>1.-Julio
			<br>2.-Carmen
			<br>3.-Ignacio
			<br>4.-Elena
			<br><br>
			<strong>Listas Desordenadas</strong>
			<br><br>
			Las listas desordenadas en HTML nos sirven para mostrar los elementos
			 sin ningún tipo de orden, simplemente precedidos por una viñeta que puede 
			 ser un punto, un cuadrado,…
			<br>Para definir una lista desordenada en HTML utilizamos el elemento ul.
			<br><strong>&lt;ul&gt;</strong> ... <strong>&lt;/ul&gt;</strong>
			<br>Para representar los elementos de la lista desordenada utilizamos el 
			mismo elemento que con las listas ordenadas, es decir, el elemento li.

			<br><strong>&lt;ul&gt;</strong>
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&lt;li&gt;</strong>Elemento 1<strong>&lt;/li&gt;</strong>
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&lt;li&gt;</strong>Elemento 2<strong>&lt;/li&gt;</strong>
				  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
				  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&lt;li&gt;</strong>Elemento N<strong>&lt;/li&gt;</strong>
			<br><strong>&lt;/ul&gt;</strong>
			<br>De esa forma podríamos tener el siguiente código HTML:
			<br><strong>&lt;ul&gt;</strong>
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&lt;li&gt;</strong>FC. Barcelona<strong>&lt;/li&gt;</strong>
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&lt;li&gt;</strong>Real Madrid<strong>&lt;/li&gt;</strong>
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&lt;li&gt;</strong>Real Betis<strong>&lt;/li&gt;</strong>
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&lt;li&gt;</strong>Atlético de Madrid<strong>&lt;/li&gt;</strong>
			<br><strong>&lt;/ul&gt;</strong>
			<br>Lo que nos mostrará por pantalla:
			<br>*FC. Barcelona
			<br>*Real Madrid
			<br>*Real Betis
			<br>*Atlético de Madrid
		</li>
		  
	<center> <iframe width="560" height="315" src="https://www.youtube.com/embed/IRbEXqBBOCo" title="YouTube video player" frameborder="0" allow="accelerometer; 
		autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<div class="botones">
			<li><button type="button" class="btn btn-primary boton" 
					<button type="button" class="btn btn-primary boton" 
					onclick="location.href='pantalla3.php';">Anterior</button>

					<li><button type="button" class="btn btn-primary boton" 
						<button type="button" class="btn btn-primary boton" 
						onclick="location.href='pantalla5.php';">Siguiente</button>
	 </div>
		
      </div>

    </section>
    
     <footer>
	    <div id="volverAlHeader">
		<p align="center" class="foot"><b><a class="textFooter" href="#cabecera">SMARTSOFT ACADEMY</a></b></p>
		<div  class = "iconos">
		<a href="https://www.facebook.com/SmartSoft_Academy-111611517995192/" target="_blank"><img src="../images/facebook.png" width="30px"></a>
		<a href="https://www.instagram.com/smartsoft_academy?r=nametag" target="_blank"><img src="../images/insta.png" width="40px"></a>
		<a href="https://wa.me/qr/2O6LHOCTYQNWD1" target="_blank"><img src="../images/whatsapp.png" width="30px"></a>
		</div>
		<div align="center"><p class="derechos">&#169; SmartSoft Academy 2021</p></div>
     </footer>



  </body>
</html>