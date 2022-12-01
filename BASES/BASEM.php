<?php 

require_once "MConexion.php";


class ModeloTABLA extends ModeloConexion
{
    public function set($Key)
    {
        $sql = "INSERT INTO TABLA (Key) 
            VALUES ('$Key')";
        $this->sentencia($sql);
    }
///////////////////Borrar
    public function borrar($Key){
        $sql = "DELETE FROM TABLA WHERE Key='$Key' ";
        $this->sentencia($sql);
    }
///////////////////Search
    public function buscar($Name){
        $sql="SELECT * FROM TABLA WHERE nombre LIKE '%$Name%'";
        return $this->get($sql);
    }
///////////////////Edit
    public function editarATR($Key, $ATR){
        $sql = "UPDATE TABLA 
        SET ATR='$ATR' 
        WHERE Key='$Key' ";
        $this->sentencia($sql);
    }
///////////////////Get
    public function getByATR($Key, $ATR){
        $sql="SELECT * from TABLA where Key='$Key' ";
        return $this->get($sql);
    }
///////////////////////////////
    public function get_ALL(){
        $sql="SELECT * from TABLA";
        return $this->get($sql);
    }

    public function get_ALL_Where(string $where){
        $sql="SELECT * from TABLA WHERE $where";
        return $this->get($sql);
    }

    public function contar(){
        $sql="SELECT * from TABLA";
        return $this->count($sql);
    }

    public function contarWhere(string $where){
        $sql="SELECT * from TABLA WHERE $where";
        return $this->count($sql);
    }
}

?>