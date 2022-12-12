<?php

require_once("../../USER/Admin.php");

$obj= new UserAdmin();

$telefono=$_POST["telefono"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$fecha=$_POST["fecha"];

$varT=$obj->buscarDatosPorTelefono($telefono);
$varN=$obj->buscarDatosPorNombre($nombre);
$varA=$obj->buscarDatosPorApellido($apellido);
$varF=$obj->buscarDatosPorFecha($fecha);

$array=array();
if ($telefono!=NULL) {

    if (in_array($varT[0], $array)) {
        echo array_diff($varT, $varT[0]);
        echo "<br>";
    }

}
if ($nombre!=NULL) {
    array_push($array, $varN[0]);
}
if (!$apellido!=NULL) {
    array_push($array, $varA[0]);
}
if (!$fecha!=NULL) {
    array_push($array, $varF[0]);
}
var_dump($varT);
echo "<br>";
var_dump($array);

?>
