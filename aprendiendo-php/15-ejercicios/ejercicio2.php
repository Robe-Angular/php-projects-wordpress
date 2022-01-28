<?php
$coleccion = array();
for($i = 0; $i < 120; $i++){
    array_push($coleccion, 'elemento-'.$i);
}
foreach ($coleccion as $elemento){
    echo $elemento.'<br>';
}
?>
