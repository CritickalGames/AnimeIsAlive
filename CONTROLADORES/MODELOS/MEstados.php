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
///////////////////Search
///////////////////Edit
<<<<<<< HEAD
=======
    public function editarCapitulo($nombre, $temporada, $ATR){
        $tabla = self::tabla;
        $primaryKey= "nombre, temporada";
        return $this->sqlEditar($tabla, "capitulo", $ATR, $primaryKey, $nombre, $temporada);
    }

    public function editarEstado($nombre, $temporada, $ATR){
        $tabla = self::tabla;
        $primaryKey= "nombre, temporada";
        return $this->sqlEditar($tabla, "estado", $ATR, $primaryKey, $nombre, $temporada);
    }
>>>>>>> 9f4ce554dc0800e553d7918b9bad5746f2335d54
///////////////////Get
///////////////////Group
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