<?php 

include("conexion.php");

session_start();
$_SESSION['login'] = false;

$usuario = $_POST['login-usuario'];
$pass = $_POST['login-contraseña'];


$consulta = "SELECT *
			FROM usuarios
			WHERE nombreUsuario = '$usuario'";

$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_fetch_array($resultado);

//$filas = mysqli_num_rows($resultado);

if($filas)
{	
	if($pass == $filas['contrasenha']){
			$_SESSION['login']	= true;			
			$_SESSION['nUsuario']	= $filas['nombreUsuario'];
			$_SESSION['nombre']	= $filas['nombre'];
			$_SESSION['apellido']	= $filas['apellido'];
			$_SESSION['fNacimiento']	= $filas['fechaNacimiento'];
			$_SESSION['cElectronico']	= $filas['correoElectronico'];
			$_SESSION['contra']	= $filas['contrasenha'];
			
			//echo json_encode($_SESSION['apellido']);
			echo json_encode('corecto');
		}else if($pass == ''){
			echo json_encode('vacio');
		}else{	
			echo json_encode('error');
		}
		

}else if($usuario == '' || $pass == ''){	
	echo json_encode('vacio');
	}else {echo json_encode('error');}



mysqli_free_result($resultado);
mysqli_close($conexion);