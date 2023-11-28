<?php
$nombre=$_POST['nombre'];
$genero=$_POST['genero'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ping</title>
</head>
<body>
<h1>estoy en ping, hola <?=$nombre ?> y sos un <?=$genero?></h1>
<form action="pong.php" >
    <div >
        <button type="submit">ENVIAR</button>
    </div>


</form>
</body>
</html>
