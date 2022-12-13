<?php

require_once "RControladores.php";

class Backoffice{

    function agrupar(string $tabla, array $valores){
        
        switch (strtolower($tabla)) {
            case "pasaje":
                break;
        }
    }

    function borrar(string $tabla, array $valores){
        
        switch (strtolower($tabla)) {
            case "pasaje":
                $obj = new ControladorPasaje();
                $obj->borrarPasaje(
                        $valores[0]);
                break;
        }
    }

    function buscar(string $tabla, array $valores){
        
        switch (strtolower($tabla)) {
            case "pasaje":
                $obj = new ControladorPasaje();
                $by = "buscarPasajeBy".$valores[0];
                return ($obj->{$by}($valores[1]));
                break;
        }
    }

    function contar(string $tabla){
        
        switch (strtolower($tabla)) {
            case "pasaje":
                $obj = new ControladorPasaje();
                return $obj->contarPasaje();
                break;
        }
        
    }

    function conseguir(string $tabla, array $valores){
        
        switch (strtolower($tabla)) {
            case "pasaje":
                $obj = new ControladorPasaje();
                $by = "getPasajeBy".$valores[0];
                return ($obj->{$by}(
                    $valores[1]));
                break;
        }
        
    }

    function editar(string $tabla, array $valores){
        
        switch (strtolower($tabla)) {
            case "pasaje":
                $obj = new ControladorPasaje();
                $by = "editarPasaje".$valores[0];
                return ($obj->{$by}(
                        $valores[1],
                        $valores[2],
                        $valores[3]));
                break;
        }
    }

    function listar(string $tabla, array $valores){
        
        switch (strtolower($tabla)) {
            case "pasaje":
                $obj = new ControladorPasaje();
                $by = "listarPasajeBy".$valores[0];
                return ($obj->{$by}($valores[1]));
                break;
        }
        
    }
    function subir(string $tabla, array $valores){
        
        switch (strtolower($tabla)) {
            case "pasaje":
                $obj = new ControladorPasaje();
                ($obj->setPasaje(
                    $valores[0],
                    $valores[1],
                    $valores[2],
                    $valores[3]));
                break;
        }
    }
}

//$obj->{$strMetodo}();
/**
 
 */
?>

