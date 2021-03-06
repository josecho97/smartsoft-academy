<?php 
	include("../php/conexion.php");
	include("../php/sesionIniciada.php");


	$C = 'HTML';
	$ID = $nomUsuario.'-'.$C.'-'.'2';
	$USU = $nomUsuario.'-'.$C;

	$sql = "INSERT INTO html VALUES('$ID','2','$USU')";

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
          <li><a href="../php/cerrarSesión.php">Cerrar Sesion</a></li>
        </ul>
      </nav>
    </header>


    <section class="contenido">
      <div class="pagina">

		<h2 > CURSO BASICO DE HTML</h2>

		<h3 class="descripcionCurso">2.1: ETIQUETAS PARA TEXTOS</h3>
		
	   
		<li>Todo el código HTML se escribe por medio de etiquetas y sus atributos. Las etiquetas son palabras o abreviaturas en ingles encerradas en los signos < (menor) y >(mayor). Cada etiqueta tiene una función por ejemplo:

			<br><strong>&lt;h1&gt;</strong> encabezado de mayor jerarquía (la h es de header)
			<br><strong>&lt;h2&gt;</strong> encabezado de menor jerarquía
			<br><strong>&lt;p&gt;</strong> párrafo
			<br><strong>&lt;a&gt;</strong> enlace
			<br><strong>&lt;strong&gt;</strong> negrita (bold)
			<br><strong>&lt;img&gt;</strong> imagen
			La mayoría de las etiquetas se escribe de a pares: una que cierra y otra que abre, encerrando el contenido al que le dan formato. La etiqueta de cierre es igual a la que abre pero se le agrega una / (barra). Por ejemplo:<br>
			<strong>&lt;h1&gt;</strong> es un título<strong>&lt;/h1&gt;</strong>
			<br><strong>&lt;h2&gt;</strong> es un subtítulo<strong>&lt;/h2&gt;</strong>
			<br><strong>&lt;p&gt;</strong> es un párrafo<strong>&lt;/p&gt;</strong>
			<br>Algunas etiquetas no tienen etiqueta de cierre porque no encierran un contenido como las etiquetas img, br, link y meta.
		</li>
		  
	<center> <iframe width="560" height="315" src="https://www.youtube.com/embed/TNQleomUw6U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

	<div class="botones">
			<li><button type="button" class="btn btn-primary boton" 
					<button type="button" class="btn btn-primary boton" 
					onclick="location.href='pantalla1.php';">Anterior</button>

					<li><button type="button" class="btn btn-primary boton" 
						<button type="button" class="btn btn-primary boton" 
						onclick="location.href='pantalla3.php';">Siguiente</button>
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