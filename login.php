<?php
	include("PHP/Perfil.php");
	include("PHP/Usuario.php");
	session_start();
	$user = $_POST['txtNombre'];
	$pass = $_POST['txtPass'];
	if(!Perfil::findUser($user, $pass)){
		echo "<script type='text/javascript'>alert('Really annoying pop-up!');</script>";
		@header("Location: index.php") ;
	}else{
		$usuario = Perfil::findUser($user, $pass);
		//print_r($usuario);
		$_SESSION['usuario'] = $usuario->getNombre();
		$_SESSION['nick'] = $usuario->getNick();
		$_SESSION['name'] = $usuario->getNombre();
		$_SESSION['ip'] = $usuario->getIP();
		$_SESSION['date'] = $usuario->getFechaDeNacimiento();
		$_SESSION['estadoCivil'] = $usuario->getEstadoCivil();
		$_SESSION['sexo'] = $usuario->getSexo();
		$_SESSION['mail'] = $usuario->getEmail();
		$_SESSION['tel'] = $usuario->getTelefono();
		$_SESSION['pass'] = $usuario->getPassword();
		//$_SESSION['nombre'] = $usuario->getNombre();
		//$_SESSION['user'] = Perfil::findUser($user, $pass);
		@header("Location: intPerfil.php") ;
	}
?>