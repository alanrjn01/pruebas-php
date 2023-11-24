<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <h1>Formulario enviado por el método GET</h1>
    <form name="envia-get_frm" action="enviar-datos.php" method="get" enctype="application/x-www-form-urlencoded">
        <label>Ingresar nombre de usuario:</label>
        <input type="text" name="nombre_txt"/>
        <br>
        <br>
        <label>Ingresar contraseña:</label>
        <input type="password" name="password_txt"/>
        <br>
        <input type="submit" name="enviar_btn" value="Enviar"/>
    </form>
    </div>

    <div>
    <h1>Formulario enviado por el método POST</h1>
    <form name="envia-post_frm" action="enviar-datos.php" method="post" enctype="application/x-www-form-urlencoded">
        <label>Ingresar nombre de usuario:</label>
        <input type="text" name="nombre_txt"/>
        <br>
        <br>
        <label>Ingresar contraseña:</label>
        <input type="password" name="password_txt"/>
        <br>
        <input type="submit" name="enviar_btn" value="Envio"/>
    </form>
    </div>
</body>
</html>