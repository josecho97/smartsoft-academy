<?php 
	include("../php/conexion.php");
	include("../php/sesionIniciada.php");


	$C = 'HTML';
	$ID = $nomUsuario.'-'.$C.'-'.'3';
	$USU = $nomUsuario.'-'.$C;

	$sql = "INSERT INTO html VALUES('$ID','3','$USU')";

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

		<h3 class="descripcionCurso">2.2: ENLACES</h3>
		
	   
		
		<li>
			Lo más importante de los documentos HTML son los enlaces. Ya que 
			mediante los enlaces en HTML podemos comunicar una página con otra. 
			De esta forma, enlazando documentos HTML podemos acabar tejiendo lo que es Internet.
			<br>Para crear un enlace en HTML utilizamos el elemento A con la siguiente sintaxis:
			<br><strong>&lt;a&gt;</strong>Contenido del enlace<strong>&lt;/a&gt;</strong>
			<br><br>Para poder indicar el destino de un enlace utilizamos el atributo href. 
			En valor del atributo href puede ser cualquier URI que represente un 
			recurso. Es decir, una página, una parte de una página, una URL genérica,
			 un archivo,… De esta forma el enlace en HTML lo crearemos con la sintaxis:
			 <br><strong>&lt;a&gt;</strong> href="URI"&gt;Contenido del enlace<strong>&lt;/a&gt</strong>;
			<br><br>
			<strong>Destino del enlace</strong>
			<br><br>
			Por defecto y si no hemos configurado nada en el navegador web que estemos 
			utilizando el enlace se abre en la misma ventana en la que tengamos el
			enlace.
			<br>
			Si bien, en el enlace, podemos indicar el destino que queremos
			darle a dicho enlace. Eso lo podemos hacer mediante el atributo
			 target. Los posibles valores que admite el atributo target son:
			
			<br><strong>_blank</strong>, el agente de usuario intentará abrir el enlace en una nueva ventana. La nueva ventana no tendrá nombre.
			<br><strong>_self</strong>, el agente de usuario intentará abrir el enlace en el mismo marco donde está en código actual.
			<br><strong>_parent</strong>, el agente de usuario intentará abrir el enlace en el frameset inmediatamente superior al que se encuentra la página. Esto suele suceder cuando tenemos el enlace en un área de frames.
			<br><strong>_top</strong>, el agente de usuario intentará abrir el enlace en la ventana padre. En el caso de que exista un frameset lo eliminará y se hará con toda la ventana.
			<br><strong>nombre_marco</strong>, se podrá indicar el nombre de un frame. 
			<br>En este caso el agente de usuario intentará abrir el enlace en el frame
			 que coincida con el nombre. En el caso de no existir un frame con ese
			  nombre lo abrirá en una nueva ventana, asignándole dicho nombre.
			  <br>
			Así podremos tener el siguiente código:
			<br>
			<strong>&lt;a href="enlace.html" target="_blank"&gt;</strong> enlace en una nueva ventana<strong>&lt;/a&gt;</strong>
			<br>
			<strong>&lt;a href="enlace.html" target="_top"&gt;</strong>Abrir enlace en la ventana superior<strong>&lt;/a&gt;</strong>
		</li>
		  
		   
				
	<center> <iframe width="560" height="315" src="https://www.youtube.com/embed/RdnS55MbdY4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

	<div class="botones">
			<li><button type="button" class="btn btn-primary boton" 
					<button type="button" class="btn btn-primary boton" 
					onclick="location.href='pantalla2.php';">Anterior</button>

					<li><button type="button" class="btn btn-primary boton" 
						<button type="button" class="btn btn-primary boton" 
						onclick="location.href='pantalla4.php';">Siguiente</button>
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