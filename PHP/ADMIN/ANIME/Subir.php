<?php
require_once "../../../PHP/USER/Comun.php";
    $objUserAdmin = new UserAdmin();

    
    //$nombre = "z";
    $nombre = $_POST['nombre'];

    if ($nombre!= NULL) {
        var_dump($objUserAdmin->subirAnime("$nombre"));
    }else{
        echo "Algo salió mal";
    }
?>