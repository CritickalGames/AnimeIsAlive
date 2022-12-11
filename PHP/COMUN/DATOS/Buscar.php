<?php

require_once("../../USER/Admin.php");

$obj= new UserAdmin();

$telefono=$_POST["telefono"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$fecha=$_POST["fecha"];


$array=var_dump($obj->buscarDatosPorTelefono($telefono));
echo"<br>";
$array=var_dump($obj->buscarDatosPorNombre($nombre));
echo"<br>";
$array=var_dump($obj->buscarDatosPorApellido($apellido));
echo"<br>";
$array=var_dump($obj->buscarDatosPorFecha($fecha));
?>
