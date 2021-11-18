<?php

	include("conexion.php");
	include("sesionIniciada.php");


	$consulta = "SELECT *
			FROM clase
			WHERE estado = 'proceso' AND nombreUsuario = '$nomUsuario'";
	
	$resultado = mysqli_query($conexion, $consulta);
	$filas = mysqli_fetch_array($resultado);


	if($filas)
	{	
		if('proceso' == $filas['estado']){
			echo "hay";
		}else {
			echo "finalizado";
		}
		

	}else {	
	 echo "vacio";
	}

?>