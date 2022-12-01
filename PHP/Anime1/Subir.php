<?php
class ModeloConexion
{

  public function conectar(){
    $server = 'localhost:3306';
    $usuario = 'root';
    $contraseña = '';
    $basededatos = 'anime';
    $conexion = new mysqli($server, $usuario, $contraseña, $basededatos);
    if($conexion->connect_error){
      die("conexion fallida" . $conexion->connect_error);
    }
    return $conexion;
  }

  public function consulta(string $sql){
    $conexion=$this->conectar();
    $result=mysqli_query($conexion,$sql);
    return [$conexion,$result];
  }

  public function sentencia(string $sql){
    $conexion=$this->consulta($sql)[0];
  }

  public function get(string $sql){
    $result=$this->consulta($sql)[1];
    if(mysqli_num_rows($result)>0){
      $row= $result -> fetch_all(MYSQLI_ASSOC);
      return $row;  
          
    }else{
      return $row=[mysqli_num_rows($result)];
    }
  }

  public function count(string $sql){
    $result=$this->consulta($sql)[1];
    return mysqli_num_rows($result);
  }

}
    $inicial = strtoupper($_POST['inicial']);
    $nombre = $_POST['nombre'];
    echo $inicial;
    

    $obj= new ModeloConexion();
        $ultimaTupla = $obj->get("SELECT * FROM anime WHERE Inicial='z'");
        $numeroDeTuplas = $obj->count("SELECT * FROM anime WHERE Inicial='z'");
        $IDdelUltimo =  intval($ultimaTupla[$numeroDeTuplas-1]["Id"]);
    if (($inicial!=NULL) && ($nombre!=NULL)) {
        
        //var_dump ($IDdelUltimo);
        //var_dump ($ultimaTupla);
        //echo $numeroDeTuplas;
    
        if (($IDdelUltimo!=$numeroDeTuplas)) {
            
            $bool = true;
            for ($j=0, $i=1; $j <$numeroDeTuplas ; $j++) { 
                $IdNumerica=$ultimaTupla[$j]["Id"];
                if ($bool) {
                    for ($i; $i <= $IDdelUltimo; $i++) { 
                        if ($IdNumerica==$i) {
                            $i++;
                            break;
                        }else {
                            $obj->sentencia("INSERT INTO anime VALUES('$inicial','$i','$nombre')");
                            $bool=false;
                            $subido=$obj->get("SELECT * FROM anime WHERE Inicial='$inicial' AND id ='$i'");
                                echo json_encode($subido[0]);
                            break;
                        }
                    }
                }else{
                    break;
                }
            }
        }else{
            $obj->sentencia("INSERT INTO anime VALUES('$inicial',".($numeroDeTuplas+1).",'$nombre')");
                $subido=$obj->get("SELECT * FROM anime WHERE Inicial='$inicial' AND id =".($numeroDeTuplas+1)."");
                echo json_encode($subido[0]);
        }
    }else{
        //$obj->sentencia("INSERT INTO anime VALUES ('z',6,'[value-3]')");
        echo json_encode($ultimaTupla[0]);
    }
?>