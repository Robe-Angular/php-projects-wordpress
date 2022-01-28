<?php

//Condicionales

/*
 * Operadores de ocmparación
== igual
=== idéntico
!=diferente
<> diferente
!== no idéntico
< menor que
> mayor que
<= menor o igual
>= mayor o igual

&&
||
!
and, or
*/

$color = 'azul';

if($color=='rojo'){
    echo 'El color es rojo';
}else{
    echo 'El color no es rojo';
}
echo '<br/>';
$year = 2009;

if($year >= 2019){
    echo 'Estamos en 2019 en adelante';
}else{
    echo 'Estamos atrás de 2019';
}
// Ejemplo 3
$nombre = 'David Extremadura';
$edad=49;
$ciudad = 'Madrid';
$continente = 'Asia';
$mayoria_edad = 18;

if ($edad >= $mayoria_edad){
    echo '<h1>'. $nombre .'es mayor de edad</h1>';
    if($continente == 'Europa'){
        echo "y es de: $ciudad";   
    }else{
        echo 'No es europeo';
    }
}else{
    echo "<h2>$nombre no es mayor de edad</h2>";
}
echo '<br>';
//Ejemplo 4
$dia = 2;
/*
if ($dia == 1){
    echo 'Es lunes';
}else{
    if ($dia == 2){
    echo 'Es martes';
    }else{
        if ($dia == 3){
            echo 'Es miércoles';
        }else{
            if ($dia == 4){
                echo 'Es jueves';
            }else{
                if($dia == 5){
                    echo 'Es viernes';
                }else{
                    echo 'Es fin de semana';
                }
            }
        }
    }
    
}
 */

if ($dia==1){
    echo 'lunes';
}elseif($dia==2){
    echo 'martes';
}elseif($dia==3){
    echo 'miércoles';
}elseif($dia==4){
    echo 'jueves';
}elseif($dia==5){
    echo 'viernes';
}else{
    echo 'Es fin de semana';
}
echo '<br>';
//Ejemplo 5
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 20;
if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo 'Está en edad de trabajar';
}else{
    echo 'No puede trabajar';
}
echo '<br>';
$pais = 'Francia';

if($pais == 'México' || $pais == 'España'|| $pais == 'Colombia'){
    echo 'En este país se habla español';
}else{
    echo 'En este país no se habla español';
}

echo '<hr>';
$dia = 7;
switch ($dia){
    case 1:
        echo 'Lunes!';
        break;
    case 2:
        echo 'Martes!';
        break;
    case 3:
        echo 'Miércoles!';
        break;
    case 4:
        echo 'Jueves!';
        break;
    case 5:
        echo 'Viernes!';
        break;
    default:
        echo 'Es fin de Semana!';
}
//GOTO

goto marca;
echo '<h3>Instruccion 1</h3>';
echo '<h3>Instruccion 2</h3>';
echo '<h3>Instruccion 3</h3>';
echo '<h3>Instruccion 4</h3>';

marca:
echo '<h1>Me he saltado cuatro echos</h1>';
?>

