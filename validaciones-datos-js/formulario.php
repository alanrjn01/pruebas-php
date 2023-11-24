<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function validarDatosGet() {
            let verificar = true;
            if (!document.valida_datos_get_frm.nombre_txt.value) {
                alert("Porfavor debe completar el campo de nombre");
                document.valida_datos_get_frm.nombre_txt.value.focus();
                verificar = false;
            }else{
                document.valida_datos_get_frm.submit();
            }
        }
        window.onload = function() {
            document.getElementById("enviar-get").onclick = validarDatosGet
        }
    </script>
</head>
<body>
    <div>
    <?php
    if (isset($_GET['error']) && $_GET['error']==="si"){
        echo "<span style='color: red;'>el nombre no coincide con ninguno de nuestra base de datos<span/>";
    }
    ?>
    <h1>Formulario enviado por el método GET</h1>
    <form name="valida_datos_get_frm" action="valida-datos.php" method="get" enctype="application/x-www-form-urlencoded">
        <label>Ingresar nombre de usuario:</label>
        <input type="text" name="nombre_txt"/>
        <br/>
        <br/>
        <label>Ingresar contraseña:</label>
        <input type="password" name="password_txt"/>
        <br/>
        <br/>
        <label>Ingrese su sexo</label>
        <br/>
        <input type="radio" name="sexo_rdo" value="M"/>
        <br/>
        <input type="radio" name="sexo_rdo" value="F"/>
        <br/>
        <input type="submit" name="enviar_btn" value="Enviar" id="enviar-get"/>
        <br/>
    </form>
    </div>
</body>
</html>