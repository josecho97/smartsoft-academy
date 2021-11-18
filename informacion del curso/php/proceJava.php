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


	if($filas)
	{	
		if('proceso' == $filas['estado']){
			echo "proceso";
		}else {
			echo "finalizado";
		}
		

	}else {	
	 echo "no entro";
	}

?>