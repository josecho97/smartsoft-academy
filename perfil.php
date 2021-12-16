<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="es">
  
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <script src ="https://code.jquery.com/jquery-3.6.0.min.js"></script>	
    <script src="js/verificarSesion.js"></script>	


    <title>SmartSoft Academy</title>
    <link rel="shortcut icon" href="images/Logo.ico">
    
	

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/perfil2.css" />
    <script defer src="js/menu.js"></script>
  </head>
  



  <body>
    <header class="topheader">
      <nav class="topnav">
        <a href="#" class="logo">
          <img
	    class = "imgLogo";
            height="60"
            width="53"
            src="images/Logo.png"
            alt="logo"
          />
          <div class="logotype">SMARTSOFT ACADEMY</div>
        </a>

        <button class="open-menu" aria-label="Abrir menú">
          <img src="images/hamburger-icon.svg" alt="abrir menú" />
        </button>

        <ul class="menu">
          <button class="close-menu" aria-label="Cerrar menú">
            <img src="images/close-icon.svg" alt="cerrar menú" />
          </button>
          <li><a href="catalogo.html">Inicio</a></li>
          <li><a href="misCursos.html">Mis Cursos</a></li>
          <li><a href="#perfil" class="selected">Mi Perfil</a></li>
          <li><a href="php/cerrarSesion.php">Cerrar Sesion</a></li>
        </ul>
      </nav>
    </header>


    <section class="contenido">
      <div class="titulo">
          <h1 class="titulo-title">Mi Perfil</h1>
      </div>
         <div class="contPerfil">
  		<div class="card-tittle">
                         <div class="image"> 
				<img src="images/<?php echo $_SESSION['nUsuario']?>/perfil.jpg" class="imagenPerfil"> 
			</div>
		</div>
		
                
        	<div class="card">
              			<span class="texto1"><?php echo $_SESSION['nUsuario'] ?></span>
			<div class="card2">
				<div class="let">
					<div class="let1">
						<span class="name mt-2">Nombre Completo:   </span>
					</div>
					<div class="let2">
						<span class="name mt-3">  <?php echo $_SESSION['nombre'].' '.$_SESSION['apellido'] ?></span>
					</div>
           
				</div>

				<div class="let">
					<div class="let1">
						<span class="name mt-2">Fecha de Nacimiento:   </span>
					</div>
					<div class="let2">
						<span class="name mt-3">  <?php echo $_SESSION['fNacimiento'] ?></span>
					</div>
           
				</div>

				<div class="let">
					<div class="let1">
						<span class="name mt-2">Correo Electronico:   </span>
					</div>
					<div class="let2">
						<span class="name mt-3">  <?php echo $_SESSION['cElectronico'] ?></span>
					</div>
           
				</div>

				<div class="let">
					<div class="let1">
						<span class="name mt-2">Pais:   </span>
					</div>
					<div class="let2">
						<span class="name mt-3">  <?php echo $_SESSION['pais'] ?></span>
					</div>
           
				</div>

			</div>


                		<div class=" d-flex mt-2"> <button ton class="btn1 btn-dark" onclick="location.href='editarPerfil.php'"><b>Editar Perfil</b> </button> </div>

           	 </div>

                
         </div>
    </section>
    
     <footer>
	    <div id="volverAlHeader">
		<p align="center" class="foot"><b><a class="textFooter" href="#cabecera">SMARTSOFT ACADEMY</a></b></p>
		<div  class = "iconos">
		<a href="https://www.facebook.com/SmartSoft_Academy-111611517995192/" target="_blank"><img src="images/facebook.png" width="30px"></a>
		<a href="https://www.instagram.com/smartsoft_academy?r=nametag" target="_blank"><img src="images/insta.png" width="40px"></a>
		<a href="https://wa.me/qr/2O6LHOCTYQNWD1" target="_blank"><img src="images/whatsapp.png" width="30px"></a>
		</div>
		<div align="center"><p class="derechos">&#169; SmartSoft Academy 2021</p></div>
     </footer>



  </body>
  
 
  <script src ="https://code.jquery.com/jquery-3.6.0.min.js"></script>	
  <script src="js/getDatos.js"></script>	
</html>