<?php
	include("conexion.php");

$nUsuario = $_POST["login-usuario"];
$contraseña = $_POST["login-contraseña"];

$consulta = "SELECT *
			FROM usuarios
			WHERE nombreUsuario = '$nUsuario'";

$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_fetch_array($resultado);

//$filas = mysqli_num_rows($resultado);

if($filas)
{	
	if($contraseña == $filas['contrasenha']){
			header("location:catalogo.html");
		}else{	
			header("location:errorLogin.php");
		}
		

}else{	
	header("location:errorLogin.php");
}
mysqli_free_result($resultado);
mysqli_close($conexion);
