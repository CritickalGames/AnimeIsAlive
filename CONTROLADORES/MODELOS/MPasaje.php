<?php 

require_once "MConexion.php";


class ModeloPasaje extends ModeloConexion
{
    const tabla="pasaje";
    const nombreDeClave="aciento";

///////////////////Search

    public function buscarPor($col,$atr){
        $tabla = self::tabla;
        return $this->sqlBuscar($tabla, $col, "%$atr%");
    }
///////////////////Edit
    public function editar($col, $ATR, ... $valorPk){
        $tabla = self::tabla;
        $nombreDeClave= self::nombreDeClave;
        return "$valorPk[0]<br>".$this->sqlEditar($tabla, $col, $ATR, $nombreDeClave, $valorPk[0]);
    }

    public function cancelar($col, ... $valorPk){
        $tabla = self::tabla;
        $nombreDeClave= self::nombreDeClave;
        return $this->sqlCancelar($tabla, $col, $nombreDeClave, $valorPk);
    }
///////////////////Get
    public function getBy($col, $ATR){
        $tabla = self::tabla;
        return $this->sqlGetBy($tabla, $col, $ATR);
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