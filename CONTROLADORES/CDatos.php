<?php

require_once "RModelos.php";

class ControladorDatos extends ModeloDatos
{

    const nombreDeTabla = "Datos";

    public function setDatos($telefono, $nombre, $apellido, $fechnac){
        $alert = self::nombreDeTabla;
        echo "<br>-set$alert Controlador-";
        $this->set($telefono, $nombre, $apellido, $fechnac);
    }
///////////////////Borrar
    public function borrarDatos($telefono){
        $this->borrar($telefono);
    }
///////////////////Search
    public function buscarDatosByTelefono($Atributo){
        return $this->buscarPorTelefono($Atributo);
    }
    public function buscarDatosByNombre($Atributo){
        return $this->buscarPorNombre($Atributo);
    }
    public function buscarDatosByApellido($Atributo){
        return $this->buscarPorApellido($Atributo);
    }
    public function buscarDatosByFecha($Atributo){
        return $this->buscarPorFecha($Atributo);
    }
///////////////////Edit
    public function editarDatosNombre($columnas, $ATR){
        $this->editarNombre($columnas, $ATR);
    }
    public function editarDatosApellido($columnas, $ATR){
        
        $alert = self::nombreDeTabla;
        return "-ENTRÓ a edit $alert apellido".$this->editarApellido($columnas, $ATR);
    }
    public function editarDatosFecha($columnas, $ATR){
        
        $alert = self::nombreDeTabla;
        return "-ENTRÓ a edit $alert fecha".$this->editarFecha($columnas, $ATR);
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