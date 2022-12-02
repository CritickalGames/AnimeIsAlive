<?php
require("PHP/USER/Admin.php");

$objAdmin               = new UserAdmin();
$objControladorAnime    = new ControladorAnime();
$objModeloAnime         = new ModeloAnime();
$objModeloConexion      = new ModeloConexion();


echo($objAdmin->borrarAnime("Z"));
//echo($objModeloConexion->colTOatr("z, j, a, b, c", "tetas", "quiero", "YO"));

?>
<form action="PHP/ANIME/BuscarNombre.php?nombre=a" method="post">
    <input type="text" name="nombre">
    <button type="submit">Pulsa</button>
</form>