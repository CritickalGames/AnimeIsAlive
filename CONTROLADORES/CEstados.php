<?php

require_once "RModelos.php";

class ControladorEstados extends ModeloEstados
{

    public function set($valorColumna){
        $this->setEstados($valorColumna);
    }
///////////////////Borrar
    public function borrar($valorColumna){
        $this->borrarEstados($valorColumna);
    }
///////////////////Search
///////////////////Edit
///////////////////Get
///////////////////Group
///////////////////Listar
    public function listar_($valorColumnaDeCriterio){
        return $this->groupEstados_temporada_capitulo($valorColumnaDeCriterio);
    }
///////////////////////////////
    public function contar(){
        return $this->contarEstados();
    }
}
?>