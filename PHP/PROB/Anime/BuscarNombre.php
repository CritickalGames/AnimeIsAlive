<?php
require_once "../../USER/Admin.php";
    $objUserAdmin = new UserAdmin();
    $nombre = $_POST['nombre'];
    //$nombre = "Z";
    //$nombre = "a";
    if (($nombre!=NULL)) {
        $animes=($objUserAdmin->listarAnime_nombre($nombre));
        $estados=($objUserAdmin->listarEstado_nombre($nombre));
        
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
        $animes=($objUserAdmin->listarAnime_nombre("A"));
        $estados=($objUserAdmin->listarEstado_nombre("A"));

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