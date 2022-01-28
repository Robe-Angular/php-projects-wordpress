<?php
/*
 Sesión: Alamcenar y persustir datos del usuario, mientras navega en un sitio web
 * hasta que cierra sesión o cierra el navegador.
 */
//Iniciar la sesión
session_start();
//Variable local
$variable_normal = 'Soy una cadena de texto';
//Variable de sesion
$_SESSION['variable persistente'] = 'Hola soy una sesión activa';
echo $variable_normal.'<br>';
echo $_SESSION['variable persistente'];
?>