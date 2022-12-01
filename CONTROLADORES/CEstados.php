<?php

require_once "RModelos.php";

class ControladorEstados extends ModeloEstados
{

    public function setEstados($nombre, $temporada, $cap, $estado){
        $this->set($nombre, $temporada, $cap, $estado);
    }
///////////////////Borrar
    public function borrarEstados($nombre){
        $this->borrar($nombre);
    }
///////////////////Search
    public function buscarEstadosByNombre($Atributo){
        return $this->buscar($Atributo);
    }
///////////////////Edit
    public function editarEstadosEstado($nombre, $temporada, $ATR){
        $this->editarEstado($nombre, $temporada, $ATR);
    }
    public function editarEstadosCapitulo($nombre, $temporada, $ATR){
        
        return "-ENTRÓ".$this->editarCapitulo($nombre, $temporada, $ATR);
    }
///////////////////Get
    public function getEstadosByNombre($nombre){
        return $this->getByNombre($nombre);
    }
    public function getEstadosByID($nombre, $temporada){
        return $this->getByID($nombre, $temporada);
    }
///////////////////Group
    public function agruparForTemporadaByNombre($nombre){
        return $this->groupForTemporadaByNombre($nombre);
    }
    public function agruparForTemporadaByATRNombre(){
        return $this->groupForTemporadaByATRNombre();
    }
///////////////////Listar
    public function listarEstadosByAll(){
        return $this->get_All();
    }

    public function listarEstadosByNombre($Atributo){
        return $this->getByAtributo($Atributo);
    }

    public function listarEstadosWhere(string $where){
        return $this->get_All_Where($where);
    }
///////////////////////////////
    public function contarEstados(){
        return $this->contar();
    }

    public function contarEstadosWhere(string $where){
        return $this->contarWhere($where);
    }
}
//$obj = new ControladorEstados();

//$obj->editarEstadosCapitulo("z",1,3);

?>