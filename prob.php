<?php
//require("PHP/USER/Admin.php");

//$objAdmin               = new UserAdmin();
//$objControladorAnime    = new ControladorAnime();
//$objModeloAnime         = new ModeloAnime();
//$objModeloConexion      = new ModeloConexion();

$array = [
["telefono"=> "1111111", "nombre"=>  "adsqwtb zdfs", "apellido"=>  "ajd 3fdgdc", "fechnac"=>  "0000-00-00" ],
["telefono"=> "1111111", "nombre"=>  "aaaa", "apellido"=>  "abbab", "fechnac"=>  "2022-12-11" ],
["telefono"=> "1111111", "nombre"=> "35zd eas", "apellido"=> "124zdzxdg", "fechnac"=> "2022-12-11"]];

$ingresado=["telefono"=> "14234", "nombre"=> "35zd eas", "apellido"=> "124zdzxdg", "fechnac"=> "2022-12-11"];
array_push($array, $ingresado);
array_push($array, $ingresado);
$ingresado=["telefono"=> "52525", "nombre"=> "35zd eas", "apellido"=> "124zdzxdg", "fechnac"=> "2022-12-11"];
array_push($array, $ingresado);
array_push($array, $ingresado);

$resultado=[];
$claves=[];

for ($inicio=0; $inicio <count($array) ; $inicio++) { 
    for ($termino=count($array)-1; $termino >= 0 ; $termino--) {

        if (
            $array[$inicio]["telefono"]==$array[$termino]["telefono"]
            &&(!in_array($array[$inicio]["telefono"], $claves))
        ) {
            array_push($resultado, $array[$inicio]);
            array_push($claves, $array[$inicio]["telefono"]);
            
        }
        if (
            $array[$inicio]["nombre"]==$array[$termino]["nombre"]
            &&(!in_array($array[$inicio]["telefono"], $claves))
        ) {
            array_push($resultado, $array[$inicio]);
            array_push($claves, $array[$inicio]["telefono"]);
            
        }
        if (
            $array[$inicio]["apellido"]==$array[$termino]["apellido"]
            &&(!in_array($array[$inicio]["telefono"], $claves))
        ) {
            array_push($resultado, $array[$inicio]);
            array_push($claves, $array[$inicio]["telefono"]);
            
        }
        if (
            $array[$inicio]["fechnac"]==$array[$termino]["fechnac"]
            &&(!in_array($array[$inicio]["telefono"], $claves))
        ) {
            array_push($resultado, $array[$inicio]);
            array_push($claves, $array[$inicio]["telefono"]);
            
        }
    }
}

var_dump($resultado);echo"<br>";
print_r($claves);

?>
<br>///////////////////////////////////////////////////////

<form action="PHP/PROB/ANIME/Listar.php" method="post">
    
    <button type="submit">Listar</button>
</form>

<form action="PHP/PROB/ANIME/BuscarNombre.php" method="post">
    <input type="text" name="nombre">
    <button type="submit">Buscar</button>
</form>
