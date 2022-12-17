<?php 

require_once "MConexion.php";


class ModeloEstados extends ModeloConexion
{
    const tabla="usuarios";

    public function set($usuario, $nombre)
    {
        echo "<br>-setEstados Modelo-";
        $tabla = self::tabla;
        return $this->sqlSet($tabla, "usuario, nombre", 
            /*Value*/        "'$usuario', '$nombre'");
    }
///////////////////Borrar
    public function borrar($atr1, $atr2){
        $tabla = self::tabla;
        return $this->sqlBorrar($tabla, "usuario, nombre",
                                $atr1, $atr2);
    }
///////////////////Search
    public function buscar($atr){
        $tabla = self::tabla;
        return $this->sqlBuscar($tabla, "nombre", "%$atr%");
    }
///////////////////Edit
///////////////////Get
    public function getByID($usuario, $nombre){
        $tabla = self::tabla;
        return $this->sqlGetBy($tabla, "usuario, nombre", $usuario, $nombre);
    }
    public function getByUsuario($usuario){
        $tabla = self::tabla;
        return $this->sqlGetByClave($tabla, "usuario", $usuario);
    }
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