<?php
include ("XMLHandler.php");
class conecction{

    
    //Fiuncon conectar
    public static function is_connected(){
            //check to see if the local machine is connected to the web
            //uses sockets to open a connection to apisonline.com
            $connected = @fsockopen($ip, 80, $errno, $errstr, 10);
            if ($connected){
                $is_conn = true;
                fclose($connected);
            }else{
                $is_conn = false;
            }
            return $is_conn;

     }//end is_connected function 

     public static function updateInfoAmigoTxt($ip, $nombre){
         $fs=fopen("http://".$ip."/Twitter/".$nombre.".txt");
        $array=array();
        while (!feof($fs))
            $array[]=trim(fgets($fs));
        $usuario= new Usuario($array[4],$nombre , $ip,"","","","","",$array[8]);
       //    return $array;
        return $array;
     }

     public static function updateInfoAmigoXML($ip, $nombre){
        ///////////////////////////////////////////////////////////////////////////////////////////////////////
         $doc = new DOMDocument();
        if(self::is_connected($ip)){
            $doc->load("http://".$ip."/Twitter/perfil.xml");
          
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
                $pass=$doc->getElementsByTagName("password");
                $pass=$pass->item(0)->nodeValue;
                
                return $usuario= new Usuario($nick, $nombre, $ip, $fn, $ec, $sexo, $email, $telefono, $pass);
        }
        else{
            echo "else";
        }
     }
    public static function updateFiles(){
            $arrayAmigos=array();
            $arrayAmigos= XMLHandler::loadFrends();
            foreach($arrayAmigos as $amigo){
                if(self::is_connected($amigo->getIP())){
                   $img = "http://".$amigo->getIP()."/Twitter/".$amigo->getNombre().".xml";//////////////////cambiar el twitter por appdis
                   $copydir="";
                   copy($img, $copydir."".$amigo->getNombre().".xml");
				   
				   $img1 = "http://".$amigo->getIP()."/Twitter/fotos/".$amigo->getNombre().".jpg";//////////////////cambiar el twitter por appdis
                   $copydir="./fotos/";
                   copy($img1, $copydir."".$amigo->getNombre().".jpg");
				   
                   
                }
            }
     }
        
}


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
