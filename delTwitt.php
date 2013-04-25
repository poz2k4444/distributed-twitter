<?php
	include ("PHP/XMLHandler.php");
	include("PHP/Twitt.php");
	session_start();
	$array1 = XMLHandler::arrayTwitt($_SESSION['name']);
	$id = $_GET['id'];
	$impresion = $array1[$id];
	echo $_SESSION['name'];
	print_r(XMLHandler::delTwitt($impresion, $_SESSION['name']));
	@header("Location: intPerfil.php") ;
?>