<?php
require_once "../../../PHP/USER/Comun.php";
    $objUserAdmin = new UserAdmin();
    echo json_encode($objUserAdmin->listarAnime());
    
?>