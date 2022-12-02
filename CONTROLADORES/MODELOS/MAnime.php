<?php 

require_once "MConexion.php";


class ModeloAnime extends ModeloConexion
{

    const tabla="anime";

    public function set($NAME){
        $tabla = self::tabla;
        return $this->sqlSet($tabla, "nombre", "'$NAME'");
    }
///////////////////Borrar
    public function borrar($NAME){
        $tabla = self::tabla;
        return $this->sqlBorrar($tabla, "nombre", $NAME);
    }
///////////////////Search
    public function buscarPorNombre($Name){
        $tabla = self::tabla;
        return $this->sqlBuscar($tabla, "nombre", "$Name%");
    }
    public function buscarPorAll($Name){
        $tabla = self::tabla;
        return $this->sqlBuscar($tabla, "nombre", "%$Name%");
    }
///////////////////Edit

///////////////////Get
    public function getByInicial($Inicial){
        $tabla = self::tabla;
        return $this->sqlGetByLike($tabla, "nombre","$Inicial%");
    }
    public function getByNombre($Nombre){
        $tabla = self::tabla;
        return $this->sqlGetBy($tabla, "nombre",$Nombre);
    }
///////////////////////////////
    public function get_ALL(){
        $tabla = self::tabla;
        return $this->sqlGet($tabla);
    }

    public function contar(){
        $tabla = self::tabla;
        return $this->sqlCount($tabla);
    }
}
?>