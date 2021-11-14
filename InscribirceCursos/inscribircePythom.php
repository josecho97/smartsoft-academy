<?php
	include("conexion.php");
	include("sesionIniciada.php");


	$C = 'Python';
	$ID = $nomUsuario.'-'.$C;
	$sql = "INSERT INTO clase VALUES('$ID','$nomUsuario','curso Python', '0','proceso')";

	if(mysqli_query($conexion,$sql)){
		echo "Te has Inscrito Correctamente";
	}else{
		echo "No wey";
	}
	mysqli_close($conexion);
	
?>