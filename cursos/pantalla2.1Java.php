<?php 
	include("../php/conexion.php");
	include("../php/sesionIniciada.php");


	$C = 'Java';
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
    <link rel="stylesheet" href="../css/java.css" />
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
          <li><a href="../php/cerrarSesion.php">Cerrar Sesion</a></li>
        </ul>
      </nav>
    </header>


    <section class="contenido" id="cabecera">
      <div class="pagina" >

		    <h2>CURSO JAVA PARA PRINCIPIANTES</h2>

		<h3 class="descripcionCurso">2.1: INSTALAR JAVA</h3>
		
	   
	<li>Ya sea que usted se encuentre en Sistemas Operativos: Windows, Linux o Mac, se debe instalar la versión jdk (java development kit) más reciente y JRE (Java Runtime Enviroment), los cuales permitirán que se integre toda la plataforma y herramientas necesarias para el uso de un IDE (Integrated Development Environment), la instalación de este último se verá en el siguiente submódulo.</li>

      <li>En el proceso de instalación deberemos de introducir algunos datos como el directorio de instalación del compilador y las partes del software que queremos instalar.Entre estas partes podremos elegir las herramientas de desarrollo, el código fuente, las demos y el entorno de ejecución. Es recomendable instalar todas. Más vale que sobre a que falte.</li>        
              
		<div>
					        	<center>
					        		<video controls width="500" height="315">        			
					        				<source src="../videos/videoJava3.mp4" type="video/mp4"> 
					        		</video>	
					        	</center>        		
		 </div>	
				<div class="botones">
				<li><button type="button" class="btn btn-primary boton" 
					onclick="location.href='pantalla1.2Java.html';">Anterior </button></li>

				
				<li><button type="button" class="btn btn-primary boton" 
					onclick="location.href='pantalla2.2Java.html';">Siguiente</button></li>
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