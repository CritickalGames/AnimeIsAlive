<?php

require_once("../../USER/Admin.php");

$obj= new UserAdmin();

$telefono=$_POST["telefono"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$fecha=$_POST["fecha"];

echo $telefono."-".$nombre."-".$apellido."-".$fecha;
echo"<br>";

if ($telefono!=NULL && $nombre!=NULL && $apellido!=NULL && $fecha!=NULL) {
    var_dump($obj->subirDatos($telefono, $nombre, $apellido, $fecha));
}

?>
