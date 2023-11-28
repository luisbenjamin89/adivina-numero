<?php
$nombre= filter_input(INPUT_POST,"nombre");
$nombre=htmlspecialchars($nombre);
$años = filter_input(INPUT_POST, "edad", FILTER_VALIDATE_INT);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>validacion</title>
</head>
<body>
<h1>hola <?=$nombre?>  tienes estos años <?=$años?></h1>

</body>
</html>
