<?php
//require("PHP/USER/Admin.php");

//$objAdmin               = new UserAdmin();
//$objControladorAnime    = new ControladorAnime();
//$objModeloAnime         = new ModeloAnime();
//$objModeloConexion      = new ModeloConexion();




?>
<form action="PHP/COMUN/ANIME/BuscarNombre.php" method="post">
    <input type="text" name="nombre" placeholder="nombre">
    <button type="submit">buscar por nombre</button>
</form>
<form action="PHP/COMUN/ESTADOS/Subir.php" method="post">
    <input type="text" name="nombre" placeholder="nombre">
    <input type="text" name="temporada" placeholder="temporada">
    <input type="text" name="capitulo" placeholder="capitulo">
    <input type="text" name="estado" placeholder="estado">
    <button type="submit">subir capitulo</button>
</form>