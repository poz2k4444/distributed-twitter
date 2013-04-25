<?php
include("XMLHandler.php");
class Perfil{
	static private $Friends= array();
	static private $Usuario;
	
	//constructor del perfil
	static function _Perfil($usuario){
		self::$Usuario=$usuario;
		self::$Friends=self::loadFriends();
	}
	static function createPerfil($usuario){
		XMLHandler::createPerfil($usuario);
	}
	
	static function findAmigo($usuario){
		return XMLHandler::findFriend($usuario);
	}
	
	//obtener el usuario
	static function getUsuario(){
		return self::$Usuario;
	}
	
	//obtiene todos los amigos del usuario
	static function getAmigos(){
		return self::$Friends;
	}
	
	//agregar un nuevo amigo
	static function addFriend($nombre,$ip){
            $user= new Usuario("", $nombre, $ip, "", "", "", "", "", "");
            XMLHandler::addFriend($user);
	}
	
	//eliminar amigo
	static function delFriend($nombre, $ip){
            $user= new Usuario("", $nombre, $ip, "", "", "", "", "", "");
            XMLHandler::delFriend($user);
	}
	
	//carga los amigos 
	static function loadFriends(){
           return XMLHandler::loadFriends();
	}
	static function findUser($name, $pass){
           return XMLHandler::findUsuario($name,$pass);
	}
}
?>