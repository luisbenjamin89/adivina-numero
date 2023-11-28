<?php
$opcion = $_POST['submit'] ?? "";


switch ($opcion){
    case "Acceder":
        $msj = "He hecho click en acceder";
        break;
    case "Consultar":
        $msj = "He hecho click en consultar";
        break;
    case "Ejecutar":
        $msj = "He hecho click en ejecutar";
        break;
    case "Buscar":
        $msj = "He hecho click en buscar";
        break;
    default:
        $msj = "He caragado la página por url";
}




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
<h1><?=$msj?></h1>
<form action="click.php" method="post">
    <input type="submit" value="Acceder" name="submit">
    <input type="submit" value="Consultar" name="submit">
    <input type="submit" value="Buscar" name="submit">
    <input type="submit" value="Ejecutar" name="submit">
</form>

</body>
</html>