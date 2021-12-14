<?php 

include("conexion.php");


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