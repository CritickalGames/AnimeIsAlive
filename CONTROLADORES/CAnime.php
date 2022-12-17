<?php

require_once "RModelos.php";

class ControladorAnime extends ModeloAnime
{

    public function set($NAME){
        $this->setAnime($NAME);
    }
///////////////////Borrar
    public function borrar($NAME){
        $this->borrarAnime($NAME);
    }
///////////////////Search
///////////////////Edit
///////////////////Get
///////////////////Group
///////////////////Listar
///////////////////////////////
    public function contar(){
        return $this->contarAnime();
    }
}
?>