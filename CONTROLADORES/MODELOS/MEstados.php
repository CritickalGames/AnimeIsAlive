<?php 

require_once "MConexion.php";


class ModeloEstados extends ModeloConexion
{
    const tabla="Estados";

    public function set($nombre, $temporada, $Capitulo, $Estados)
    {
        echo "<br>-setEstados Modelo-";
        $tabla = self::tabla;
        return $this->sqlSet($tabla, "nombre, temporada, Capitulo, Estado", 
            /*Value*/        "'$nombre', '$temporada', '$Capitulo', '$Estados'");
    }
///////////////////Borrar
    public function borrar($atr){
        $tabla = self::tabla;
        return $this->sqlBorrar($tabla, "nombre",
                                $atr);
    }
///////////////////Search
    public function buscar($atr){
        $tabla = self::tabla;
        return $this->sqlBuscar($tabla, "nombre", "%$atr%");
    }
///////////////////Edit
    public function editarCapitulo($nombre, $temporada, $ATR){
        $tabla = self::tabla;
        $clave= "nombre, temporada";
        return $this->sqlEditar($tabla, "capitulo", $ATR, $clave, $nombre, $temporada);
    }

    public function editarEstado($nombre, $temporada, $ATR){
        $tabla = self::tabla;
        $clave= "nombre, temporada";
        return $this->sqlEditar($tabla, "estado", $ATR, $clave, $nombre, $temporada);
    }
///////////////////Get
    public function getByNombre($nombre){
        $tabla = self::tabla;
        return $this->sqlGetBy($tabla, "nombre", $nombre);
    }
    public function getByID($nombre, $temporada){
        $tabla = self::tabla;
        return $this->sqlGetByClave($tabla, "nombre, temporada", $nombre, $temporada);
    }
///////////////////Group
    public function groupForTemporadaByNombre($nombre){
        $sql="SELECT * FROM estados e
        WHERE EXISTS(
            SELECT nombre, max(temporada) AS temporada, capitulo, estado FROM estados
            WHERE nombre LIKE '$nombre%' AND 
                e.nombre= nombre
            GROUP BY nombre
            HAVING e.temporada= temporada
        )";
        return $this->get($sql);
    }
    public function groupForTemporadaByCOLNombre(){
        $sql="SELECT * FROM estados e
        WHERE EXISTS(
            SELECT nombre, max(temporada) AS temporada, capitulo, estado FROM estados
            WHERE e.nombre= nombre
            GROUP BY nombre
            HAVING e.temporada= temporada
        )";
        return $this->get($sql);
    }
///////////////////////////////
    public function get_ALL(){
        $tabla = self::tabla;
        return $this->sqlGet($tabla);
    }

    public function contar(){
        $sql="SELECT * from Estados";
        return $this->count($sql);
    }
}



?>