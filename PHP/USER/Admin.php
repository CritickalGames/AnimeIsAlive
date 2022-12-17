<?php
require_once "RAPIs.php";
$obj=new Backoffice();
class UserAdmin{
/////////PASAJE//////////////////////////
const swAnime= "ANIME";
///////////////////Set
    function subirAnime($valorColumna){
        return subir(swAnime,[$valorColumna]);
    }
///////////////////Borrar
///////////////////Search
///////////////////Edit
///////////////////Get
///////////////////Group
///////////////////Listar
    function listarAnime_inicial($valorColumna){
        return subir(swAnime,["nombre",$valorColumna]);
    }
///////////////////Subir
/////////////////////////
        function contarAnime(){
            $obj = new Backoffice ();
            return $obj->contar("ANIME");
        }
}

?>
