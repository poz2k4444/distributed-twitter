<?php
	include("PHP/Perfil.php");
	include("PHP/Usuario.php");
	session_start();
	$amigo = $_GET['friend'];
	if(!Perfil::findAmigo($amigo)){
		//@header("Location: login.php");
	}else{
		$usuario = Perfil::findAmigo($amigo);
		//print_r($usuario);
		$_SESSION['nick'] = $usuario->getNick();
		$_SESSION['name'] = $usuario->getNombre();
		$_SESSION['ip'] = $usuario->getIP();
		$_SESSION['date'] = $usuario->getFechaDeNacimiento();
		$_SESSION['estadoCivil'] = $usuario->getEstadoCivil();
		$_SESSION['sexo'] = $usuario->getSexo();
		$_SESSION['mail'] = $usuario->getEmail();
		$_SESSION['tel'] = $usuario->getTelefono();
		//$_SESSION['nombre'] = $usuario->getNombre();
		//$_SESSION['user'] = Perfil::findUser($user, $pass);
		@header("Location: intPerfil.php") ;
	}
?>