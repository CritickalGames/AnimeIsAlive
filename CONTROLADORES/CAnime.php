<?php

require_once "RModelos.php";

class ControladorAnime extends ModeloAnime
{

    public function setAnime($NAME){
        $this->set($NAME);
    }
///////////////////Borrar
    public function borrarAnime($NAME){
        $this->borrar($NAME);
    }
///////////////////Search
    public function buscarAnimeByNombre($Name){
        return $this->buscarPorNombre($Name);
    }
    public function buscarAnimeByAll($Name){
        return $this->buscarPorAll($Name);
    }
///////////////////Edit
///////////////////Get
    public function getAnimeByNombre($nombre){
        return $this->getByNombre($nombre);
    }
///////////////////Group
    public function groupAnimeByInicial(string $Valor){
        return $this->groupByInicial($Valor);
    }
///////////////////Listar
    public function listarAnimeByAll(){
        return $this->get_All();
    }

    public function listarAnimeByInicial($Inicial){
        $Inicial = strtoupper($Inicial);
        return $this->getByInicial($Inicial);
    }

    public function listarAnimeWhere(string $where){
        return $this->get_All_Where($where);
    }
///////////////////////////////
    public function contarAnime(){
        return $this->contar();
    }

    public function contarAnimeWhere(string $where){
        return $this->contarWhere($where);
    }
}
?>