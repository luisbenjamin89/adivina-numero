<?php
$msj=$_GET["msj"]?? "";
var_dump($msj);
$adios=$_POST['adios'] ??"";
var_dump($adios);

if(isset($_POST['submit'])){
    $loggin=htmlspecialchars($_POST['loggin']);
    $pass=htmlspecialchars($_POST['clave']);

    var_dump($loggin);
    var_dump($pass);


    if(validacion($loggin,$pass)==true){

        header("location: http://localhost/formulariophp/bienvenido.php?loggin=$loggin&clave=$pass");
        exit();
 }
    else $errot ="Datos incorrectos";
}


function validacion($loggin,$pass)
{
    if ($loggin == $pass) {
        return true;
    } else {
        return false;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form class="form-control" action="accesos.php" method="POST">
    <FIELDSET>
        <legend>Autentificacion</legend>
        <div class="form-group">
            <label for="loggin" class="form-label">LOGGIN</label>
            <input type="text" name="loggin" id="loggin" class="form-control"
                   title="introduzca su loggin" required>
        </div>

        <div class="form-group">
            <label for="clave" class="form-label">Password</label>
            <input type="text" name="clave" class="form-control" title="introduzca su password"
                   required>
        </div>

        <div class="form-group">
            <input type="submit" value="Acceder" name="submit">
        </div>
    </FIELDSET>

    <h1><?=$errot?></h1>
    <h2><?=$msj?></h2>
    <h2><?=$adios?></h2>
</form>
</body>
</html>
