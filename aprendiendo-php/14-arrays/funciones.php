<?php
$cantantes = ['2pac','Drake','Jennifer López', 'Alfredo',7,6,3,3];
$numeros = [1,2,5,8,3,4];
//ordenar
sort($cantantes);
var_dump($cantantes);
//añadir
$cantantes[] = 'Natos';
array_push($cantantes,'Waor');
array_pop($cantantes);
unset($cantantes[2]);
var_dump($cantantes);

//Aleatorio
echo $cantantes[array_rand($cantantes)];
//Reversa
var_dump(array_reverse($numeros));
var_dump($numeros);
$resultado = array_search('bb', $cantantes);
var_dump($resultado);

echo count($cantantes).'</br>';
echo sizeof($cantantes).'</br>';

?>
