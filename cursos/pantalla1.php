<?php 
	include("../php/conexion.php");
	include("../php/sesionIniciada.php");


	$C = 'HTML';
	$ID = $nomUsuario.'-'.$C.'-'.'1';
		$USU = $nomUsuario.'-'.$C;

	$sql = "INSERT INTO html VALUES('$ID','1','$USU')";

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

		<h3 class="descripcionCurso">1.2: INTRODUCCION</h3>
		
	   
		<li>
			
			
			El HTMl es el lenguaje básico para crear sitios web.En el código HTML
			 se escriben los textos que lee el usuario y se vinculan las imágenes importantes.
			También se definen las estructuras, se le da jerarquía al contenido y se vinculan los archivos.<br> 
			<br><strong>  ETIQUETAS BASICAS DE UNA PAGINA </strong><br>
			<br>
			La etiqueta DOCTYPE indica la versión de código HTML que estamos usando, en este caso es la versión HTML5. En realidad no lo dice, pero desde la versión HTML5 la etiqueta se redujo a estas dos palabras, antes era un línea bastante más larga con más información.<br>
			Todo el código HTML se encierra entre las etiquetas <strong>&lt;html&gt;</strong>, y siempre hay que marcar dos zonas: el <strong>&lt;head&gt;</strong> y el <strong>&lt;body&gt;</strong>.<br>
			En el <strong>head</strong> se escribe información para el navegador, por ejemplo: la etiqueta <strong>&lt;meta charset="UTF-8"&gt;</strong> define la norma con la que se escriben los caracteres especiales, pero la única que ve el usuario es la etiqueta <strong>&lt;title&gt;</strong> que se muestra en la pestaña del navegador y es la que se usa para guardar una página en marcadores.<br>
			En el <strong>body</strong> se escribe todo el contenido que ve el usuario: textos, vínculos e imágenes.
			
		</li>
	<center><iframe src="https://www.youtube.com/embed/cqMfPS8jPys" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</center>	
	<div class="botones">
			<li><button type="button" class="btn btn-primary boton" 
			<button type="button" class="btn btn-primary boton" 
			onclick="location.href='pantalla0.php';">Anterior</button>

			<li ><button type="button" class="btn btn-primary boton" 
				<button type="button" class="btn btn-primary boton" 
				onclick="location.href='pantalla2.php';">Siguiente</button>
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