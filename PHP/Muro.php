<?php

class Muro{
	
	static private $Usuario;
	static private $Twitts= array();
	
	//constructor
	static function _Muro($usuario){
		self::$Usuario=$usuario;
                self::loadTwitts($usuario);
	}
	
	//obtener el Usuario del muro
	static function getUsuario(){
		return self::$Usuario;
	}
	
	//obtener el arreglo de twitts del muro
	static function getTwitts(){
		return self::$Twitts;
	}
	
	//cargar todos los twitts para el usuario
	static function loadTwitts($usuario){
            //(include "XMLHandler.php");
            self::$Twitts= XMLHandler::arrayTwitt($usuario);
	}
	
	//actualizar los twitts del usuario
	static function updateTwitts($usuario){
            self::loadTwitts($usuario);
	}
	
}
?>