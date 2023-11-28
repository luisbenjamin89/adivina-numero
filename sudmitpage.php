<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>gestion de pagina</title>
</head>
<h1>Parametros de pagina</h1>

<form action="/formatpage.php" method="post" >

    <div class="form-group">
        <label for="cabecera" class="form-label">Altura de la cabecera</label>
        <input type="text" name="cabecera" id="cabecera" class="form-control"
             required>
    </div>

    <div class="form-group">
        <label for="menu" class="form-label">Altura menu</label>
        <input type="text" name="menu" id="menu" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="menuancho" class="form-label">Ancho menu</label>
        <input type="text" name="menuancho" id="menuancho" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="contenido" class="form-label">Ancho contenido</label>
        <input type="text" name="contenido" id="contenido" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="colorcabecera" class="form-label" >Selecciona el color de fondo de la cabecera</label>
        <select name="colorcabecera" id="colorcabecera" >
            <option value="red">ROJO</option>
            <option value="yelow">AMARILLO</option>
            <option value="blue">AZUL</option>
        </select>
    </div>

    <div class="form-group">
        <label for="colormenu" class="form-label" >Selecciona el color de fondo menu</label>
        <select name="colormenu" id="colormenu" >
            <option value="red">ROJO</option>
            <option value="yelow">AMARILLO</option>
            <option value="blue">AZUL</option>
        </select>
    </div>

    <div class="form-group">
        <label for="colorcontenido" class="form-label" >Selecciona el color de fondo contenido</label>
        <select name="colorcontenido" id="colorcontenido" >
            <option value="red">ROJO</option>
            <option value="yelow">AMARILLO</option>
            <option value="blue">AZUL</option>
        </select>
    </div>

    <div class="form-group">
        <label for="px" class="form-label">Tamaño del tíutlo en pixeles</label>
        <input type="text" name="px" id="px" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="textotitle" class="form-label">Texto para el título</label>
        <input type="text" name="textotitle" id="textotitle" class="form-control" required>
    </div>

    <div class="form-group">
       <button type="submit">ENVIAR</button>
    </div>
</form>
<body>

</body>
</html>
