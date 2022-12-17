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