<?php
require_once "../../USER/Admin.php";
    $objUserAdmin = new UserAdmin();
    $nombre = $_POST['nombre'];
    //$nombre = "Z";
    //$nombre = "a";
    if (($nombre!=NULL)) {
        $animes=($objUserAdmin->listarAnimes_nombre($nombre));
        $estados=($objUserAdmin->listarEstados_nombre($nombre));
        $portadas=($objUserAdmin->listarPortadas_nombre($nombre));

        foreach ($animes as $key => $value) {
            $array;
            $array[$key]=$value;
            foreach ($portadas as $portadaK => $portadaV) {
                
                if ($portadaV) {
                    if (($value["nombre"]==$portadaV["nombre"])) {
                        $array[$key]=$portadaV;
                    }else {
                    }
                }
            }
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
        $animes=($objUserAdmin->listarAnimes_nombre("A"));
        $estados=($objUserAdmin->listarEstados_nombre("A"));
        $portadas=($objUserAdmin->listarPortadas_nombre("A"));
        
        foreach ($animes as $key => $value) {
            $array;
            $array[$key]=$value;
            foreach ($portadas as $portadaK => $portadaV) {
                
                if ($portadaV) {
                    if (($value["nombre"]==$portadaV["nombre"])) {
                        $array[$key]=$portadaV;
                    }else {
                    }
                }
            }
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