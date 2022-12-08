<?php

require_once "RModelos.php";

class ControladorDatos extends ModeloDatos
{

    public function setDatos($telefono, $nombre, $apellido, $fechnac){
        echo "<br>-setDatos Controlador-";
        $this->set($telefono, $nombre, $apellido, $fechnac);
    }
///////////////////Borrar
    public function borrarDatos($telefono){
        $this->borrar($telefono);
    }
///////////////////Search
    public function buscarDatosByNombre($Atributo){
        return $this->buscarPorNombre($Atributo);
    }
    public function buscarDatosByApellido($Atributo){
        return $this->buscarPorApellido($Atributo);
    }
///////////////////Edit
    public function editarDatosNombre($telefono, $ATR){
        $this->editarNombre($telefono, $ATR);
    }
    public function editarDatosApellido($telefono, $ATR){
        
        return "-ENTRÓ".$this->editarApellido($telefono, $ATR);
    }
    public function editarDatosFecha($telefono, $ATR){
        
        return "-ENTRÓ".$this->editarFecha($telefono, $ATR);
    }
///////////////////Get
    public function getDatosByNombre($nombre){
        return $this->getByNombre($nombre);
    }
    public function getDatosByApellido($Apellido){
        return $this->getByApellido($Apellido);
    }
    public function getDatosByFechaNacimiento($Fecha){
        return $this->getByFechaNacimiento($Fecha);
    }

    public function getDatosByID($telefono){
        return $this->getByID($telefono);
    }
///////////////////Group

///////////////////Listar
    public function listarDatosByAll(){
        return $this->get_All();
    }

    public function listarDatosByNombre($Atributo){
        return $this->getByNombre($Atributo);
    }

    public function listarDatosWhere(string $where){
        return $this->get_All_Where($where);
    }
///////////////////////////////
    public function contarDatos(){
        return $this->contar();
    }
}
//$obj = new ControladorDatos();

//$obj->editarDatosCapitulo("z",1,3);

?>