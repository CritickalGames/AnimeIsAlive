<?php

require_once "RModelos.php";

class ControladorPortadas extends ModeloPortadas
{

    public function set($valorColumna){
        $this->setPortadas($valorColumna);
    }
///////////////////Borrar
    public function borrar($valorColumna){
        $this->borrarPortadas($valorColumna);
    }
///////////////////Search
///////////////////Edit
///////////////////Get
///////////////////Group
///////////////////Listar
    public function listar_nombre($valorColumnaDeCriterio){
        return $this->getPortadas_nombre($valorColumnaDeCriterio);
    }
///////////////////////////////
    public function contar(){
        return $this->contarPortadas();
    }
}
?>