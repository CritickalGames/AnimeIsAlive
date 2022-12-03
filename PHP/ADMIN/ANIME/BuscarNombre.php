<?php
require_once "../../../PHP/USER/Comun.php";
    $objUserAdmin = new UserAdmin();
    $nombre = $_POST['nombre'];
    //$nombre = "Z";
    //$nombre = "a";
    if (($nombre!=NULL)) {
        $animes=($objUserAdmin->buscarAnimeNombre($nombre));
        $estados=($objUserAdmin->agruparEstadosForTemporadaByNombre($nombre));
        foreach ($animes as $key => $value) {
            $array;
            $array[$key]=$value;
            foreach ($estados as $estadoK => $estadoV) {
                if ($estadoV) {
                    if (($value["nombre"]==$estadoV["nombre"])) {
                        $array[$key]=$estadoV;
                    }
                }
            }

        }
        echo json_encode($array);
    }else{
        $animes=($objUserAdmin->listarAnimePorInicial("A"));
        $estados=($objUserAdmin->agruparEstadosForTemporadaByInicial("A"));

        foreach ($animes as $key => $value) {
            $array;
            $array[$key]=$value;
            
            foreach ($estados as $estadoK => $estadoV) {
                if ($estadoV) {
                    if (($value["nombre"]==$estadoV["nombre"])) {
                        $array[$key]=$estadoV;
                    }else {
                        break;
                    }
                }
            }
        }
        echo json_encode($array);
    }
?>