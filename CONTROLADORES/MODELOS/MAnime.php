<?php 

require_once "MConexion.php";


class ModeloAnime extends ModeloConexion
{
    public function set($NAME){
        return $this->sqlSet("anime", "nombre", "'$NAME'");
    }
///////////////////Borrar
    public function borrar($NAME){
        return $this->sqlBorrar("anime", "nombre", $NAME);
    }
///////////////////Search
    public function buscarPorNombre($Name){
        return $this->sqlBuscar("anime", "nombre", "$Name%");
    }
    public function buscarPorAll($Name){
        return $this->sqlBuscar("anime", "nombre", "%$Name%");
    }
///////////////////Edit

///////////////////Get
    public function getByInicial($Inicial){
        return $this->sqlGetByLike("anime", "nombre","$Inicial%");
    }
    public function getByNombre($Nombre){
        return $this->sqlGetBy("anime", "nombre",$Nombre);
    }
///////////////////////////////
    public function get_ALL(){
        return $this->sqlGet("anime");
    }

    public function contar(){
        return $this->sqlCount("anime");
    }
}
?>