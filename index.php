<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="filtoseninput.php" method="POST">

    <div class="form-group">
        <label for="nombre" class="form-label">NOMBRE Y APELLIDO</label>
        <input type="text" name="nombre" id="nombre" class="form-control"
               title="introduzca nombre y apellidos" placeholder="Benjamin" required>
    </div>

    <div class="form-group">
        <label for="edad" class="form-label">edad</label>
        <input type="text" name="edad" class="form-control" title="introduzca su Edad"
               required>
    </div>

    <div >
        <label for="genero" >GENERO</label>
        <select name="genero" id="genero" >
            <option value="Mujer">Mujer</option>
            <option value="Hombre">Hombre</option>
            <option value="no aporta">no aporta </option>
        </select>
    </div>

    <div >
        <button type="submit">ENVIAR</button>
    </div>


</form>
</body>
</html>
