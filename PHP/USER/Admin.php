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
    function subirEstados($valorClave1, $valorClave2, $valorColumna1, $valorColumna2){
        $obj=new Backoffice();
        $sw= self::swEstados;
        return $obj->subir($sw,[$valorClave1, $valorClave2, $valorColumna1, $valorColumna2]);
    }
///////////////////Borrar
    function borrarAnimes($valorColumna){
        $obj=new Backoffice();
        $sw= self::swAnimes;
        return $obj->borrar($sw,[$valorColumna]);
    }
///////////////////Search
///////////////////Edit
    function editarEstados_Capitulo($valorClave1, $valorClave2, $valorColumna){
        $obj=new Backoffice();
        $sw= self::swEstados;
        return $obj->editar($sw,["capitulo", $valorClave1, $valorClave2, $valorColumna]);
    }
    
    function editarEstados_Estado($valorClave1, $valorClave2, $valorColumna){
        $obj=new Backoffice();
        $sw= self::swEstados;
        return $obj->editar($sw,["estado", $valorClave1, $valorClave2, $valorColumna]);
    }
///////////////////Get
    function getEstados_ByPK($valorClave1, $valorClave2){
        $obj=new Backoffice();
        $sw= self::swEstados;
        return $obj->get($sw,["PK", $valorClave1, $valorClave2]);
    }
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
        return $obj->listar($sw,["nombre", $valorColumna]);
    }
    
///////////////////Subir
/////////////////////////
        function contarAnime(){
            $obj = new Backoffice ();
            return $obj->contar("ANIME");
        }
}

?>
