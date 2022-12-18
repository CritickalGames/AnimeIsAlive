<?php 

require_once "MConexion.php";


class ModeloEstados extends ModeloConexion
{

    const tabla="estados";
    const nombreClave="nombre, temporada";
    const nombreColumnas="nombre, temporada, capitulo, estado";

    public function setEstados($valorClave1, $valorClave2){
        $tabla = self::tabla;
        $nombreColumnas = self::nombreColumnas;
        return $this->sqlSet($tabla, $nombreColumnas, $valorClave1, $valorClave2);
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
    public function groupEstados_temporada_capitulo_ByNombre($valordeColumna){
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
    public function groupEstados_temporada_capitulo(){
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

    public function contarEstado(){
        $tabla = self::tabla;
        return $this->sqlCount($tabla);
    }
}
?>