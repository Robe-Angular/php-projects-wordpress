<?php

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero_1 = $_GET['numero1'];
    $numero_2 = $_GET['numero2'];

    echo '<h1>Calculadora</h1>' 
        .'Suma: '.($numero_1 + $numero_2).'<br>'
        .'Resta: '.($numero_1 - $numero_2).'<br>'
        .'Multiplicación: '.($numero_1 * $numero_2).'<br>'
        .'División: '.($numero_1 / $numero_2);
}else{
    echo '<h1>Introduce los valores por la url</h1>';
}
?>
