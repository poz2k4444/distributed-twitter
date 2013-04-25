<?php
	include ("PHP/Usuario.php");
	include ("PHP/Perfil.php");
	include ("PHP/Muro.php");
	$nick = $_POST['element_1'];
	$name = $_POST['element_2_1'];
	$pass = $_POST['element_7'];
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
	$_SESSION['name'] = $name;
	$_SESSION['nick'] = $nick;
	/*$usuario->getNick();
		$usuario->getNombre();
		$usuario->getIP();
		$usuario->getFechaDeNacimiento();
		$usuario->getEstadoCivil();
		$usuario->getSexo();
		$usuario->getEmail();
		$usuario->getTelefono();
		$usuario->getPassword();*/
	$host= gethostname();
	$ip = gethostbyname($host);
	$_SESSION['ip'] = $ip;
	$usuario = new Usuario($nick, $name, $ip, $date1.$date2.$date3, $edociv, $sexo, $mail, $phon1.$phon2.$phon3, $pass);
	Perfil::createPerfil($usuario);
	XMLHandler::createWall($usuario);
	if($_FILES!=null){
		if ((($_FILES["file"]["type"] == "image/png")
			|| ($_FILES["file"]["type"] == "image/jpeg")
			|| ($_FILES["file"]["type"] == "image/jpg")
			|| ($_FILES["file"]["type"] == "image/pjpeg"))
			&& ($_FILES["file"]["size"] < 2000000)){
				if ($_FILES["file"]["error"] > 0){
					echo "Error al subir Archivo"."<br />"."Return Code: " . $_FILES["file"]["error"] . "<br />";
		}
	  else{
		  strtok($_FILES["file"]["name"],".");
		  $extencion=strtok("."); 
		  move_uploaded_file($_FILES["file"]["tmp_name"],
		  "fotos/" . $name.".".$extencion);
		  echo "Carga Exitosa<br />";
		}
	  }
	else{
	  echo "Extencion Invalida";
	  }
	}
	@header("Location: intPerfil.php") ;
	
?>