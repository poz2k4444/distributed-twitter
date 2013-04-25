<?php
	//include ("PHP/Perfil.php");
	include ("PHP/conecction.php");
	//include ("PHP/Twitt.php");
	include ("PHP/Usuario.php");
	
	//$recipient = $_GET['recipient'];
	//$name = $_GET['name'];
	// $email = $_GET['email'];
	//$comment = $_GET['comment'];
	// $subject = $_GET['subject'];	
	// $notes = stripcslashes($notes);	
	// $message = " Message: $comment \r \n From: $name  \r \n Reply to: $email";
	//mail($recipient, $subject, $message);
	// $f=fopen("text.txt","a");
	// fwrite($f,"****************************************\r\n\r\n");
	// fwrite($f," Name: Paco\r\n");
	// fwrite($f," Mensaje: $comment\r\n\r\n");
	//$usuario = Perfil::findUser("Francisco Lopez", "1234");
	// fwrite($f," Mensaje: $usuario\r\n\r\n");
	
	$Nombre = $_POST['Nombre'];
	$IP = $_POST['IP'];
	
	//Nombre = "Perfil";
	//$IP = "10.32.210.5";
	
	//XMLHandler::saveTwittTavo("Francisco Lopez","12","poz2k444","Alguna",$Nombre.$IP,"1");
	//Perfil::findUser(, $_SESSION['pass'])
	//getPer()

	//ymdh
	//
	
	//NUEVO XMLHandler::saveTwittTavo("Francisco Lopez","7","Francisco Lopez","".$ahora['mday']."-".$ahora['mon']."-".$ahora['year'],$comment."//".$usuario->Nombre,"1");
	//XMLHandler::saveTwittTavo($usuario->getNombre(),XMLHandler::consecutivo($usuario->getNombre()),$usuario->getNombre(),"".$ahora['mday']."-".$ahora['mon']."-".$ahora['year'],$comment,"1");
	XMLHandler::addFriend($Nombre,$IP);
	conecction::updateFiles();
	@header("Location: intPerfil.php");
	//XMLHandler::saveTavo($usuario,new Twitt("3", usuario->Nick, "Alguna fecha", $comment,""));
	//fclose($f);
	
	
	
?>
