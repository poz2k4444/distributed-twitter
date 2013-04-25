<?php

class XMLHandler{
    
     public static function findUsuario($nombre,$pass){
        
        $doc = new DOMDocument();
        if(file_exists("perfil.xml")){
		$doc->load("perfil.xml");
		$twitArray=array();		
		$id=$doc->getElementsByTagName("nombre");
                $id=$id->item(0)->nodeValue;
                $password=$doc->getElementsByTagName("password");
                $password=$password->item(0)->nodeValue;
                $nick=$doc->getElementsByTagName("nick");
                $nick=$nick->item(0)->nodeValue;
                $ip=$doc->getElementsByTagName("ip");
                $ip=$ip->item(0)->nodeValue;
                $fn=$doc->getElementsByTagName("fechadenacimiento");
                $fn=$fn->item(0)->nodeValue;
                $ec=$doc->getElementsByTagName("estadocivil");
                $ec=$ec->item(0)->nodeValue;
                $sexo=$doc->getElementsByTagName("sexo");
                $sexo=$sexo->item(0)->nodeValue;
                $email=$doc->getElementsByTagName("email");
                $email=$email->item(0)->nodeValue;
                $telefono=$doc->getElementsByTagName("telefono");
                $telefono=$telefono->item(0)->nodeValue;
                
                if($id==$nombre && $password==$pass){
                    $usuario=new Usuario($nick,$nombre,$ip, $fn,$ec,$sexo,$email, $telefono, $password);
                    return $usuario;
                }
                else
                    return false;
        }
            else
                    echo "Archivo inexistente";
                }

				
				
				
    public static function loadFrends(){
        $doc = new DOMDocument();
        if(file_exists("amigos.xml")){
            $doc->load("amigos.xml");
            $userArray=array();	
            $amigos=$doc->getElementsByTagName("amigo");

            foreach ($amigos as $amigo){
		$Nick=$amigo->getElementsByTagName("nick");
		$Nick=$Nick->item(0)->nodeValue;

		$Nombre=$amigo->getElementsByTagName("nombre");
		$Nombre=$Nombre->item(0)->nodeValue;
                
                $Ip=$amigo->getElementsByTagName("ip");
		$Ip=$Ip->item(0)->nodeValue;

		$Fecha=$amigo->getElementsByTagName("fechadenacimiento");
		$Fecha=$Fecha->item(0)->nodeValue;

		$EstadoCivil=$amigo->getElementsByTagName("estadocivil");
		$EstadoCivil=$EstadoCivil->item(0)->nodeValue;

		$Sexo=$amigo->getElementsByTagName("sexo");
		$Sexo=$Sexo->item(0)->nodeValue;

		$Email=$amigo->getElementsByTagName("email");
		$Email=$Email->item(0)->nodeValue;

		$Telefono=$amigo->getElementsByTagName("telefono");
		$Telefono=$Telefono->item(0)->nodeValue;

		$Password=$amigo->getElementsByTagName("password");
		$Password=$Password->item(0)->nodeValue;
		//include("Usuario.php");

                $usuario=new Usuario($Nick,$Nombre, $Ip,$Fecha,$EstadoCivil,$Sexo,$Email,$Telefono,$Password);
		array_push($userArray, $usuario);
            }
            return $userArray;
        }
        else{
            self::createAmigos();
            //self::arrayFrends($usuario);
        }
    }
    public static function loadCapirotada(){
        $arrayCapirotada=array();

        $arrayAmigos=array();
        $arrayAmigos= self::loadFrends();
        foreach($arrayAmigos as $amigo){
             $arrayTwitts=array();
             $arrayTwitts=self::arrayTwitt($amigo->getNombre());
             foreach($arrayTwitts as $twitt)
                array_push($arrayCapirotada, $twitt);
        }
        return $arrayCapirotada;

    }
    public static function addFriend($nombre,$ip){
		$dom = new DOMDocument();
		if (file_exists("amigos.xml")){
			$dom->load("amigos.xml");

			$amigos = $dom->documentElement;

			$infoUsuario= conecction::updateInfoAmigoXML($ip, $nombre);

			$amigo=$dom->createElement('amigo');
			$nick = $dom->createElement('nick',$infoUsuario->getNick());
			$nombre = $dom->createElement('nombre',$infoUsuario->getNombre());
			$ip = $dom->createElement('ip',$infoUsuario->getIP());
			$fecha = $dom->createElement('fechadenacimiento',$infoUsuario->getFechaDeNacimiento());
			$estadocivil = $dom->createElement('estadocivil',$infoUsuario->getEstadoCivil());
			$sexo = $dom->createElement('sexo',$infoUsuario->getSexo());
			$email = $dom->createElement('email',$infoUsuario->getEmail());
			$telefono = $dom->createElement('telefono',$infoUsuario->getTelefono());
			$password = $dom->createElement('password',$infoUsuario->getPassword());


			$amigo->appendChild($nick);
			$amigo->appendChild($nombre);
			$amigo->appendChild($ip);
			$amigo->appendChild($fecha);
			$amigo->appendChild($estadocivil);
			$amigo->appendChild($sexo);
			$amigo->appendChild($email);
			$amigo->appendChild($telefono);
			$amigo->appendChild($password);

			$amigos->appendChild($amigo);
			$dom->save("amigos.xml",null);

		}
		else{
			self::createAmigos();
			self::addFriend($Nombre,$ip);
		}
	}
    public static function delFriend($usuario){
        $doc = new DOMDocument();
        if(file_exists("amigos.xml")){
            $doc->load("amigos.xml");

            $amigos=$doc->getElementsByTagName("amigo");
            foreach ($amigos as $amigo){

		$Nombre=$amigo->getElementsByTagName("nombre");
		$Nombre=$amigo->item(0)->nodeValue;

                $Ip=$amigo->getElementsByTagName("ip");
		$Ip=$amigo->item(0)->nodeValue;

                if($usuario->getIP()==$Ip&&$usuario->getNombre()==$Nombre){
                    //borrar guey
                    $amigos->removeChild($amigo);
                    $dom->save("amigos.xml",null);
                    return true;
                }
           }
           return false;
        }
        else{
            createAmigos();
            arrayFrends($usuario);
        }
    }
    public static function findFriend($nombre){
        $doc = new DOMDocument();
        if(file_exists("amigos.xml")){
            $doc->load("amigos.xml");

            $amigos=$doc->getElementsByTagName("amigo");
            foreach ($amigos as $amigo){

		$Nombre=$amigo->getElementsByTagName("nombre");
		$Nombre=$Nombre->item(0)->nodeValue;

                if($nombre==$Nombre){
                    $Nick=$amigo->getElementsByTagName("nick");
                    $Nick=$Nick->item(0)->nodeValue;

                    $Nombre=$amigo->getElementsByTagName("nombre");
                    $Nombre=$Nombre->item(0)->nodeValue;

                    $Ip=$amigo->getElementsByTagName("ip");
                    $Ip=$Ip->item(0)->nodeValue;

                    $Fecha=$amigo->getElementsByTagName("fechadenacimiento");
                    $Fecha=$Fecha->item(0)->nodeValue;

                    $EstadoCivil=$amigo->getElementsByTagName("estadocivil");
                    $EstadoCivil=$EstadoCivil->item(0)->nodeValue;

                    $Sexo=$amigo->getElementsByTagName("sexo");
                    $Sexo=$Sexo->item(0)->nodeValue;

                    $Email=$amigo->getElementsByTagName("email");
                    $Email=$Email->item(0)->nodeValue;

                    $Telefono=$amigo->getElementsByTagName("telefono");
                    $Telefono=$Telefono->item(0)->nodeValue;

                    $Password=$amigo->getElementsByTagName("password");
                    $Password=$Password->item(0)->nodeValue;

                    $usuario=new Usuario($Nick,$Nombre, $Ip,$Fecha,$EstadoCivil,$Sexo,$Email,$Telefono,$Password);
                    return $usuario;
                }
           }
           return null;
        }
        else{
            createAmigos();
            arrayFrends($usuario);
        }
    }

    public static function is_connected()
        { 
            //check to see if the local machine is connected to the web 
            $connected = @fsockopen("www.itechroom.com", 80, $errno, $errstr, 30);
              if ($connected){ 
                $is_conn = true; 
                fclose($connected); 
            }else{ 
                $is_conn = false; 
            } 
            return $is_conn; 

   }//end is_connected function
   public function reTwitt(){

/////////////////////////////////
   }
    public static function saveTwitt($usuario,$twitt){
		
		$dom = new DOMDocument();
                if (file_exists($usuario.".xml")){
		$dom->load($usuario.".xml");
		$muro = $dom->documentElement;
		
		$chan=$dom->getElementsByTagName("channel")->item(0);

		$item = $dom->createElement('item');
		$prop = $dom->createElement('guid');
		$id = $dom->createTextNode($twitt->Id);
		$prop->appendChild($id);
		$item->appendChild($prop);
		$prop = $dom->createElement('author',$twitt->Nick);
		$item->appendChild($prop);
		$prop = $dom->createElement('pubDate',$twitt->Fecha);
		$item->appendChild($prop);
		$prop = $dom->createElement('description',$twitt->Mensaje);
		$item->appendChild($prop);
		$prop = $dom->createElement('link',$twitt->idTwittPadre);
		$item->appendChild($prop);

		$chan->appendChild($item);
		$muro->appendChild($chan);
		header("Content-type: text/xml");
		$dom->save($usuario.".xml",null);
		echo $dom->saveXML();
                }
                else
                    echo "No hay archivo twits";
	}


	public static function createAmigos(){

            if(file_exists("amigos.xml")){

                echo "ya existe el archivo";
            }
            else{
				$dom=new DOMDocument();
                $amigos=$dom->createElement('amigos');
                $dom->appendChild($amigos);
				$dom->save("amigos.xml",null);
            }

	}
        public static function createPerfil($infoUsuario){

            if(file_exists("perfil.xml")){
                $perfil=new DOMDocument();
				$perfil->load("perfil.xml");

               $perfil->getElementsByTagName("nombre")->item(0)->nodeValue= $infoUsuario->getNombre();
               $perfil->getElementsByTagName("nick")->item(0)->nodeValue= $infoUsuario->getNick();
               $perfil->getElementsByTagName("ip")->item(0)->nodeValue= $infoUsuario->getIP();
               $perfil->getElementsByTagName("fechadenacimiento")->item(0)->nodeValue= $infoUsuario->getFechaDeNacimiento();
               $perfil->getElementsByTagName("estadocivil")->item(0)->nodeValue= $infoUsuario->getEstadoCivil();
               $perfil->getElementsByTagName("sexo")->item(0)->nodeValue= $infoUsuario->getSexo();
               $perfil->getElementsByTagName("email")->item(0)->nodeValue= $infoUsuario->getEmail();
               $perfil->getElementsByTagName("telefono")->item(0)->nodeValue= $infoUsuario->getTelefono();
               $perfil->getElementsByTagName("password")->item(0)->nodeValue= $infoUsuario->getPassword();

               $perfil->save("perfil.xml",null);
               /*header("Content-type: text/xml");
                echo $perfil->saveXML();*/

            }
            else{
                
		$dom=new DOMDocument("1.0","ISO-8859-1");
                
                $dom=new DOMDocument();
				
		$rss = $dom->createElement('rss');
		
		$rss->setAttribute('version', 2.0);
		
		$dom->appendChild($rss);
		
		$channel = $dom->createElement('channel');
		
		$rss->appendChild($channel);
		
		$perfil=$dom->createElement('perfil');
               
                    $nick = $dom->createElement('nick',$infoUsuario->getNick());
                    $nombre = $dom->createElement('nombre',$infoUsuario->getNombre());
                    $ip = $dom->createElement('ip',$infoUsuario->getIP());
                    $fecha = $dom->createElement('fechadenacimiento',$infoUsuario->getFechaDeNacimiento());
                    $estadocivil = $dom->createElement('estadocivil',$infoUsuario->getEstadoCivil());
                    $sexo = $dom->createElement('sexo',$infoUsuario->getSexo());
                    $email = $dom->createElement('email',$infoUsuario->getEmail());
                    $telefono = $dom->createElement('telefono',$infoUsuario->getTelefono());
                    $password = $dom->createElement('password',$infoUsuario->getPassword());
		
				$channel->appendChild($nick);
				$channel->appendChild($nombre);
				$channel->appendChild($ip);
				$channel->appendChild($fecha);
                $channel->appendChild($estadocivil);
                $channel->appendChild($sexo);
                $channel->appendChild($email);
                $channel->appendChild($telefono);
                $channel->appendChild($password);
				$dom->save("perfil.xml",null);
                /*header("Content-type: text/xml");
		
             
		
                header("Content-type: text/xml");
                echo $dom->saveXML();*/
            }

	}



	//Muro
	public static function createWall($usuario){
	
            if(file_exists($usuario->getNombre().".xml")){
                
                echo "ya existe el archivo";
            }
            else{
		$dom=new DOMDocument();
				
		$rss = $dom->createElement('rss');
		
		$rss->setAttribute('version', 2.0);
		
		$dom->appendChild($rss);
		
		$channel = $dom->createElement('channel');
		
		$rss->appendChild($channel);
		
		$pTitle = $dom->createElement('title', $usuario->getNombre());
		$pLink  = $dom->createElement('link', $usuario->getIP());
		$pDesc  = $dom->createElement('description', "Datos del muro de Usuario");
		$pPubDate = $dom->createElement('pubDate',"Fecha");
		
		$channel->appendChild($pTitle);
		$channel->appendChild($pLink);
		$channel->appendChild($pDesc);
		$channel->appendChild($pPubDate);
                header("Content-type: text/xml");
		$dom->save($usuario->getNombre().".xml",null);
                $dom->saveXML();
            }
		
	}

	//buscar comentarios
	public static function findComents($twitt_id, $nombre,$yomismo){
		$comentsArray=array();
		if(file_exists("amigos.xml")){

			$arregloAmigos=XMLHandler::loadFrends();
			foreach($arregloAmigos as $amigo){
			//echo "entro";
				$Twitt= XMLHandler::arrayTwitt($amigo->getNombre());
				foreach ($Twitt as $twitts){
					$idpadre=$nombre." ".$twitt_id;
					if($twitts->idTwittPadre==$idpadre){
						array_push($comentsArray, $twitts);
					}
				}
			}
			echo "entro";
			$Twitt= XMLHandler::arrayTwitt($yomismo);
				foreach ($Twitt as $twitts){
					echo "entro";
					$idpadre=$nombre." ".$twitt_id;
					if($twitts->idTwittPadre==$idpadre){
						array_push($comentsArray, $twitts);
					}
				}
			return $comentsArray;
		}else
			return false;
	}

	public static function findPadres($nombre){
		$comentsArray=array();

		$Twitt= XMLHandler::arrayTwitt($nombre);
		foreach ($Twitt as $twitts){
			$idpadre=$twitts->idTwittPadre;

			if($idpadre/2){
				array_push($comentsArray, $twitts);
			}
		}
		return $comentsArray;
	}
        //eliminar tweets
	public static function delTwitt($twitt, $nombre){
		$doc = new DOMDocument();
		if(file_exists($nombre.".xml")){
			$doc->load($nombre.".xml");

			$rss = $doc->documentElement;

			$channel=$rss->getElementsByTagName("channel")->item(0);

			$items=$channel->getElementsByTagName("item");

			foreach ($items as $item){
			$id=$item->getElementsByTagName("guid");
			$id=$id->item(0)->nodeValue;
			if($twitt->Id==$id){
				$channel->removeChild($item);
				$doc->save($nombre.".xml");
				break;
			}
		}
		return false;
		}else{
			echo "no se encontro el xml";
		}

	}
	
	
	
	
	public static function consecutivo($usuario){
		
		$array=  XMLHandler::arrayTwitt($usuario);
                $tamaño = sizeof($array);
                $regreso=$array[$tamaño-1]->Id;
                return $regreso+1;
    }
	
	
	
	
		public static function saveTwittTavo($usuario,$Id,$Nick,$Fecha,$Mensaje,$idTwittPadre){
		
		$dom = new DOMDocument();
                if (file_exists($usuario.".xml")){
		$dom->load($usuario.".xml");
		$muro = $dom->documentElement;
		
		$chan=$dom->getElementsByTagName("channel")->item(0);

		$item = $dom->createElement('item');
		$prop = $dom->createElement('guid');
		$id = $dom->createTextNode($Id);
		$prop->appendChild($id);
		$item->appendChild($prop);
		$prop = $dom->createElement('author',$Nick);
		$item->appendChild($prop);
		$prop = $dom->createElement('pubDate',$Fecha);
		$item->appendChild($prop);
		$prop = $dom->createElement('description',$Mensaje);
		$item->appendChild($prop);
		$prop = $dom->createElement('link',$idTwittPadre);
		$item->appendChild($prop);

		$chan->appendChild($item);
		$muro->appendChild($chan);
		$dom->save($usuario.".xml",null);
                }
                else
                    echo "No hay archivo twits";
	}
	public static function getPer(){
        
        $doc = new DOMDocument();
        if(file_exists("perfil.xml")){
		$doc->load("perfil.xml");
		$twitArray=array();		
		$nombre=$doc->getElementsByTagName("nombre");
                $nombre=$nombre->item(0)->nodeValue;
                $password=$doc->getElementsByTagName("password");
                $password=$password->item(0)->nodeValue;
                $nick=$doc->getElementsByTagName("nick");
                $nick=$nick->item(0)->nodeValue;
                $ip=$doc->getElementsByTagName("ip");
                $ip=$ip->item(0)->nodeValue;
                $fn=$doc->getElementsByTagName("fechadenacimiento");
                $fn=$fn->item(0)->nodeValue;
                $ec=$doc->getElementsByTagName("estadocivil");
                $ec=$ec->item(0)->nodeValue;
                $sexo=$doc->getElementsByTagName("sexo");
                $sexo=$sexo->item(0)->nodeValue;
                $email=$doc->getElementsByTagName("email");
                $email=$email->item(0)->nodeValue;
                $telefono=$doc->getElementsByTagName("telefono");
                $telefono=$telefono->item(0)->nodeValue;
				
				$usuario=new Usuario($nick,$nombre,$ip, $fn,$ec,$sexo,$email, $telefono, $password);
				return $usuario;
        }
            else
                    echo "Archivo inexistente";
                }
	
	
	
	
	//Funcion que regresa un array de twits de un muro que se identifica por el
	
	public static function arrayTwitt($usuario){
		
		$doc = new DOMDocument();
                if(file_exists($usuario.".xml")){
		$doc->load($usuario.".xml");
		$twitArray=array();		
		$items=$doc->getElementsByTagName("item");
		
		foreach ($items as $item){
			
			 
			$id=$item->getElementsByTagName("guid");
			$id=$id->item(0)->nodeValue;
			
			$nick=$item->getElementsByTagName("author");
			$nick=$nick->item(0)->nodeValue;
			
			$fecha=$item->getElementsByTagName("pubDate");
			$fecha=$fecha->item(0)->nodeValue;
			
			$mensaje=$item->getElementsByTagName("description");
			$mensaje=$mensaje->item(0)->nodeValue;
                        
                        $padre=$item->getElementsByTagName("link");
			$padre=$padre->item(0)->nodeValue;
			$twit=new Twitt($id,$nick,$fecha,$mensaje,$padre);
			
			array_push($twitArray, $twit);
			//$impresion=$twitArray[0];
			//echo $impresion->Id;
		}
		return $twitArray;
                }
                else
                    echo "Archivo inexistente";
                }
}
?>