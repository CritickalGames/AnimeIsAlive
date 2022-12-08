<?php

require_once "RControladores.php";

class Backoffice{

    function agrupar(string $tabla, array $valores){
        
        switch (strtolower($tabla)) {
            case "anime":
                break;
            case "estados":
                $obj = new ControladorEstados();
                $by = "agrupar".$valores[0];
                return ($obj->{$by}($valores[1]));
                break;
            case "datos":
                break;
        }
    }

    function buscar(string $tabla, array $valores){
        
        switch (strtolower($tabla)) {
            case "anime":
                $obj = new ControladorAnime();
                $by = "buscarAnimeBy".$valores[0];
                return ($obj->{$by}($valores[1]));
                break;
            case "estados":
                $obj = new ControladorEstados();
                $by = "buscarEstadosBy".$valores[0];
                return ($obj->{$by}($valores[1]));
                break;
            case "datos":
                $obj = new ControladorDatos();
                $by = "buscarDatosBy".$valores[0];
                return ($obj->{$by}($valores[1]));
                break;
        }
    }

    function borrar(string $tabla, array $valores){
        
        switch (strtolower($tabla)) {
            case "anime":
                $obj = new ControladorAnime();
                $obj->borrarAnime(
                        $valores[0]);
                break;
            case "estados":
                $obj = new ControladorEstados();
                $obj->borrarEstados(
                    $valores[0],
                    $valores[1]);
                break;
            case "datos":
                $obj = new ControladorDatos();
                $obj->borrarDatos(
                        $valores[0]);
                break;
        }
    }

    function contar(string $tabla){
        
        switch (strtolower($tabla)) {
            case "anime":
                $obj = new ControladorAnime();
                return $obj->contarAnime();
                break;
            case "estados":
                $obj = new ControladorEstados();
                return $obj->contarEstados();
                break;
            case "datos":
                $obj = new ControladorDatos();
                return $obj->contarDatos();
                break;
        }
        
    }

    function conseguir(string $tabla, array $valores){
        
        switch (strtolower($tabla)) {
            case "anime":
                $obj = new ControladorAnime();
                $by = "getAnimeBy".$valores[0];
                return ($obj->{$by}(
                    $valores[1]));
                break;
            case "estados":
                $obj = new ControladorEstados();
                $by = "getEstadosBy".$valores[0];
                return ($obj->{$by}(
                    $valores[1],
                    $valores[2]));
                break;
            case "datos":
                $obj = new ControladorDatos();
                $by = "getDatosBy".$valores[0];
                return ($obj->{$by}(
                    $valores[1]));
                break;
        }
        
    }

    function editar(string $tabla, array $valores){
        
        switch (strtolower($tabla)) {
            case "anime":
                $obj = new ControladorAnime();
                break;
            case "estados":
                $obj = new ControladorEstados();
                $by = "editarEstados".$valores[0];
                return ($obj->{$by}(
                        $valores[1],
                        $valores[2],
                        $valores[3]));
                break;
            case "datos":
                $obj = new ControladorDatos();
                $by = "editarDatos".$valores[0];
                return ($obj->{$by}(
                        $valores[1],
                        $valores[2]));
                break;
        }
    }

    function listar(string $tabla, array $valores){
        
        switch (strtolower($tabla)) {
            case "anime":
                $obj = new ControladorAnime();
                $by = "listarAnimeBy".$valores[0];
                return ($obj->{$by}($valores[1]));
                break;
            case "estados":
                $obj = new ControladorEstados();
                $by = "listarEstadoBy".$valores[0];
                return ($obj->{$by}($valores[1]));
                break;
            case "datos":
                $obj = new ControladorDatos();
                $by = "listarDatosBy".$valores[0];
                return ($obj->{$by}($valores[1]));
                break;
        }
        
    }
    function subir(string $tabla, array $valores){
        
        switch (strtolower($tabla)) {
            case "anime":
                $obj = new ControladorAnime();
                return($obj->setAnime($valores[0]));
                break;
            case "estados":
                $obj = new ControladorEstados();
                ($obj->setEstados(
                    $valores[0],
                    $valores[1],
                    $valores[2],
                    $valores[3]));
                break;
            case "datos":
                $obj = new ControladorDatos();
                ($obj->setDatos(
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

