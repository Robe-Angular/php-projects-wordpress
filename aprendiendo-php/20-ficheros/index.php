<?php
/*
//Abrir archivo
$archivo = fopen('fichero_texto.txt', 'a+');
//Leer contenido
while(!feof($archivo)){
    $contenido = fgets($archivo);

    echo $contenido.'<br>';    
}
//escribir
fwrite($archivo,'soy un texto metido de php \n');

//Cerrar archivo
fclose($archivo);
 * 
 */
//copy('fichero_texto.txt','fichero_copiado.txt')or die('Error al copiar');
//rename('fichero_copiado.txt', 'archivito_recopiadito.txt');
if (file_exists('fichero_texto.txt')){
    //unlink('fichero_texto.txt') or die('Error al borrar');
    echo 'Sí existe';
}else{
    echo 'El archivo no existe';
}

?>