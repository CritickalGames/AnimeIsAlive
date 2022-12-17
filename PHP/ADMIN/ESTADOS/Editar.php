<?php
require_once "../../../PHP/USER/Comun.php";
    $obj = new UserAdmin();

    
    //$nombre = "z";
    //$temporada = 1;
    //$capitulo = 1;
    //$estado = "ver";

    $nombre = $_POST['nombre'];
    $temporada = $_POST['temporada'];
    $estado = $_POST['estado'];

    if (($nombre!= NULL)&&($temporada!= NULL)) {
        if (($obj->getEstadosByNombre($nombre, $temporada))) {
            echo ($obj->editarEstadosEstado($nombre, $temporada, $estado));
        }else {
            echo "Algo salió mal";
        }
    }else{
        echo "Algo salió mal";
    }
?>