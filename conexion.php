<?php
$servidor 	= "sql102.epizy.com";
$usuario  	= "epiz_30133195";
$contrasenha	= "aaiqQPYwMznT4";
$BD		= "epiz_30133195_smartsoft_academy";


$conexion = mysqli_connect($servidor, $usuario, $contrasenha, $BD);

if(!$conexion){
	echo "Fallo la conexion <br>";
	die ("connection failed: " . mysqli_connect_error());

}else{
}
?>