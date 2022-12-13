<?php
require_once "RAPIs.php";

class UserAdmin{
/////////PASAJE//////////////////////////
const swPasaje= "PASAJE";
///////////////////Borrar
///////////////////Search
    function buscarPasajePorTelefono($name){
        $obj = new Backoffice ();
        $swPasaje = self::swPasaje;
        return $obj->buscar($swPasaje, ["Telefono", $name]);
    }
    function buscarPasajePorNombre($name){
        $obj = new Backoffice ();
        $swPasaje = self::swPasaje;
        return $obj->buscar($swPasaje, ["Nombre", $name]);
    }
    function buscarPasajePorApellido($name){
        $obj = new Backoffice ();
        $swPasaje = self::swPasaje;
        return $obj->buscar($swPasaje, ["Apellido", $name]);
    }
    function buscarPasajePorFecha($name){
        $obj = new Backoffice ();
        $swPasaje = self::swPasaje;
        return $obj->buscar($swPasaje, ["Fecha", $name]);
    }
///////////////////Edit
    function editarPasaje($nombre, $Temperatura, $ATR){
        $obj = new Backoffice ();
        $swPasaje = self::swPasaje;
        return $obj->editar($swPasaje, ["Estado",$nombre, $Temperatura, $ATR]);
    }
///////////////////Get
        function getPasajeByNombre($name){
            $obj = new Backoffice ();
        $swPasaje = self::swPasaje;
            return $obj->conseguir($swPasaje, ["Nombre",$name, "ALL"]);
        }
        function getPasajeByID($nombre, $temporada){
            $obj = new Backoffice ();
        $swPasaje = self::swPasaje;
            return $obj->conseguir($swPasaje, ["ID",$nombre, $temporada]);
        }
///////////////////Group
///////////////////Listar
    function listarPasaje(){
        $obj = new Backoffice ();
        $swPasaje = self::swPasaje;
        return $obj->listar($swPasaje, ["All", "ALL"]);
    }
///////////////////Subir
///////////////////Registrar
    function registrarPasaje($ci, $nombre, $apellido, $email, $valorPk){
        $obj = new Backoffice ();
        $swPasaje = self::swPasaje;
        $uno=[];
        array_push($uno, $obj->editar($swPasaje, ["","ci", $ci, $valorPk]));
        array_push($uno, $obj->editar($swPasaje, ["","nombre", $nombre, $valorPk]));
        array_push($uno, $obj->editar($swPasaje, ["","apellido", $apellido, $valorPk]));
        array_push($uno, $obj->editar($swPasaje, ["","email", $email, $valorPk]));
        return $uno;
    }
///////////////////Cancelar
    function cancelarPasaje($valorPk){
        $obj = new Backoffice ();
        $swPasaje = self::swPasaje;
        $obj->editar($swPasaje, ["Cancelar","ci", "", $valorPk]);
        $obj->editar($swPasaje, ["Cancelar","nombre", "", $valorPk]);
        $obj->editar($swPasaje, ["Cancelar","apellido", "", $valorPk]);
        $obj->editar($swPasaje, ["Cancelar","email", "", $valorPk]);
    }
///////////////////Limpiar
    function limpiarPasaje(){
        $obj = new Backoffice ();
        $swPasaje = self::swPasaje;
        $obj->editar($swPasaje, ["Cancelar","ci", "", ""]);
        $obj->editar($swPasaje, ["Cancelar","nombre", "", ""]);
        $obj->editar($swPasaje, ["Cancelar","apellido", "", ""]);
        $obj->editar($swPasaje, ["Cancelar","email", "", ""]);
    }
/////////////////////////
    function contarPasaje(){
        $obj = new Backoffice ();
        $swPasaje = self::swPasaje;
        return $obj->contar($swPasaje);
    }

}

//$obj = new UserAdmin();

//$obj->editarPasajeCapitulo("z",1,7);

?>
