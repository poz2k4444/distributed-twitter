<?php

	include ("PHP/XMLHandler.php");
	include ("PHP/Usuario.php");

	$comment = $_GET['comment'];
	$usuario = XMLHandler::getPer();
	$ahora = getdate();
	
	

	XMLHandler::saveTwittTavo($usuario->getNombre(),XMLHandler::consecutivo($usuario->getNombre()),$usuario->getNombre(),"".$ahora['mday']."-".$ahora['mon']."-".$ahora['year'],$comment,XMLHandler::consecutivo($usuario->getNombre()));
	//header("Cache-Control: no-cache");
	@header("Location: intPerfil.php");

?>
