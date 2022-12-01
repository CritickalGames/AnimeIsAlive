<?php

class ModeloConexion
{

  public function conectar(){
    $server = 'localhost:3306';
    $usuario = 'root';
    $contraseña = '';
    $basededatos = 'animeLive';
    $conexion = new mysqli($server, $usuario, $contraseña, $basededatos);
    if($conexion->connect_error){
      die("conexion fallida" . $conexion->connect_error);
    }
    return $conexion;
  }

  public function consultar(string $sql){
    $conexion=$this->conectar();
    $result=mysqli_query($conexion,$sql);
    return $result;
  }

  public function sentencia(string $sql){
    if ($this->consultar($sql)) {
      return "-ENTRÉ";
    }
  }

  public function get(string $sql){
    $result=$this->consultar($sql);
    if(mysqli_num_rows($result)>0){
      $row= $result -> fetch_all(MYSQLI_ASSOC);
      return $row;  
          
    }else{
      return $row=[mysqli_num_rows($result)];
    }
  }

  function colTOatr($columnas, ... $atr){
    $col= str_word_count($columnas, 1);
    $clave= "";
    foreach ($atr as $key => $value) {
      $columna=$col[$key];
      $valor= $value[$key];
      if ($key!=count($atr)-1 && count($atr)!=1) {
        $clave = $clave."$columna = '$valor' AND ";
      }else {
        $clave = $clave."$columna = '$valor'";
      }
    }

    return $clave;
  }

  public function sqlBorrar($tabla, $columna, ... $atr){
      $clave = $this->colTOatr($columna, $atr);
    $sql = "DELETE FROM $tabla WHERE $clave";
    return $this->sentencia($sql);
  }

  public function sqlBuscar($tabla, $columna, $Name){
        $sql="SELECT * FROM $tabla WHERE $columna LIKE '$Name'";
        return $this->get($sql);
  }

  public function sqlCount(string $tabla){
    $sql="SELECT * FROM $tabla";
    $result=$this->consultar($sql);
    return mysqli_num_rows($result);
  }

  public function sqlGet($tabla){
    $sql="SELECT * FROM $tabla";
    return $this->get($sql);
  }

  public function sqlGetBy($tabla, $columna, $Nombre){
        $sql="SELECT * FROM $tabla WHERE $columna = '$Nombre'";
        return $this->get($sql);
  }

  public function sqlGetByLike($tabla, $columna, $Inicial){
        $sql="SELECT * FROM $tabla WHERE $columna LIKE '$Inicial'";
        return $this->get($sql);
  }
  
  public function sqlSet($tabla, $columna, $NAME){
        $sql = "INSERT INTO anime ($columna) 
            VALUES ($NAME)";
    return $this->sentencia($sql);
  }
}
?>