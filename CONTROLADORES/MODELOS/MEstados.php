<?php 

require_once "MConexion.php";


class ModeloEstados extends ModeloConexion
{

    const tabla="estados";
    const nombreClave="nombre";
    const nombreColumnas="nombre";

    public function setEstados($valorClave){
        $tabla = self::tabla;
        $nombreColumnas = self::nombreColumnas;
        return $this->sqlSet($tabla, $nombreColumnas, $valorClave);
    }
///////////////////Borrar
    public function borrarEstados($valorClave){
        $tabla = self::tabla;
        $nombreClave = self::nombreClave;
        return $this->sqlBorrar($tabla, $nombreClave, $valorClave);
    }
///////////////////Search
///////////////////Edit
///////////////////Get
    public function getEstados_nombre($valorColumna){
        $tabla = self::tabla;
        return $this->sqlGet($tabla, "nombre", $valorColumna);
    }
///////////////////Group
    public function groupEstados_temporada_capitulo($valordeColumna){
        $tabla = self::tabla;
        $sql = "SELECT * FROM $tabla e
        WHERE EXISTS(
            SELECT nombre, max(temporada) AS temporada, capitulo, estado FROM $tabla
            WHERE nombre LIKE '$valordeColumna%' AND 
                e.nombre= nombre
            GROUP BY nombre
            HAVING e.temporada= temporada
            )
        ";
        return $this->get($sql);
    }
///////////////////////////////
    public function get_ALL(){
        $tabla = self::tabla;
        return $this->sqlGet($tabla);
    }

    public function contarEstado(){
        $tabla = self::tabla;
        return $this->sqlCount($tabla);
    }
}
?>