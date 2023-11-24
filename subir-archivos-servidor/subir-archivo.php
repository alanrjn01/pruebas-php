<?php

    //foreach recorro la variable ["archivo_fls"] con for each. La variable archivo_fls tiene dentro un objeto
    // clave hace de propiedad y valor del valor de ese indice
    if(isset($_FILES["archivo_fls"])){

        echo('<h1>'.$_FILES["archivo_fls"]["name"].'</h1>');

        foreach ($_FILES["archivo_fls"] as $clave => $valor) {
            echo("Propiedad: <b>$clave</b> --- Valor: <b>$valor</b> <br/>");
        }

        //$archivo guarda la ruta del archivo temporal de la carpeta temp
        //$destino guarda la ruta donde se va a guardar el archivo
        $archivo = $_FILES["archivo_fls"]["tmp_name"];
        $destino = "archivos/".$_FILES["archivo_fls"]["name"];
        
        move_uploaded_file($archivo, $destino);
        echo("<br/> archivo subido");
    }


    if(isset($_POST['ir-atras'])){
        header("Location: enviar-archivo.php");
    }
?>

<html>
<form name='form' method='post' action='subir-archivo.php'>
    <input name='ir-atras' type='submit' value='volver hacia atras' onclick=''/>
</form>
</html>