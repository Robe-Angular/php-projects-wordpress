<?php
$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase;
function holaMundo(){
    global $frase;
    echo "<h1>$frase</h1>";
    
    $year = 2019;
    echo "<h1>$year</h1>";
    return $year;
}


//echo holaMundo();

//Funciones variables

function buenasDias(){
    return "<h1>Hola! Buenos días :)</h1>";
}

function buenasTardes(){
    return "<h1>Hey! Qué tal ha ido la comida??</h1>";
}

function buenasNoches(){
    return "<h1>¿Te vas a dormir ya? Buenas noches!!</h1>";
}

$horario = $_GET['horario'];
$miFuncion = "buenas".$horario;
echo $miFuncion();
?>