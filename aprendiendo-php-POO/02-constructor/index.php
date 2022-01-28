<?php
require_once 'coche.php';

$coche = new Coche('Amarillo', 'Renault', 'Clío', 150, 200, 5);
$coche1 = new Coche('Verde', 'Seat', 'Panda', 250, 200, 5);



$coche2 = new Coche('Azul', 'Citroen', 'Xara', 100, 220, 5);
$coche3 = new Coche('Rojo', 'Mercedes', 'Clase A', 350, 100, 3);

$coche -> color= 'Rosa';
$coche ->setMarca('Audi');

echo $coche2->mostrarInformacion($coche);




//var_dump($coche);
//var_dump($coche1);
//var_dump($coche2);
//var_dump($coche3);

