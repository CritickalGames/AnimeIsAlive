<?php
require_once "../USER/Admin.php";
    $obj = new UserAdmin();

    
    //$nombre = "Aharen san";
    //$temporada = 1;
    //$capitulo = 1;
    //$estado = "ver";

    $nombre = $_POST['nombre'];
    $temporada = $_POST['temporada'];
    $capitulo = $_POST['capitulo'];
    $estado = $_POST['estado'];

    if (($nombre!= NULL)&&($temporada!= NULL)) {
        if ($capitulo=="0") {
            $estado="ver";
        }elseif(intval($temporada)==0){
            $estado="ver pelicula";
        }elseif (intval($capitulo)>0) {
            $estado="viendo";
        }
        var_dump ($obj->getEstadosByID($nombre, $temporada)[0]);
        echo "\n$nombre";
        echo "\n";
        var_dump ($obj->getEstadosByNombre($nombre, $temporada)[0]);
        echo "\n";
        var_dump ($obj->getAnimeByNombre("Z"));
        echo "\n";

        if (($obj->getEstadosByID($nombre, $temporada)[0])!=0) {
            echo "ENTRA";
            echo ($obj->editarEstadosCapitulo($nombre, $temporada, $capitulo));
            ($obj->editarEstadosEstado($nombre, $temporada, $estado));
        }elseif(!($obj->getEstadosByID($nombre, $temporada)[0])) {
            echo "¿ENTRA?";
            $obj->subirEstados($nombre, $temporada, $capitulo, $estado);
        }else{
            echo "La clave está bien, pero nada más";
        }
    }else{
        echo "Algo salió mal";
    }
?>