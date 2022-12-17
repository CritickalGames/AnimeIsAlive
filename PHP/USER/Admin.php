<?php
require_once "RAPIs.php";
class UserAdmin{
/////////PASAJE//////////////////////////
const swAnime= "ANIME";
const swEstado= "ESTADOS";
///////////////////Set
    function subirAnime($valorColumna){
        $obj=new Backoffice();
        $sw= self::swAnime;
        return subir($sw,[$valorColumna]);
    }
///////////////////Borrar
///////////////////Search
///////////////////Edit
///////////////////Get
///////////////////Group
///////////////////Listar
    function listarAnime(){
        $obj=new Backoffice();
        $sw= self::swAnime;
        return $obj->listar($sw,["", ""]);
    }

    function listarAnime_nombre($valorColumna){
        $obj=new Backoffice();
        $sw= self::swAnime;
        return $obj->listar($sw,["nombre",$valorColumna]);
    }

    function listarEstado_nombre($valorColumna){
        $obj=new Backoffice();
        $sw= self::swEstado;
        return $obj->listar($sw,["", $valorColumna]);
    }
    
///////////////////Subir
/////////////////////////
        function contarAnime(){
            $obj = new Backoffice ();
            return $obj->contar("ANIME");
        }
}

?>
