<?php

require_once "RModelos.php";

class ControladorPasaje extends ModeloPasaje
{

    const nombreDeTabla = "Pasaje";

///////////////////Borrar
///////////////////Search
    public function buscarPasajeBy($Atributo){
        return $this->buscarPor($Atributo);
    }
///////////////////Edit
    public function editarPasaje($col, $ATR, $valorPk){
        return $this->editar($col, $ATR, $valorPk)."<br>";
    }

    public function editarPasajeCancelar($col, $valorPk){
        return $this->cancelar($col, $valorPk);
    }

    public function editarPasajeLimpiar($col, $valorPk){
        return $this->limpiar($col, $valorPk);
    }
///////////////////Get
    public function getPasajeByNombre($nombre){
        return $this->getByNombre($nombre);
    }
    public function getPasajeByApellido($Apellido){
        return $this->getByApellido($Apellido);
    }
    public function getPasajeByFechaNacimiento($Fecha){
        return $this->getByFechaNacimiento($Fecha);
    }

    public function getPasajeByID($telefono){
        return $this->getByID($telefono);
    }
///////////////////Group

///////////////////Listar
    public function listarPasajeByAll(){
        return $this->get_All();
    }

    public function listarPasajeByNombre($Atributo){
        return $this->getByNombre($Atributo);
    }

    public function listarPasajeWhere(string $where){
        return $this->get_All_Where($where);
    }
///////////////////////////////
    public function contarPasaje(){
        return $this->contar();
    }
}
//$obj = new ControladorPasaje();

//$obj->editarPasajeCapitulo("z",1,3);

?>