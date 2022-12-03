<?php
require_once "../../../PHP/USER/Comun.php";
    $objUserAdmin = new UserAdmin();

    $nombre = strtoupper($_POST['nombre']);


    if (($nombre!=NULL)) {
        $estado=$objUserAdmin->getEstadosByNombre($nombre);
        //var_dump($estado[0]["temporada"]);
        //echo($estado[0]["temporada"]);
        $objUserAdmin->borrarEstados($estado[0]["nombre"],$estado[0]["temporada"]);
        $objUserAdmin->borrarAnime($nombre);
    }else{
        echo "Inicial: $nombre <br>";
    }
?>