<?php

class ModeloConexion
{

  public function conectar(){
    $server = 'localhost:3306';
    $usuario = 'root';
    $contraseña = '';
    $basededatos = 'eacpw';
    $conexion = new mysqli($server, $usuario, $contraseña, $basededatos);
    if($conexion->connect_error){
      die("conexion fallida" . $conexion->connect_error);
    }
    return $conexion;
  }

  public function enviarConsulta(string $sql){
    $conexion=$this->conectar();
    $result=mysqli_query($conexion,$sql);
    return $result;
  }

  public function sentencia(string $sql){
<<<<<<< HEAD
    if ($this->enviarConsulta($sql)) {
      return "-ENTRÉ";
    }
=======
    
    return "-ENTRÉ a la consutla-<br>-$sql <br>-".$this->consultar($sql);
>>>>>>> 9f4ce554dc0800e553d7918b9bad5746f2335d54
  }

  public function get(string $sql){
    $result=$this->enviarConsulta($sql);
    if(mysqli_num_rows($result)>0){
      $row= $result -> fetch_all(MYSQLI_ASSOC);
      return $row;  
          
    }else{
      return $row=[mysqli_num_rows($result)];
    }
  }
////////////////////////////////////////////////
  function colTOatr(string $columnas, array $atr){
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

  public function sqlBorrar(string $tabla, string $nombreClave, ... $valorClave){
      $clave = $this->colTOatr($nombreClave, [$valorClave]);
    $sql = "DELETE FROM $tabla WHERE $clave";
    return $this->sentencia($sql);
  }

  public function sqlBuscar(string $tabla, string $columna, string $Name){
        $sql="SELECT * FROM $tabla WHERE $columna LIKE '$Name'";
        return $this->get($sql);
  }

  public function sqlCount(string $tabla){
    $sql="SELECT * FROM $tabla";
    $result=$this->enviarConsulta($sql);
    return mysqli_num_rows($result);
  }

<<<<<<< HEAD
  public function sqlEditar(string $tabla, string $columna, string $atr, string $columnas, ... $valorClave){
    $clave = $this->colTOatr($columnas, [$valorClave]);
=======
  public function sqlEditar(string $tabla, string $columna, string $atr, string $columnas, ... $atributos){
    $clave = $this->colTOatr($columnas, [$atributos]);
>>>>>>> 9f4ce554dc0800e553d7918b9bad5746f2335d54
    $sql = "UPDATE $tabla 
        SET $columna='$atr' 
        WHERE $clave";
        return $this->sentencia($sql);
  }

  public function sqlCancelar(string $tabla, string $columna, string $columnas, ... $atributos){
    $clave = $this->colTOatr($columnas, $atributos);
    $sql = "UPDATE $tabla 
        SET $columna=NULL
        WHERE $clave ";
        return $this->sentencia($sql);
  }

  public function sqlLimpiar(string $tabla, string $columna, string $columnas, ... $atributos){
    $sql = "UPDATE $tabla 
        SET ci=NULL, nombre=NULL, apellido=NULL, email=NULL
          ";
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
        $clave = $this->colTOatr($columna, [$valorClave]);
        $sql="SELECT * FROM $tabla WHERE $clave";
        return $this->get($sql);
  }
  
  public function sqlSet(string $tabla, string $columna, string $NAME){
        $sql = "INSERT INTO $tabla ($columna) 
            VALUES ($NAME)";
    return $this->sentencia($sql);
  }
}
?>