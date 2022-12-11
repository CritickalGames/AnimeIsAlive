<?php
require_once "RAPIs.php";

class UserAdmin{
/////////DATOS//////////////////////////
const swDatos= "DATOS";
///////////////////Borrar
    function borrarDatos($nombre){
        $obj = new Backoffice ();
        $swDatos = self::swDatos;
        return $obj->borrar($swDatos, [$nombre]);
    }
///////////////////Search
    function buscarDatosPorTelefono($name){
        $obj = new Backoffice ();
        $swDatos = self::swDatos;
        return $obj->buscar($swDatos, ["Telefono", $name]);
    }
    function buscarDatosPorNombre($name){
        $obj = new Backoffice ();
        $swDatos = self::swDatos;
        return $obj->buscar($swDatos, ["Nombre", $name]);
    }
    function buscarDatosPorApellido($name){
        $obj = new Backoffice ();
        $swDatos = self::swDatos;
        return $obj->buscar($swDatos, ["Apellido", $name]);
    }
    function buscarDatosPorFecha($name){
        $obj = new Backoffice ();
        $swDatos = self::swDatos;
        return $obj->buscar($swDatos, ["Fecha", $name]);
    }
///////////////////Edit
    function editarDatosCapitulo($nombre, $temporada, $ATR){
        $obj = new Backoffice ();
        $swDatos = self::swDatos;
        return $obj->editar($swDatos, ["Capitulo",$nombre, $temporada, $ATR]);
    }
    function editarDatosEstado($nombre, $Temperatura, $ATR){
        $obj = new Backoffice ();
        $swDatos = self::swDatos;
        return $obj->editar($swDatos, ["Estado",$nombre, $Temperatura, $ATR]);
    }
///////////////////Get
        function getDatosByNombre($name){
            $obj = new Backoffice ();
        $swDatos = self::swDatos;
            return $obj->conseguir($swDatos, ["Nombre",$name, "ALL"]);
        }
        function getDatosByID($nombre, $temporada){
            $obj = new Backoffice ();
        $swDatos = self::swDatos;
            return $obj->conseguir($swDatos, ["ID",$nombre, $temporada]);
        }
///////////////////Group
    function agruparDatosForTemporadaByNombre($nombre){
        $obj = new Backoffice ();
        $swDatos = self::swDatos;
        return $obj->agrupar($swDatos, ["ForTemporadaByNombre", $nombre]);
    }
    function agruparDatosForTemporadaByATRNombre(){
        $obj = new Backoffice ();
        $swDatos = self::swDatos;
        return $obj->agrupar($swDatos, ["ForTemporadaByATRNombre", "ALL"]);
    }
    function agruparDatosForTemporadaByInicial($nombre){
        $obj = new Backoffice ();
        $swDatos = self::swDatos;
        return $obj->agrupar($swDatos, ["ForTemporadaByNombre", $nombre]);
    }
///////////////////Listar
    function listarDatos(){
        $obj = new Backoffice ();
        $swDatos = self::swDatos;
        return $obj->listar($swDatos, ["All", "ALL"]);
    }

    function listarDatosPorNombre($nombre){
        $obj = new Backoffice ();
        $swDatos = self::swDatos;
        return $obj->listar($swDatos, ["nombre", $nombre]);
    }
///////////////////Subir
    function subirDatos($nombre,$temporada,$capitulo,$estado ){
        $obj = new Backoffice ();
        echo "<br>-admin subir estado-";
        $sw = self::swDatos;
        $obj->subir($sw, [$nombre, $temporada, $capitulo, $estado]);
    }
/////////////////////////
    function contarDatos(){
        $obj = new Backoffice ();
        $swDatos = self::swDatos;
        return $obj->contar($swDatos);
    }

}

//$obj = new UserAdmin();

//$obj->editarDatosCapitulo("z",1,7);

?>
