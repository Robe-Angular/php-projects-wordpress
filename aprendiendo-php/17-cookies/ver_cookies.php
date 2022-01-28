<?php
/*
 * Para mostrar el valor de las cookies tengo que usar $_COOKIE, es un array asociativo
 */
if(isset($_COOKIE['micookie'])){
    echo "<h1>".$_COOKIE['micookie']."</h1>";
}else{
    echo 'no existe la cookie<br>';
}
if(isset($_COOKIE['unyear'])){
    echo "<h1>Cookie: ".$_COOKIE['unyear']."</h1>";
}else{
    echo 'no existe la cookie</br>';
}
?>
<a href ="borrar_cookies.php">borrar galletas</a>
<br>
<a href ="crear_cookies.php">crear galletas</a>