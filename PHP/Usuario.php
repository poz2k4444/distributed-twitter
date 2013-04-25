<?php
(include "Twitt.php");
class Usuario{

	//variables globales
	private $Nick;
	private $Nombre;
	private $IP;
	private $FechDeNacimiento;
	private $EstadoCivil;
	private $Sexo;
	private $Email;
	private $Telefono;
	private $Password;


	//constructor es
	public function __construct($Nick,$Nombre,$IP, $FechaDeNacimiento,$EstadoCivil,$Sexo,$Email, $Telefono, $Password) {
		$this->Nick=$Nick;
		$this->Nombre=$Nombre;
		$this->IP=$IP;
		$this->FechDeNacimiento=$FechaDeNacimiento;
		$this->EstadoCivil=$EstadoCivil;
		$this->Sexo=$Sexo;
		$this->Email=$Email;
		$this->Telefono=$Telefono;
                $this->Password=$Password;
	}
        /**
	public function __construct($Nick,$Nombre,$IP) {
		self::$Nick=$Nick;
		self::$Nombre=$Nombre;
		self::$IP=$IP;
	}
	**/
	
	//setters
	public function setNick($nick){
		self::$Nick=$nick;
	}
	public function setNombre($nombre){
		self::$Nombre=$nombre;
	}
	public function setIP($ip){
		self::$IP=$ip;
	}
	public function setFechaDeNacimiento($fechadenacimiento){
		self::$FechDeNacimiento=$fechadenacimiento;
	}
	public function setEstadoCivil($estadocivil){
		self::$EstadoCivil=$estadocivil;
	}
	public function setSexo($sexo){
		self::$Sexo=$sexo;
	}
	public function setEmail($email){
		self::$Email=$email;
	}
	public function setTelefono($telefono){
		self::$Telefono=$telefono;
	}
	public function setPassword($Password){
		self::$Password=$Password;
	}

	//getters
	public function getNick(){
		return $this->Nick;
	}
	public function getNombre(){
		return $this->Nombre;
	}
	public function getIP(){
		return $this->IP;
	}
	public function getFechaDeNacimiento(){
		return $this->FechDeNacimiento;
	}
	public function getEstadoCivil(){
		return $this->EstadoCivil;
	}
	public function getSexo(){
		return $this->Sexo;
	}
	public function getEmail(){
		return $this->Email;
	}
	public function getTelefono(){
		return $this->Telefono;
	}
	public function getPassword(){
		return $this->Password;
	}

        //postTwitt
	public static function postTwitt(Twitt $twitt){
            XMLHandler::saveTwitt($twitt);
	}
	
	//repostTwitt
	public static function reTwitt(Twitt $twitt){
	   ////////////////////////////////////////////////////////////     
	}

	//repostTwitt
	public static function commentTwitt(Twitt $twitt, $twittPadre){
		twitt::setTwittPadre($twittPadre->$idTwittPadre);
		postTwitt($twitt,$twittPadre);
	}	
	
	//eliminarTwitt
	public static function delTwitt(Twitt $twitt){
            XMLHandler::delTwitt($twitt);
	}
}
?>