<?php
$numero1 = 65;
$numero2 = 33;

echo 'Suma: '.($numero1 + $numero2).'<br>';
echo 'Resta: '.($numero1 - $numero2).'<br>';
echo 'Multiplicación: '.($numero1 * $numero2).'<br>';
echo 'División: '.($numero1 / $numero2).'<br>';
echo 'Resto: '.($numero1 % $numero2).'<br>';

// Operadores incremento y decremento

$year = 2019;

--$year;

echo "<h1>$year</h1>";

//Operadores de asignación

$edad = 55;

echo $edad.'<br>';

//$edad = $edad + 5;
echo ($edad+=5);
echo ($edad-=5);
echo ($edad*=5);
echo ($edad/=5);

var_dump($edad);
?>




