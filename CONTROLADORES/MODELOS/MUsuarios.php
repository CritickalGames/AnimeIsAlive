<?php 

require_once "MConexion.php";


class ModeloEstados extends ModeloConexion
{
    const tabla="usuarios";

    public function set($nombre, $correo, $contraseña, $foto)
    {
        echo "<br>-setEstados Modelo-";
        $tabla = self::tabla;
        return $this->sqlSet($tabla, "nombre, correo, contraseña, foto", 
            /*Value*/        "'$nombre', '$correo', '$contraseña', '$foto'");
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
    public function editarCorreo($clave, $ATR){
        $tabla = self::tabla;
        $primaryKey= "nombre";
        return $this->sqlEditar($tabla, "correo", $ATR, $primaryKey, $clave);
    }

    public function editarContraseña($clave, $ATR){
        $tabla = self::tabla;
        $primaryKey= "nombre";
        return $this->sqlEditar($tabla, "contraseña", $ATR, $primaryKey, $clave);
    }
    public function editarFoto($clave, $ATR){
        $tabla = self::tabla;
        $primaryKey= "nombre";
        return $this->sqlEditar($tabla, "foto", $ATR, $primaryKey, $clave);
    }
///////////////////Get
    public function getByID($clave){
        $tabla = self::tabla;
        return $this->sqlGetBy($tabla, "nombre", $clave);
    }
    public function getByCorreo($correo){
        $tabla = self::tabla;
        return $this->sqlGetByClave($tabla, "correo", $correo);
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