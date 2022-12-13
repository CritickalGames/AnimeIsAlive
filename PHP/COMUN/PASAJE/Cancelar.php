<?php

require_once("../../USER/Admin.php");

$obj= new UserAdmin();
$asiento=$_POST["asiento"];
echo $asiento;
var_dump($obj->cancelarPasaje($asiento));
?>
