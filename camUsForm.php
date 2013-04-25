<?php
	include ("PHP/Usuario.php");
	include ("PHP/Perfil.php");
	$nick = $_POST['element_1'];
	$name = $_POST['element_2_1'];
	$pass = $_POST['element_7'];
	$pass1 = $_POST['element_17'];
	$sexo = $_POST['element_3'];
	$date1 = $_POST['element_4_1'];
	$date2 = $_POST['element_4_2'];
	$date3 = $_POST['element_4_3'];
	$mail = $_POST['element_5'];
	$phon1 = $_POST['element_6_1'];
	$phon2 = $_POST['element_6_2'];
	$phon3 = $_POST['element_6_3'];
	$edociv = $_POST['element_8'];
	$_SESSION['estadoCivil'] = $edociv;
	$_SESSION['mail'] = $mail;
	$_SESSION['date'] = $date1.$date2.$date3;
	$_SESSION['tel'] = $phon1.$phon2.$phon3;
	$_SESSION['sexo'] = $sexo;
	$_SESSION['pass'] = $pass;
	$_SESSION['pass1'] = $pass1;
	$_SESSION['name'] = $name;
	$_SESSION['nick'] = $nick;
	$host= gethostname();
	$ip = gethostbyname($host);
	$_SESSION['ip'] = $ip;
	//@header("Location: intPerfil.php") ;
	if(!Perfil::findUser($name, $pass1)){
		echo "si polea";
		$usuario = new Usuario($nick, $name, $ip, $date1.$date2.$date3, $edociv, $sexo, $mail, $phon1.$phon2.$phon3, $pass1);
		Perfil::createPerfil($usuario);
		@header("Location: intPerfil.php") ;
	}else{
		echo "NO POLEA";
		@header("Location: intPerfil.php") ;
	}
	
	
?>