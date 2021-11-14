<?php

session_start();
$login = $_SESSION['login'];

if(!$login){
	header('index.html');
}
else{
	$nomUsuario = $_SESSION['nUsuario'];
}
?>