<?php

require 'Secundarios/conexion.php';

$Inicial = strtoupper($_POST['Inicial']);
$ID = 11111;
$Nombre = $_POST['Nombre'];
$Tabla = $_POST['Tabla'];

$ID = $_POST['ID'];
$Capitulo = $_POST['Capitulo'];
$Estado = $_POST['Estado'];
$Temporada = $_POST['Temporada'];
$VecesVisto = $_POST['VecesVisto'];

/***** */

if (strtoupper($Tabla)=="ANIME") {
    $sql="SELECT IdAnime, count(IdAnime) from anime where IdAnime='$Inicial'";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
        $ID= ($mostrar['count(IdAnime)'])+1;        
    }

    if (!empty($Inicial) && !empty($Nombre)) {
        $sql = "INSERT INTO anime (IdAnime, IdNumero, nombre) 
            VALUES ('$Inicial', $ID, '$Nombre')";
        $stmt = $conexion->query($sql);
        header("Location: ./../index.php");
    } 
}else if (strtoupper($Tabla)=="ESTADO") {
    if (!empty($Inicial) && !empty($ID)) {
        $sql = "INSERT INTO estado (VecesVista, IdA, IdN, Capitulo, Estado, Temporada) 
            VALUES ($VecesVisto, '$Inicial', $ID, $Capitulo, '$Estado', $Temporada)";
        $stmt = $conexion->query($sql);
        header("Location: ./../index.php");
    } 
}
    echo "<center><h1> Cambia la tabla ".$Tabla."</h1></center>";
    echo $sql;

/***** */
?>