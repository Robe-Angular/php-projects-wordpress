<?php

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    if($numero1 < $numero2){
        for($i = ($numero1 + 1); $i < $numero2; $i++){
        echo "<h1>$i</h1>";
        }
    }else{
        echo 'El número1 debe ser menor al número2';
    }
}else{
    echo "<h1>Los parámetros GET no existen</h1>";
}
?>
