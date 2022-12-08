<?php 

require_once "MConexion.php";


class ModeloDatos extends ModeloConexion
{
    const tabla="datos";
    const nombreDeClave="telefono";

    public function set($telefono, $nombre, $apellido, $fechnac)
    {
        echo "<br>-setDatos Modelo-";
        $tabla = self::tabla;
        return $this->sqlSet($tabla, "telefono, nombre, apellido, fechnac", 
            /*Value*/        "'$telefono', '$nombre', '$apellido', '$fechnac'");
    }
///////////////////Borrar
    public function borrar($atr){
        $tabla = self::tabla;
        return $this->sqlBorrar($tabla, "telefono",
                                $atr);
    }
///////////////////Search
    public function buscarPorNombre($atr){
        $tabla = self::tabla;
        return $this->sqlBuscar($tabla, "nombre", "%$atr%");
    }

    public function buscarPorApellido($atr){
        $tabla = self::tabla;
        return $this->sqlBuscar($tabla, "apellido", "%$atr%");
    }
///////////////////Edit
    public function editarNombre($telefono, $ATR){
        $tabla = self::tabla;
        $nombreDeClave= self::nombreDeClave;
        return $this->sqlEditar($tabla, "nombre", $ATR, $nombreDeClave, $telefono);
    }

    public function editarApellido($telefono, $ATR){
        $tabla = self::tabla;
        $nombreDeClave= self::nombreDeClave;
        return $this->sqlEditar($tabla, "apellido", $ATR, $nombreDeClave, $telefono);
    }

    public function editarFechaNacimiento($telefono, $ATR){
        $tabla = self::tabla;
        $nombreDeClave= self::nombreDeClave;
        return $this->sqlEditar($tabla, "fechanac", $ATR, $nombreDeClave, $telefono);
    }
///////////////////Get
    public function getByNombre($ATR){
        $tabla = self::tabla;
        return $this->sqlGetBy($tabla, "nombre", $ATR);
    }
    public function getByApellido($ATR){
        $tabla = self::tabla;
        return $this->sqlGetBy($tabla, "apellido", $ATR);
    }
    public function getByFechaNacimiento($ATR){
        $tabla = self::tabla;
        return $this->sqlGetBy($tabla, "fechanac", $ATR);
    }
    public function getByID($telefono){
        $tabla = self::tabla;
        $nombreDeClave= self::nombreDeClave;
        return $this->sqlGetByClave($tabla, $nombreDeClave, $telefono);
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