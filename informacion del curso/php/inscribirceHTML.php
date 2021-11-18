<?php
	include("conexion.php");
	include("sesionIniciada.php");


	$C = 'HTML';
	$ID = $nomUsuario.'-'.$C;
	$sql = "INSERT INTO clase VALUES('$ID','$nomUsuario','curso HTML', '0','proceso')";

	if(mysqli_query($conexion,$sql)){
		header("location:../cursos/moduloHtml.html");
	}else{
		header("location:../informacionCursoHtml.html");
	}
	mysqli_close($conexion);
	
?>