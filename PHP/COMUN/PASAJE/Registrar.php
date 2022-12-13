<?php

require_once("../../USER/Admin.php");

$obj= new UserAdmin();
$aciento=$_POST["aciento"];
$ci=$_POST["ci"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$email=$_POST["email"];
if ($aciento!=NULL && $ci!=NULL && $nombre!=NULL && $apellido!=NULL && $email!=NULL) {
    if (strlen($ci)==8) {
        var_dump($obj->registrarPasaje($ci, $nombre, $apellido, $email, $aciento));
    }
}
?>
