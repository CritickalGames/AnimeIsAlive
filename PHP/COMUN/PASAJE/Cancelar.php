<?php

require_once("../../USER/Admin.php");

$obj= new UserAdmin();
$aciento=$_POST["aciento"];


var_dump($obj->cancelarPasaje($aciento));
?>
