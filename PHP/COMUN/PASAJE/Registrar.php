<?php

require_once("../../USER/Admin.php");

$obj= new UserAdmin();
$asiento=$_POST["asiento"];
$ci=$_POST["ci"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$email=$_POST["email"];
if ($asiento!=NULL && $ci!=NULL && $nombre!=NULL && $apellido!=NULL && $email!=NULL) {
    if (strlen($ci)==8) {
        var_dump($obj->registrarPasaje($ci, $nombre, $apellido, $email, $asiento));
    }
}
echo "Registrarte";
?>
