<?php

$loggin=$_GET['loggin'] ?? null;
$pass=$_GET['clave']?? null;
$tiempo=date("s/m/y h:m:s",time());
$adios="Adios hasta luego te desconectaste a las $tiempo" ;
var_dump($loggin);
var_dump($pass);



if(is_null($loggin))
{
    $msj="tienes que acceder por autentificacion ";
    header("location:accesos.php?msj=$msj");
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Bienbenida</title>
</head>
<body>
<h1>Hola haz entrado con estas credenciales  loggin <?=$loggin?> password  <?=$pass?></h1>

<form action="accesos.php" method="POST">

    <input type="hidden" name="adios" id="adios"  value="<?=$adios?>">

    <div class="form-control">
        <button type="submit">Desconectar</button>
    </div>
</form>

</body>
</html>
