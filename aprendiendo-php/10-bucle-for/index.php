<?php
$resultado = 0;
/*
for($i = 0; $i <= 100; $i++){
    $resultado = $resultado + $i;
    echo '<p>'.$resultado.'</p>';
}

echo '<h1>El resultado es:' .$resultado.'</h1>';
*/
//Tabla de multiplicar
if(isset($_GET['numero'])){
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}
echo '<h1>Tabla de multiplicar del número $numero</h1>';


for($contador = 1; $contador <= 10; $contador++){
    
    if($numero * $contador == 45){
        echo 'no se pueden mostrar estas operaciones prohibidas';
        break;
    }
    echo "$numero x $contador = ".($numero * $contador).'<br>';
}
echo '<hr>';
?>

