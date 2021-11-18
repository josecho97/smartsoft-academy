<?php
	include("conexion.php");
	include("sesionIniciada.php");


	$C = 'Python';
	$ID = $nomUsuario.'-'.$C;
	$sql = "INSERT INTO clase VALUES('$ID','$nomUsuario','curso Python', '0','proceso')";

	if(mysqli_query($conexion,$sql)){
		header("location:../cursos/moduloPython.html");
	}else{
		header("location:../informacionCursoPython.html");
	}
	mysqli_close($conexion);
	
?>