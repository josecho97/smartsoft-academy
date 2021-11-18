<?php
	include("conexion.php");
	include("sesionIniciada.php");


	$C = 'Java';
	$ID = $nomUsuario.'-'.$C;
	$sql = "INSERT INTO clase VALUES('$ID','$nomUsuario','curso Java', '0','proceso')";

	if(mysqli_query($conexion,$sql)){
		header("location:../cursos/moduloJava.html");
	}else{
		header("location:../informacionCursoJava.html");
	}
	mysqli_close($conexion);
	
?>