<?php
	include("conexion.php");
	include("sesionIniciada.php");


	$C = 'Java';
	$ID = $nomUsuario.'-'.$C;
	
	$consulta = "SELECT *
			FROM clase
			WHERE idClase = '$ID'";

	$resultado = mysqli_query($conexion, $consulta);
	$filas = mysqli_fetch_array($resultado);


	if($filas){	
			echo "si";
		}else{
			echo "no estas";
		}

	mysqli_close($conexion);
	
?>