<?php
$texto = 'azul';
if (empty($texto)){
    $texto = 'gfdasdas';
    $textoMayus = strtoupper($texto);
    echo "<strong>$textoMayus</strong";
}else{
    echo "La variable tiene este contenido dentro: $texto";
}
?>