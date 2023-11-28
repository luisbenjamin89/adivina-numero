<?php
$cabecera=$_POST['cabecera'];
$colorcabecera=$_POST['colorcabecera'];
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

<form action="click.php" method="post">
    <input type="submit" value="Acceder" name="submit">
    <input type="submit" value="Consultar" name="submit">
    <input type="submit" value="Buscar" name="submit">
    <input type="submit" value="Ejecutar" name="submit">
</form>
</body>
</html>