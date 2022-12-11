<?php
//require("PHP/USER/Admin.php");

//$objAdmin               = new UserAdmin();
//$objControladorAnime    = new ControladorAnime();
//$objModeloAnime         = new ModeloAnime();
//$objModeloConexion      = new ModeloConexion();




?>


<form action="PHP/COMUN/DATOS/Listar.php" method="post">
    
    <button type="submit">buscar por nombre</button>
</form>


<form action="PHP/COMUN/DATOS/Subir.php" method="post">
    <p>Subir</p>
    <input type="text" name="telefono" placeholder="Telefono">
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="text" name="apellido" placeholder="Apellido">
    <input type="date" name="fecha" placeholder="Fecha">
    <button type="submit">Subir</button>
</form>


<form action="PHP/COMUN/DATOS/Borrar.php" method="post">
    <p>Borrar</p>
    <input type="text" name="telefono" placeholder="Telefono">
    <button type="submit">Borrar</button>
</form>

<form action="PHP/COMUN/DATOS/Buscar.php" method="post">
    <p>Subir</p>
    <input type="text" name="telefono" placeholder="Telefono">
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="text" name="apellido" placeholder="Apellido">
    <input type="date" name="fecha" placeholder="Fecha">
    <button type="submit">Buscar</button>
</form>

<form action="PHP/COMUN/DATOS/Listar.php" method="post">
    <p>Subir</p>
    <input type="text" name="telefono" placeholder="Telefono">
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="text" name="apellido" placeholder="Apellido">
    <input type="date" name="fecha" placeholder="Fecha">
    <button type="submit">Subir</button>
</form>