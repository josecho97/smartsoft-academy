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
    
 <script src ="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />	
      <script src="js/verificarSesion.js"></script>	


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/editarPerfil.css" />
    <script defer src="js/menu.js"></script>
    <script src="js/validar.js"></script>
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
          <li><a href="perfil.php">Mi Perfil</a></li>
          <li><a href="php/cerrarSesion.php">Cerrar Sesión</a></li>
        </ul>
      </nav>
    </header>


    <section class="contenido">
      <div class="cuadro">
          <h1 class="edicion-title">Editar perfil</h1>
	<div class="edicion">
	   <div class="division" id="formulario">
            <form method="POST" action="php/editarDatos.php" name="Nuevo Uusario"  enctype="multipart/form-data"/>
                <ul class= "identificador">
                    <li class="texto1">
                       <span ><?php echo $_SESSION['nUsuario'] ?></span>
                    </li>
                    <li class ="texto2">
                        <label for="" class="elementosForm" id="">Nombres:</label>
                        <input type="text" name="nombres" id="nombre" minlength="3" pattern="[a-zA-Z ]+" title="El nombre debe contener caracteres alfabéticos y mínimo 3 caracteres" maxlength="30" value="<?php echo $_SESSION['nombre'] ?>" required>
                     </li>
    		     <li class ="texto2">
                        <label for="" class="elementosForm" id="">Apellidos:</label>
                        <input type="text" name="apellidos" id="apellido" minlength="3" pattern="[a-zA-Z ]+" title="El nombre debe contener caracteres alfabéticos y mínimo 3 caracteres" maxlength="30" value="<?php echo $_SESSION['apellido'] ?>" required>
                     </li>

                     <li class ="texto2">
                        <label for="" class="elementosForm">Correo electrónico:</label>
                        <input type="email" name="correo" id="email" pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$" title="Ejemplo de correo electronico: ejemplo@dominio.extención" value="<?php echo $_SESSION['cElectronico'] ?>" required>
                     </li>
                    
		     <div class="">
 			<li class="countries">
                        <label for="" class="elementosFormPais"><b class ="texto2">País:</b></label>   
                            <select name="pais" id="paises" class = "paises">
                                <option selected value="<?php echo $_SESSION['pais'] ?>"><?php echo $_SESSION['pais'] ?></option>
                                <option value="Argentina">Argentina</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Brasil">Brasil </option> 
                                <option value="Canadá">Canadá</option>
                                <option value="Chile">Chile</option>
                                <option value="Colombia">Colombia</option> 
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Ecuador">Ecuador</option> 
                                <option value="El Salvador">El Salvador</option>
                                <option value="Estados Unidos">Estados Unidos</option>
                                <option value="Guatemala">Guatemala</option> 
                                <option value="Honduras">Honduras</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="México">México</option> 
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Panamá">Panamá</option>
                                <option value="Paraguay">Paraguay</option> 
                                <option value="Perú">Perú</option>
                                <option value="República Dominicana">República Dominicana</option>
                                <option value="Uruguay">Uruguay</option> 
                                <option value="Venezuela">Venezuela</option>
                                <option value="Otro">Otro</option>
                                
                            </select>
                     </li>	
			</div>







 			
                     <li class="foto">
                         <label for="" class="elementosFormImagen"><b class="texto3">Foto de perfil</b></label>
                        <div id="file-preview-zone">
                            <img src="images/<?php echo $_SESSION['nUsuario']?>/perfil.jpg" id="imagenSubida">
                        </div>
                        <div id="divFileUpload" class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
			
	
                            <input name="archivo" id="file-upload"  type="file" accept=".jpg, .jpeg" /> 
			    <input type="button" value="Seleccionar Foto" class = "botoncito" onclick="document.getElementById('file-upload').click()">
		

                        </div>
			<div class="confirmacion">
                        <button type="submit" name="enviar" class="btn btn-success" onclick="">Guardar</button>
                        <button type="button" class="btn btn-danger" onclick="location.href='perfil.php'">Cancelar</button>
			</div>
                       <script src="js/editarFoto.js"></script>
                     </li>




                </ul>
            </form>
        </div>


	</div>	
        </div>

         <div class="contImagen">
		<img src="images/editarPerfil.jpg" id="imgPerfil">
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
  <script src="js/veriCursos.js"></script>	
</html>