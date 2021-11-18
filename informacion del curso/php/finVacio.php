<?php

	include("conexion.php");
	include("sesionIniciada.php");


	$consulta = "SELECT *
			FROM clase
			WHERE estado = 'finalizado' AND nombreUsuario = '$nomUsuario'";
	
	$resultado = mysqli_query($conexion, $consulta);
	$filas = mysqli_fetch_array($resultado);


	if($filas)
	{	
		if('finalizado' == $filas['estado']){
			echo "hay";
		}else {
			echo "proceso";
		}
		

	}else {	
	 echo "vacio";
	}

?>