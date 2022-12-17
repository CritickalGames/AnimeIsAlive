<?php
require_once "RAPIs.php";

class UserAdmin{
/////////PASAJE//////////////////////////
const swPasaje= "PASAJE";
///////////////////Borrar
///////////////////Search
///////////////////Edit
<<<<<<< HEAD
///////////////////Get
///////////////////Group
///////////////////Listar
///////////////////Subir
/////////////////////////
        function contarAnime(){
            $obj = new Backoffice ();
            return $obj->contar("ANIME");
        }
}

=======
    function editarPasaje($col, $valATR, $valorPk){
        $obj = new Backoffice ();
        $swPasaje = self::swPasaje;
        return $obj->editar($swPasaje, ["Estado",$col, $valATR, $valorPk]);
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
        $obj->editar($swPasaje, ["Cancelar","ci", $valorPk, ""]);
        $obj->editar($swPasaje, ["Cancelar","nombre", $valorPk, ""]);
        $obj->editar($swPasaje, ["Cancelar","apellido", $valorPk, ""]);
        $obj->editar($swPasaje, ["Cancelar","email", $valorPk, ""]);
        
    }
///////////////////Limpiar
    function limpiarPasaje(){
        $obj = new Backoffice ();
        $swPasaje = self::swPasaje;
        $obj->editar($swPasaje, ["Limpiar","ci", "", ""]);
        $obj->editar($swPasaje, ["Limpiar","nombre", "", ""]);
        $obj->editar($swPasaje, ["Limpiar","apellido", "", ""]);
        $obj->editar($swPasaje, ["Limpiar","email", "", ""]);
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

>>>>>>> 9f4ce554dc0800e553d7918b9bad5746f2335d54
?>
