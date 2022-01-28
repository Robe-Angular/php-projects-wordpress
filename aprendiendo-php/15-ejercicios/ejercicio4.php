<?php
$matriz = ['hola mundo', 99];
$titulo = 'Máster en PHP';
$numero = 77;
$verdadero = true;
if(is_array($matriz)){
    echo 'El array es un array';
}
if(is_string($titulo)){
    echo "<h1>$titulo</h1>";
}
if(is_numeric($numero)){
    echo "<h1>$numero</h1>";
}
if(is_bool($verdadero)){
    echo "<h1>$verdadero</h1>";
}
?>

