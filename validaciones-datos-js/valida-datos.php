<?php


//header redirecciona a formulario.php y le manda la variable error con valor si
$nombreBD = "alan";

if ($_GET['nombre_txt']!= $nombreBD){
    echo("Hoala");
    header("Location: formulario.php?error=si");
}else{
    echo("Los nombres coinciden!");
}
?>