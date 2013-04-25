<?php
class Twitt{
	
	//variables globales
	public $Id;
	public  $Nick;
	public  $Fecha;
	public $Mensaje;
	public  $idTwittPadre; //ip id  10.32.45 1
	
	//constructor
	public function __construct($Id, $Nick, $Fecha, $Mensaje,$idTwittPadre) {
		$this->Id=$Id;
		$this->Nick=$Nick;
		$this->Fecha=$Fecha;
		$this->Mensaje=$Mensaje;
                $this->idTwittPadre=$idTwittPadre;
	}
	//getters
	public static function getTwitt(){
		return self;
	}
}
?>