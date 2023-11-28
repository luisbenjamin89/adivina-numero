<?php

$var = "";

if (isset($var))
    echo "<h1>La variable $var sí existe</h1>";
else
    echo "<h1>La variable \$var no existe</h1>";

if (is_null($var))
    echo "<h1>\$var es null</h1>";
else
    echo "<h1>$var no es null</h1>";

if (empty($var))
    echo "<h1>\$var está vacía con valor \"$var\"</h1>";
else
    echo "<h1>$var no está vacía</h1>";