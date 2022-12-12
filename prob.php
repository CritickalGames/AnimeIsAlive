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

$resultado=[];
$claves=[];

for ($i=0; $i <count($array) ; $i++) { 
    echo "Iniciamos [$i]";
    echo "<br>";
    for ($j=count($array)-1; $j >= 0 ; $j--) {

        if (
            $array[$i]["telefono"]==$array[$j]["telefono"]
            &&(!in_array($array[$i]["telefono"], $claves))
        ) {
            array_push($resultado, $array[$i]);
            array_push($claves, $array[$i]["telefono"]);
            
        }else{
            echo "$i-$j<br>";
        }
    }
    echo "<br>";
}

var_dump($resultado);echo"<br>";
print_r($claves);

?>


<form action="PHP/COMUN/DATOS/Listar.php" method="post">
    
    <button type="submit">Listar</button>
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