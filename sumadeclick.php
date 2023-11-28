<?php
$test=isset($_POST['submit']);//estamos validando que se halla ejecutado el submit
if ($test="false")
{
    $msj="Aun no haz hecho click";

}

$opciones=$_POST['submit'] ?? null;/* estamos validando que el submit no venga basio y si viene brindar null */

switch($opciones)
{
    case "haz click";
    $click=$_POST['click'];
    $click ++;
    $msj="has hecho $click click ";
    break;

    case "Reiniciar el contador";
    $click=0;
    $msj="Empezamos de nuevo";
    break;
}




?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suma de click</title>
</head>
<body>

<h1>haz click en el boton </h1>

<form action="sumadeclick.php" method="post">
    <input type="hidden" name="click" value=<?=$click?>>
    <input type="submit" value="haz click" name="submit">
    <input type="submit" value="Reiniciar el contador" name="submit">
    <h1><?=$msj?></h1>
</form>

</body>
</html>