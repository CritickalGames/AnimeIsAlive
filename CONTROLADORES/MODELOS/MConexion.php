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
////////////////////////////////////////////////
  function colTOatr(string $columnas, ... $atr){
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

  public function sqlBorrar(string $tabla, string $columna, ... $atr){
      $clave = $this->colTOatr($columna, $atr);
    $sql = "DELETE FROM $tabla WHERE $clave";
    return $this->sentencia($sql);
  }

  public function sqlBuscar(string $tabla, string $columna, string $Name){
        $sql="SELECT * FROM $tabla WHERE $columna LIKE '$Name'";
        return $this->get($sql);
  }

  public function sqlCount(string $tabla){
    $sql="SELECT * FROM $tabla";
    $result=$this->consultar($sql);
    return mysqli_num_rows($result);
  }

  public function sqlEditar(string $tabla, string $columna, string $atr, string $columnas, ... $atributos){
    $clave = $this->colTOatr($columnas, $atr);
    $sql = "UPDATE $tabla 
        SET $columna='$atr' 
        WHERE $clave ";
        return $this->sentencia($sql);
  }

  public function sqlGet(string $tabla){
    $sql="SELECT * FROM $tabla";
    return $this->get($sql);
  }

  public function sqlGetBy(string $tabla, string $columna, string $atr){
        $sql="SELECT * FROM $tabla WHERE $columna = '$atr'";
        return $this->get($sql);
  }

  public function sqlGetByLike(string $tabla, string $columna, string $atr){
        $sql="SELECT * FROM $tabla WHERE $columna LIKE '$atr'";
        return $this->get($sql);
  }

  public function sqlGetByClave(string $tabla, string $columna, ...$atr){
        $clave = $this->colTOatr($columna, $atr);
        $sql="SELECT * FROM $tabla WHERE $clave";
        return $this->get($sql);
  }
  
  public function sqlSet(string $tabla, string $columna, string $NAME){
        echo "<br>-set Conexión-";
        $sql = "INSERT INTO $tabla ($columna) 
            VALUES ($NAME)";
    return $this->sentencia($sql);
  }
}
?>