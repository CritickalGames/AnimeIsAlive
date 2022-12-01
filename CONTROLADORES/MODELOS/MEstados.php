<?php 

require_once "MConexion.php";


class ModeloEstados extends ModeloConexion
{
    public function set($nombre, $temporada, $Capitulo, $Estados)
    {
        $sql = "INSERT INTO Estados (nombre, temporada, Capitulo, Estado) 
            VALUES ('$nombre', '$temporada', '$Capitulo', '$Estados')";
        $this->sentencia($sql);
    }
///////////////////Borrar
    public function borrar($nombre){
        $sql = "DELETE FROM Estados WHERE nombre='$nombre'";
        $this->sentencia($sql);
    }
///////////////////Search
    public function buscar($Name){
        $sql="SELECT * FROM Estados WHERE nombre LIKE '%$Name%'";
        return $this->get($sql);
    }
///////////////////Edit
    public function editarCapitulo($nombre, $temporada, $ATR){
        $sql = "UPDATE Estados 
        SET capitulo='$ATR' 
        WHERE nombre='$nombre' AND temporada='$temporada' ";
        return "-ENTRA".$this->sentencia($sql);
    }

    public function editarEstado($nombre, $temporada, $ATR){
        $sql = "UPDATE Estados
        SET estado='$ATR' 
        WHERE nombre='$nombre' AND temporada='$temporada'";
        $this->sentencia($sql);
    }
///////////////////Get
    public function getByNombre($nombre){
        $sql="SELECT * from Estados where nombre='$nombre'";
        return $this->get($sql);
    }
    public function getByID($nombre, $temporada){
        $sql="SELECT * from Estados where nombre='$nombre' AND temporada='$temporada'";
        return $this->get($sql);
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
    public function groupForTemporadaByATRNombre(){
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
        $sql="SELECT * from Estados";
        return $this->get($sql);
    }

    public function get_ALL_Where(string $where){
        $sql="SELECT * from Estados WHERE $where";
        return $this->get($sql);
    }

    public function contar(){
        $sql="SELECT * from Estados";
        return $this->count($sql);
    }

    public function contarWhere(string $where){
        $sql="SELECT * from Estados WHERE $where";
        return $this->count($sql);
    }
}



?>