<?php
if(!is_dir('mi_carpeta')){
    mkdir('mi_carpeta', 0777) or die('no se puede crear la carpeta');
}else{
    echo 'Ya existe la carpeta';
}    

//rmdir('mi_carpeta');
if($gestor=opendir('./mi_carpeta')){
    echo '<br>';
    echo "<h2>Contenido de la carpeta</h2>";
    while ($archivo = readdir($gestor)){
        if ($archivo != '.' && $archivo != '..'){
            echo $archivo.'<br>';
        }
        
    }
}
?>