<?php 
	include("../php/conexion.php");
	include("../php/sesionIniciada.php");


	$C = 'HTML';
	$ID = $nomUsuario.'-'.$C.'-'.'5';
	$USU = $nomUsuario.'-'.$C;

	$sql = "INSERT INTO html VALUES('$ID','5','$USU')";

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

		<h3 class="descripcionCurso">2.4: IMAGENES</h3>
		
	   
		<li>
			Para insertar una imagen en HTML tenemos el elemento img, cuya 
			sintaxis básica es:
			<br>
			<strong>&lt;img src="nombreimagen.jpg" alt="" /&gt;</strong>
			<br>
			<br>Como podemos comprobar, el elemento img es un elemento sencillo, con lo 
			cual no tiene elemento de cierre y termina con la barra invertida.
			<br>
			El atributo principal del elemento img es src nos indica la ruta de la 
			imagen que queremos cargar. Así, si la imagen se encuentra en la misma 
			ruta que nuestra página web pondremos:
			<br>
			<strong>&lt;img src="foto.jpg" alt="" /&gt;</strong>
			<br>
			<br>En el caso de que la imagen esté en otro directorio, por ejemplo en 
			“/multimedia/imagenes” pondremos lo siguiente:
			<br>
			<strong>&lt;img src="/multimedia/imagenes/foto.jpg" alt="" /&gt;</strong>
			<br>
			<br>Incluso la imagen puede residir en otro servidor. En ese caso la URL que 
			contenga la imagen deberá de indicar el protocolo y el servidor que 
			alberga la imagen. Por ejemplo podremos tener el siguiente código:

			<br><strong>&lt;img src="http://lineadecodigo.com/imagenes/logo.jpg" alt="" /&gt;</strong>
		</li>
		  
		<center> <iframe width="560" height="315" src="https://www.youtube.com/embed/lAoeALwWKo0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<div class="botones">
			<li><button type="button" class="btn btn-primary boton" 
					<button type="button" class="btn btn-primary boton" 
					onclick="location.href='pantalla4.php';">Anterior</button>

					<li><button type="button" class="btn btn-primary boton" 
						<button type="button" class="btn btn-primary boton" 
						onclick="location.href='pantalla6.php';">Siguiente</button>
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