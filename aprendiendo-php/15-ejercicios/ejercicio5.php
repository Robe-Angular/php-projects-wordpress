<?php
$videojuegos = [
    'Accion' => ['GTA','COD','PUGB'],
    'Aventura' => ['Assasins','CRASH','Prince of persia'],
    'Deportes' => ['Fifa 19','PES 19','MOTO GP 19'],
];
$categorias = array_keys($videojuegos);
?>
<table border ="1">
   <?php    require_once 'ejercicio5/encabezado.php'; ?>
   <?php    require_once 'ejercicio5/accion.php'; ?>
   <?php    require_once 'ejercicio5/aventura.php'; ?>
   <?php    require_once 'ejercicio5/deportes.php'; ?>
    
    

</table>
