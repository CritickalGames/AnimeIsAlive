<?php

require_once("../../USER/Admin.php");

$obj= new UserAdmin();

$telefono=$_POST["telefono"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$fecha=$_POST["fecha"];
if ($telefono!=NULL || $nombre!=NULL || $apellido!=NULL || $fecha!=NULL ) {
    $varT=$obj->buscarDatosPortelefono($telefono);
    $varN=$obj->buscarDatosPorNombre($nombre);
    $varA=$obj->buscarDatosPorApellido($apellido);
    $varF=$obj->buscarDatosPorFecha($fecha);


    $array=[];

    $array["TELEFONOS"]= $varT;
    
    $array["NOMBRES"]= $varN;
    
    $array["APELLIDOS"]= $varA;

    $array["FECHAS"]= $varF;

    $claves=[];
    $resultado=[];

    if (count($array["TELEFONOS"])>0) {
        for ($inicio=0; $inicio <count($array["TELEFONOS"]) ; $inicio++) {
            for ($termino=count($array["TELEFONOS"])-1; $termino >= 0 ; $termino--) {
    
                if (
                    $array["TELEFONOS"][$inicio]["telefono"]==$array["TELEFONOS"][$termino]["telefono"]
                    &&(!in_array($array["TELEFONOS"][$inicio]["telefono"], $claves))
                ) {
                    array_push($resultado, $array["TELEFONOS"][$inicio]);
                    array_push($claves, $array["TELEFONOS"][$inicio]["telefono"]);
                    
                }
                
            }
        }
    }

    if (count($array["NOMBRES"])>0) {
        for ($inicio=0; $inicio <count($array["NOMBRES"]) ; $inicio++) {
            for ($termino=count($array["NOMBRES"])-1; $termino >= 0 ; $termino--) {
    
                if (
                    $array["NOMBRES"][$inicio]["nombre"]==$array["NOMBRES"][$termino]["nombre"]
                    &&(!in_array($array["NOMBRES"][$inicio]["telefono"], $claves))
                ) {
                    array_push($resultado, $array["NOMBRES"][$inicio]);
                    array_push($claves, $array["NOMBRES"][$inicio]["telefono"]);
                    
                }
                
            }
        }
    }
    
    if (count($array["APELLIDOS"])>0) {
        for ($inicio=0; $inicio <count($array["APELLIDOS"]) ; $inicio++) {
            for ($termino=count($array["APELLIDOS"])-1; $termino >= 0 ; $termino--) {
    
                if (
                    $array["APELLIDOS"][$inicio]["apellido"]==$array["APELLIDOS"][$termino]["apellido"]
                    &&(!in_array($array["APELLIDOS"][$inicio]["telefono"], $claves))
                ) {
                    array_push($resultado, $array["APELLIDOS"][$inicio]);
                    array_push($claves, $array["APELLIDOS"][$inicio]["telefono"]);
                    
                }
                
            }
        }
    }
    
    if ($array["FECHAS"][0]) {
        for ($inicio=0; $inicio <count($array["FECHAS"]) ; $inicio++) {
            for ($termino=count($array["FECHAS"])-1; $termino >= 0 ; $termino--) {
    
                if (
                    $array["FECHAS"][$inicio]["fechnac"]==$array["FECHAS"][$termino]["fechnac"]
                    &&(!in_array($array["FECHAS"][$inicio]["telefono"], $claves))
                ) {
                    array_push($resultado, $array["FECHAS"][$inicio]);
                    array_push($claves, $array["FECHAS"][$inicio]["telefono"]);
                    
                }
                
            }
        }
    }
    
    var_dump($resultado);


    
    
    

}

?>
