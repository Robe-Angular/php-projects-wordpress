<?php
$numeros = [34,44,55,77,23,9,97,67];
echo '<h1>Recorrer y mostrar</h1>';

function mostrarArray($numeros){
    $cadena_array = '';
    foreach ($numeros as $key => $value) {
    $cadena_array .=  $value.'<br>';
    }
    return $cadena_array;
}
echo mostrarArray($numeros);
echo '<h1>Ordenar y mostrar</h1>';
sort($numeros);
echo mostrarArray($numeros).'<br>';
echo '<h1>Longitud</h2>';
echo count($numeros);

$busqueda = $_GET['busqueda'] ;
if (isset($_GET['busqueda'])){
        echo "<h1>Buscar en el array el número $busqueda</h1>";
    $search = array_search($busqueda, $numeros);
    if (!empty($search)){
        echo "<h4>$busqueda exite en el array, en el índice $search</h4>";
    }else{
        echo "$busqueda no está en el array";
    }
}else{
    echo "<h1 style='color: red'>No ha puesto nadaa</h1>";
}

?>