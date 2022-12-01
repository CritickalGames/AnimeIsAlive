<?php

require 'Secundarios/conexion.php';

$Inicial = strtoupper($_POST['Inicial']);
$ID = $_POST['ID'];
$Nombre = strtolower($_POST['Nombre']);
if($Nota < 4){
    $Juicio="Febrero";
}
if($Nota > 3 && $Nota < 8){
    $Juicio="Diciembre";
}
if($Nota > 7 && $Nota < 13){
    $Juicio="Exonera";
}
  $message = '';
  if (!empty($CI)) {
    $sql = "UPDATE estudiante SET  nombre='$Nombre' ,apellido='$Apellido', grupo='$Grupo', nota='$Nota', juicio='$Juicio' WHERE ci='$CI'";
    $stmt = $conexion->query($sql);
    header("Location: ./../index.php");
    
  }
?>


<?php $Inicial?>