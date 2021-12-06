
<?php
    include("conexion.php");
	include("sesionIniciada.php");

    $nota = $_REQUEST['nota'];
	
	if($nota > 50){
		$C = 'Python';
		$ID = $nomUsuario.'-'.$C;
		
		$sql= "UPDATE clase SET nota='$nota', estado='completo' WHERE idClase='$ID'";
	
		if(mysqli_query($conexion,$sql)){
			header("location:../misCursos.html");
		}else{
			//header("location:../informacionCursoHtml.html");
		}
	}else{
		$C = 'Python';
		$ID = $nomUsuario.'-'.$C;
		$sql= "DELETE FROM clase WHERE idClase='$ID'";
		if(mysqli_query($conexion,$sql)){
			//header("location:../cursos/moduloHtml.html");
			header("location:../misCursos.html");
		}else{
			header("location:../informacionCursoHtml.html");
		}
	}
	mysqli_close($conexion);
?>
