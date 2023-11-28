<?php
$empezar=$_POST['submit'] ?? "";
$min=0;
$max=0;
$numero_propuesto=0;
$jugada=0;

$rtdo=0;

switch ($empezar){
    case "Empezar":
        $intentos=$_POST['intentos'];
        $max=2**$intentos;
       $numero_propuesto=($min+$max)/2;
        $jugada=1;
        break;
    case "Jugar":
        $min=$_POST['min'];
        $max=$_POST['max'];
        $intentos=$_POST['intentos'];
        $numero_propuesto=$_POST['propuesto'];
         $rtdo =$_POST['rtdo'];

         switch($rtdo){
             case ">": $min=$numero_propuesto;
             break;
             case "<": $max=$numero_propuesto;
                 break;
             case "=":
                 break;
         }
         $numero_propuesto=($min+$max)/2;
         $jugada++;

        break;
    case "Reiniciar":
        $msj = "voy a reiniciar el juego";
        break;
    case "Volver":
        $msj = "voy a volver el juego";
        break;
    default:
        $msj = "He caragado la página por url";
}


?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juego de adivina un número</title>
</head>
<body style="width: 60%;float:left;margin-left: 20%; ">

<h3></h3>
<fieldset style="width:40%;background:bisque ">

    <legend>Empieza el juego</legend>
    <form action="jugar.php" method="POST" >
        <h2> El n&uacutemero es  <span style="color: blue"> <?=$numero_propuesto?></span> </h2>
        <h5> Jugada  <span style="color: blue"> <?=$jugada?></span>  </h5>
        <h5> Actualmente te quedan   <span style="color: blue"> <?=$intentos-$jugada?> </span> intentos </h5>

        <input type="hidden" value="10" name="intentos">
        <fieldset>
            <legend>Indica c&oacutemo es el n&uacutemero qu&eacute has pensado</legend>
            <input type="radio" name="rtdo" checked value='>'> Mayor<br />
            <input type="radio" name="rtdo" value='<'> Menor<br />
            <input type="radio" name="rtdo" value='='> Igual<br />
            <input type="hidden" name="max" value=<?=$max?> >
            <input type="hidden" name="min" value=<?=$min?> >
            <input type="hidden" name="intentos" value=<?=$intentos-$jugada?> >
            <input type="hidden" name="propuesto" value=<?=$numero_propuesto?> >
        </fieldset>
        <hr />
        <input type="submit" value="Jugar" name="submit" >
        <input type="submit" value="Reiniciar" name="submit"  >
        <input type="submit" value="Volver" name="submit"  >

    </form>
</fieldset>

</body>
</html>