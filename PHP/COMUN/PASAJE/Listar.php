<?php

require_once("../../USER/Admin.php");

$obj= new UserAdmin();

echo json_encode($obj->listarPasaje());
?>
