<?php 
	include("../php/conexion.php");
	include("../php/sesionIniciada.php");


	$C = 'HTML';
	$ID = $nomUsuario.'-'.$C.'-'.'0';
	$USU = $nomUsuario.'-'.$C;

	$sql = "INSERT INTO html VALUES('$ID','0','$USU')";

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


    <section class="contenido" id="cabecera">
      <div class="pagina" >

		    <h2>CURSO BASICO DE HTML</h2>

		<h3 class="descripcionCurso">1.1: INSTALACION DE VISUAL STUDIO </h3>
		
	   
		<li>
			Cómo instalar Microsoft Visual Studio Code
				<br>
                Paso 1: Ve a la página de Microsoft Visual Studio Code en Academic Software
				 y haz clic en el botón verde 'Descargar Visual Studio Code' para descargar
				  el instalador.
				<br><br>
				<div align="center"><img  class="dibujo" src= "https://support.academicsoftware.eu/hc/article_attachments/360017961317/1_ES.JPG"></div>
				<br><br>
                Paso 2: Abre el archivo de instalación .exe en tu carpeta de descargas para 
				iniciar la instalación.
				<br><br>
				<div align="center"><img class="dibujo" src= "https://support.academicsoftware.eu/hc/article_attachments/360007150257/blobid0.png"></div>
				<br><br>
				Paso 3: Lee y acepta el acuerdo de licencia. Haz clic en Next para continuar.
				<br><br>	
				<div align="center"><img  class="dibujo" src="https://support.academicsoftware.eu/hc/article_attachments/360007150317/mceclip1.png"></div>
				<br><br>
				Paso 4: Puedes cambiar la ubicación de la carpeta de instalación o mantener 
				la configuración predeterminada. Haz clic en Next para continuar.
				<br><br>
				<div align="center"><img  class="dibujo" src="https://support.academicsoftware.eu/hc/article_attachments/360007150337/mceclip2.png"></div>
				<br><br>
				Paso 5: Elige si deseas cambiar el nombre de la carpeta de accesos directos 
				en el menú Inicio o si no deseas instalar accesos directos en absoluto. 
				Haz clic en Next.
				<br><br>
				<div align="center"><img  class="dibujo" src="https://support.academicsoftware.eu/hc/article_attachments/360007150377/mceclip3.png"></div>
				<br><br>
				Paso 6: Selecciona las tareas adicionales, por ej. crear un icono en el 
				escritorio o añadir opciones al menú contextual de Windows Explorer. Haz 
				clic en Next.
				<br><br>
				<div align="center"><img  class="dibujo" src="https://support.academicsoftware.eu/hc/article_attachments/360007150397/mceclip4.png"></div>
				<br><br>
				Paso 7: Haz clic en Install para iniciar la instalación.
				<br><br>
				<div align="center"><img class="dibujo" src="https://support.academicsoftware.eu/hc/article_attachments/360007150477/mceclip5.png"></div>
				<br><br>
				Paso 8: El programa está instalado y listo para usar. Haz clic en Finish 
				para finalizar la instalación y lanzar el programa.
				<br><br>
				<div align="center"><img class="dibujo" src="https://support.academicsoftware.eu/hc/article_attachments/360007150517/mceclip6.png"></div>
				<br><br>
				En el siguiente video se puede mostrar la instalación paso a paso:
				</li>

	<div class="video">
	<center><iframe src="https://www.youtube.com/embed/X_Z7d04x9-E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
			
				<div class="botones1">
				<li><button type="button" class="btn btn-primary boton" 
					<button type="button" class="btn btn-primary boton" 
					onclick="location.href='pantalla1.php';">Siguiente</button>
				 </div>
		
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