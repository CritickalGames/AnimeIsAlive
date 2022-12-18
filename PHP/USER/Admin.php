<?php
require_once "RAPIs.php";
class UserAdmin{
/////////PASAJE//////////////////////////
const swAnimes= "ANIMES";
const swEstados= "ESTADOS";
const swPortadas= "PORTADAS";
///////////////////Set
    function subirAnimes($valorColumna){
        $obj=new Backoffice();
        $sw= self::swAnimes;
        return $obj->subir($sw,[$valorColumna]);
    }
///////////////////Borrar
///////////////////Search
///////////////////Edit
///////////////////Get
///////////////////Group
///////////////////Listar
    function listarAnimes(){
        $obj=new Backoffice();
        $sw= self::swAnimes;
        return $obj->listar($sw,["", ""]);
    }

    function listarAnimes_nombre($valorColumna){
        $obj=new Backoffice();
        $sw= self::swAnimes;
        return $obj->listar($sw,["nombre",$valorColumna]);
    }

    function listarPortadas_nombre($valorColumna){
        $obj=new Backoffice();
        $sw= self::swPortadas;
        return $obj->listar($sw,["nombre",$valorColumna]);
    }

    function listarEstados_nombre($valorColumna){
        $obj=new Backoffice();
        $sw= self::swEstados;
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
