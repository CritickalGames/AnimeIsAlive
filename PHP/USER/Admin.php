<?php
require_once "RAPIs.php";

class UserAdmin{
////////ANIME/////////////////////////////////////////
///////////////////Borrar
        function borrarAnime($nombre){
            $obj = new Backoffice ();
            return $obj->borrar("ANIME", [$nombre]);
        }
///////////////////Search
        function buscarAnimeNombre($name){
            $obj = new Backoffice ();
            return $obj->buscar("ANIME", ["Nombre",$name]);
        }
        function buscarAnimeAll($name){
            $obj = new Backoffice ();
            return $obj->buscar("ANIME", ["All",$name]);
        }
///////////////////Edit

///////////////////Get
        function getAnimeByNombre($name){
            $obj = new Backoffice ();
            return $obj->conseguir("ANIME", ["Nombre",$name]);
        }
///////////////////Group
///////////////////Listar
        function listarAnime(){
            $obj = new Backoffice ();
            return $obj->listar("ANIME", ["All", "ALL"]);
        }
        function listarAnimePorInicial($nombre){
            $obj = new Backoffice ();
            return $obj->listar("ANIME", ["inicial", $nombre]);
        }
///////////////////Subir
        function subirAnime($nombre ){
            $obj = new Backoffice ();
            
            $obj->subir("ANIME", ["$nombre"]);
        }
/////////////////////////
        function contarAnime(){
            $obj = new Backoffice ();
            return $obj->contar("ANIME");
        }

        
/////////ESTADOS//////////////////////////
///////////////////Borrar
    function borrarEstados($nombre){
        $obj = new Backoffice ();
        return $obj->borrar("ESTADOS", [$nombre]);
    }
///////////////////Search
    function buscarEstados($name){
        $obj = new Backoffice ();
        return $obj->buscar("ESTADOS", [$name]);
    }
///////////////////Edit
    function editarEstadosCapitulo($nombre, $temporada, $ATR){
        $obj = new Backoffice ();
        return $obj->editar("ESTADOS", ["Capitulo",$nombre, $temporada, $ATR]);
    }
    function editarEstadosEstado($nombre, $Temperatura, $ATR){
        $obj = new Backoffice ();
        return $obj->editar("ESTADOS", ["Estado",$nombre, $Temperatura, $ATR]);
    }
///////////////////Get
        function getEstadosByNombre($name){
            $obj = new Backoffice ();
            return $obj->conseguir("ESTADOS", ["Nombre",$name, "ALL"]);
        }
        function getEstadosByID($nombre, $temporada){
            $obj = new Backoffice ();
            return $obj->conseguir("ESTADOS", ["ID",$nombre, $temporada]);
        }
///////////////////Group
    function agruparEstadosForTemporadaByNombre($nombre){
        $obj = new Backoffice ();
        return $obj->agrupar("ESTADOS", ["ForTemporadaByNombre", $nombre]);
    }
    function agruparEstadosForTemporadaByATRNombre(){
        $obj = new Backoffice ();
        return $obj->agrupar("ESTADOS", ["ForTemporadaByATRNombre", "ALL"]);
    }
    function agruparEstadosForTemporadaByInicial($nombre){
        $obj = new Backoffice ();
        return $obj->agrupar("ESTADOS", ["ForTemporadaByNombre", $nombre]);
    }
///////////////////Listar
    function listarEstados(){
        $obj = new Backoffice ();
        return $obj->listar("ESTADOS", ["All", "ALL"]);
    }

    function listarEstadosPorNombre($nombre){
        $obj = new Backoffice ();
        return $obj->listar("ESTADOS", ["nombre", $nombre]);
    }
///////////////////Subir
    function subirEstados($nombre,$temporada,$capitulo,$estado ){
        $obj = new Backoffice ();
        echo "<br>-admin subir estado-";
        $obj->subir("ESTADOS", [$nombre, $temporada, $capitulo, $estado]);
    }
/////////////////////////
    function contarEstados(){
        $obj = new Backoffice ();
        return $obj->contar("ESTADOS");
    }

}

//$obj = new UserAdmin();

//$obj->editarEstadosCapitulo("z",1,7);

?>
