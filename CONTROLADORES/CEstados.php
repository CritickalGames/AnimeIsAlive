<?php

require_once "RModelos.php";

class ControladorEstados extends ModeloEstados
{

    public function setEstados($nombre, $temporada, $cap, $estado){
        echo "<br>-setEstados Controlador-";
        $this->set($nombre, $temporada, $cap, $estado);
    }
///////////////////Borrar
///////////////////Search
///////////////////Edit
///////////////////Get
///////////////////Group
///////////////////Listar
///////////////////////////////
    public function contarEstados(){
        return $this->contar();
    }
}
//$obj = new ControladorEstados();

//$obj->editarEstadosCapitulo("z",1,3);

?>