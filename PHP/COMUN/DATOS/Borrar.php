<?php

require_once("../../USER/Admin.php");

$obj= new UserAdmin();

$telefono=$_POST["telefono"];

var_dump($obj->borrarDatos($telefono));
?>
