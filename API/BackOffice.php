<?php

require_once "RControladores.php";

class Backoffice{

    function borrar(string $tabla, array $valores){
        
        switch (strtolower($tabla)) {
            case "anime":
                $obj = new ControladorAnime();
                $obj->borrar(
                        $valores[0]);
                break;
        }
    }

    function buscar(string $tabla, array $valores){
        
        switch (strtolower($tabla)) {
            case "anime":
                $obj = new ControladorAnime();
                $by = "buscarBy".$valores[0];
                return ($obj->{$by}($valores[1]));
                break;
        }
    }

    function contar(string $tabla){
        
        switch (strtolower($tabla)) {
            case "anime":
                $obj = new ControladorAnime();
                return $obj->contar();
                break;
        }
        
    }

    function editar(string $tabla, array $valores){
        
        switch (strtolower($tabla)) {
            case "anime":
                $obj = new ControladorAnime();
                $by = "editar".$valores[0];
                return ($obj->{$by}(
                        $valores[1],
                        $valores[2],
                        $valores[3]));
                break;
        }
    }

    function listar(string $tabla, array $valores){
        
        switch (strtolower($tabla)) {
            case "anime":
                $obj = new ControladorAnime();
                $by = "listar_".$valores[0];
                return ($obj->{$by}(
                    $valores[1]
                ));
            break;
            case "estados":
                $obj = new ControladorEstados();
                $by = "listar_".$valores[0];
                return ($obj->{$by}(
                    $valores[1]
                ));
            break;
        }
        
    }
    function subir(string $tabla, array $valores){
        
        switch (strtolower($tabla)) {
            case "anime":
                $obj = new ControladorAnime();
                ($obj->set(
                    $valores[0]
                ));
                break;
        }
    }
}

//$obj->{$strMetodo}();
/**
 
 */
?>

