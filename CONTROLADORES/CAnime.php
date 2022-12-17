<?php

require_once "RModelos.php";

class ControladorAnime extends ModeloAnime
{

    public function set($valorColumna){
        $this->setAnime($valorColumna);
    }
///////////////////Borrar
    public function borrar($valorColumna){
        $this->borrarAnime($valorColumna);
    }
///////////////////Search
///////////////////Edit
///////////////////Get
///////////////////Group
///////////////////Listar
    public function listar_(){
        return $this->get_ALL();
    }

    public function listar_nombre($valorColumna){
        return $this->getAnime_nombre("$valorColumna%");
    }
///////////////////////////////
    public function contar(){
        return $this->contarAnime();
    }
}
?>