<?php

    //las variables globales de PHP se llaman con $_ 
    //las variables globales de get y post guardan en diccionario los valores de los inputs<
    //isset comprueba que la variable esta declarada y no tenga valor nulo
    if (isset($_GET["enviar_btn"])){
        echo("Los datos fueron enviados a través del método get <br/>");
        echo("nombre: ".$_GET["nombre_txt"]);
        echo("<br/>password:".$_GET["password_txt"]);
    } else if (isset($_POST["enviar_btn"])) {
        echo("Los datos fueron enviados a través del método post <br/>");
        echo("nombre: ".$_POST["nombre_txt"]);
        echo("<br/>password:".$_POST["password_txt"]);
    }
?>