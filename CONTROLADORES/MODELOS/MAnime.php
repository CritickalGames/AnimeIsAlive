<?php 

require_once "MConexion.php";


class ModeloAnime extends ModeloConexion
{

    const tabla="anime";
    const nombreClave="nombre";
    const nombreColumnas="nombre";

    public function setAnime($valorClave){
        $tabla = self::tabla;
        $nombreColumnas = self::nombreColumnas;
        return $this->sqlSet($tabla, $nombreColumnas, $valorClave);
    }
///////////////////Borrar
    public function borrarAnime($valorClave){
        $tabla = self::tabla;
        $nombreClave = self::nombreClave;
        return $this->sqlSet($tabla, $nombreClave, $valorClave);
    }
///////////////////Search
///////////////////Edit
///////////////////Get
///////////////////Group
///////////////////////////////
    public function get_ALL(){
        $tabla = self::tabla;
        return $this->sqlGet($tabla);
    }

    public function contarAnime(){
        $tabla = self::tabla;
        return $this->sqlCount($tabla);
    }
}
?>