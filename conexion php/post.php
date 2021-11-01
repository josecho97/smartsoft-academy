<?php 

include("conexion.php");


$usuario = $_POST['login-usuario'];
$pass = $_POST['login-contraseña'];


$consulta = "SELECT *
			FROM usuarios
			WHERE nombreUsuario = '$usuario'";

$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_fetch_array($resultado);

//a partir de este punto hace las verificaiones para ver si es correcto o no la ontraseña;

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