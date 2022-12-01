<?php

require 'Secundarios/conexion.php';

  $Inicial = strtoupper($_POST['Inicial']);
  $ID = $_POST['ID'];
  $Tabla = $_POST['Tabla'];


  $message = '';
    
  if (!empty($Inicial) && !empty($ID)) {

    if (strtoupper($Tabla)=="ANIME") {
      $sql = "DELETE FROM `anime` WHERE `IdAnime`='$Inicial' AND `IdNumero`=$ID";
    }else if (strtoupper($Tabla)=="ESTADO") {
      $sql = "DELETE FROM `estado` WHERE `IdA`='$Inicial' AND `IdN`=$ID";
    }

    $stmt = $conexion->query($sql);
    header("Location: ./../index.php");
  }
  ?>

