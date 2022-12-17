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
///////////////////Edit
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

?>
